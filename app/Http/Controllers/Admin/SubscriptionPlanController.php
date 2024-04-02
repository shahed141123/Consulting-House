<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['plans'] = SubscriptionPlan::get();

        return view('admin.pages.subscription_plan.index', $data);
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
        $data = $request->all();
        // $data['descriptions'] = json_encode($request->input('descriptions')); // Convert array to JSON
        if ($request->has('descriptions')) {
            $data['descriptions'] = json_encode($request->input('descriptions'));
        } else {
            $data['descriptions'] = json_encode([]); // Set to empty array if not provided
        }
        SubscriptionPlan::create($data);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
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
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);
        $data = $request->all();

        if ($request->filled('descriptions')) {
            $data['descriptions'] = json_encode($request->input('descriptions'));
        } else {
            $data['descriptions'] = json_encode([]); // Set to empty array if not provided
        }

        $subscriptionPlan->update($data);
        toastr()->success('Data has been updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subscriptionPlan = SubscriptionPlan::findOrFail($id);
        $subscriptionPlan->forceDelete();
    }
}
