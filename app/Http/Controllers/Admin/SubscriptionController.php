<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showSubscriptionForm()
    {
        $data['plans'] = DB::table('subscription_plans')->orderBy('price','asc')->get();
        return view('frontend.pages.subscription_plan' , $data);
    }

    public function subscribe(Request $request, $id)
    {
        $data['plan'] = SubscriptionPlan::where('slug', $id)->first();
        $data['intent'] = auth()->user()->createSetupIntent();

        return view("frontend.pages.subscribe", $data);
    }

    public function subscription(Request $request)
    {
        $plan = SubscriptionPlan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)->create($request->token);

        return view("frontend.pages.subscription_success");
    }

    public function cancelSubscription(Request $request)
    {
        $user = $request->user();

        $user->subscription('default')->cancel();

        return redirect()->route('home')->with('success', 'Subscription canceled!');
    }
    public function __construct() {
        $this->middleware('auth');
    }
    public function retrievePlans() {
        $key = \config('services.stripe.secret');
        $stripe = new \Stripe\StripeClient($key);
        $plansraw = $stripe->plans->all();
        $plans = $plansraw->data;

        foreach($plans as $plan) {
            $prod = $stripe->products->retrieve(
                $plan->product,[]
            );
            $plan->product = $prod;
        }
        return $plans;
    }
    public function showSubscription() {
        $plans = $this->retrievePlans();
        $user = Auth::user();

        return view('seller.pages.subscribe', [
            'user'=>$user,
            'intent' => $user->createSetupIntent(),
            'plans' => $plans
        ]);
    }
    public function processSubscription(Request $request)
    {
        $user = Auth::user();
        $paymentMethod = $request->input('payment_method');

        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = $request->input('plan');
        try {
            $user->newSubscription('default', $plan)->create($paymentMethod, [
                'email' => $user->email
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }

        return redirect('dashboard');
    }
}
