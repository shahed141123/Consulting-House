<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\PaymentMethod;
use App\Models\Rfq;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::with('user')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == 'pending') {
                        return '<span class="badge bg-success">' . $row->status . '</span>';
                    } elseif ($row->status == 'processing') {
                        return '<span class="badge bg-info">' . $row->status . '</span>';
                    } elseif ($row->status == 'shipped') {
                        return '<span class="badge bg-danger">' . $row->status . '</span>';
                    } elseif ($row->status == 'delivered') {
                        return '<span class="badge bg-primary">' . $row->status . '</span>';
                    } elseif ($row->status == 'cancelled') {
                        return '<span class="badge bg-teal">' . $row->status . '</span>';
                    } elseif ($row->status == 'return') {
                        return '<span class="badge bg-purple">' . $row->status . '</span>';
                    } else {
                        return '';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-inline-flex text-center">
                    <a href=" "
                        class="text-teal">
                        <i class="ph-package"></i>
                    </a>
                    <a href="' . route('admin.order.edit', [$row->id]) . '"
                        class="text-primary mx-2">
                        <i class="ph-pen"></i>
                    </a>
                    <a href="' . route('admin.order.destroy', [$row->id]) . '" class="text-danger with-reload-deleteDT">
                        <i class="ph-trash"></i>
                    </a>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('admin.pages.order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'users' => User::latest()->get(['id', 'name']),
            'rfqs' => Rfq::latest()->get(['id', 'rfq_code']),
            'paymentMethods' => PaymentMethod::latest()->get(['id', 'method']),
            'countries' => Country::select('id', 'name')->latest()->get(),
        ];
        return view('admin.pages.order.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create([
            'user_id'                => $request->user_id,
            'rfq_id'                 => $request->rfq_id,
            'vendor_id'              => $request->vendor_id,
            'order_number'           => $request->order_number,
            'invoice_number'         => $request->invoice_number,
            'billing_name'           => $request->billing_name,
            'billing_address_line1'  => $request->billing_address_line1,
            'billing_address_line2'  => $request->billing_address_line2,
            'billing_city'           => $request->billing_city,
            'billing_state'          => $request->billing_state,
            'billing_postal_code'    => $request->billing_postal_code,
            'billing_country'        => $request->billing_country,
            'billing_phone'          => $request->billing_phone,
            'shipping_name'          => $request->shipping_name,
            'shipping_address_line1' => $request->shipping_address_line1,
            'shipping_address_line2' => $request->shipping_address_line2,
            'shipping_city'          => $request->shipping_city,
            'shipping_state'         => $request->shipping_state,
            'shipping_postal_code'   => $request->shipping_postal_code,
            'shipping_country'       => $request->shipping_country,
            'shipping_phone'         => $request->shipping_phone,
            'payment_method_id'      => $request->payment_method_id,
            'transaction_number'     => $request->transaction_number,
            'total_amount'           => $request->total_amount,
            'notes'                  => $request->notes,
            'payment_status'                => $request->payment_status,
            'order_date'             => $request->order_date,
            'status'                 => $request->status,
            'processing_date'        => $request->processing_date,
            'shipped_date'           => $request->shipped_date,
            'delivered_date'         => $request->delivered_date,
            'return_date'            => $request->return_date,
            'return_reason'          => $request->return_reason,
            'return_amount'          => $request->return_amount,
        ]);
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
        $data = [
            'users' => User::latest()->get(['id', 'name']),
            'rfqs' => Rfq::latest()->get(['id', 'rfq_code']),
            'paymentMethods' => PaymentMethod::latest()->get(['id', 'method']),
        ];
        return view('admin.pages.order.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Order::find($id)->update([
            'user_id'                => $request->user_id,
            'rfq_id'                 => $request->rfq_id,
            'vendor_id'              => $request->vendor_id,
            'order_number'           => $request->order_number,
            'invoice_number'         => $request->invoice_number,
            'billing_name'           => $request->billing_name,
            'billing_address_line1'  => $request->billing_address_line1,
            'billing_address_line2'  => $request->billing_address_line2,
            'billing_city'           => $request->billing_city,
            'billing_state'          => $request->billing_state,
            'billing_postal_code'    => $request->billing_postal_code,
            'billing_country'        => $request->billing_country,
            'billing_phone'          => $request->billing_phone,
            'shipping_name'          => $request->shipping_name,
            'shipping_address_line1' => $request->shipping_address_line1,
            'shipping_address_line2' => $request->shipping_address_line2,
            'shipping_city'          => $request->shipping_city,
            'shipping_state'         => $request->shipping_state,
            'shipping_postal_code'   => $request->shipping_postal_code,
            'shipping_country'       => $request->shipping_country,
            'shipping_phone'         => $request->shipping_phone,
            'payment_method_id'      => $request->payment_method_id,
            'transaction_number'     => $request->transaction_number,
            'total_amount'           => $request->total_amount,
            'notes'                  => $request->notes,
            'payment_status'                => $request->payment_status,
            'order_date'             => $request->order_date,
            'status'                 => $request->status,
            'processing_date'        => $request->processing_date,
            'shipped_date'           => $request->shipped_date,
            'delivered_date'         => $request->delivered_date,
            'return_date'            => $request->return_date,
            'return_reason'          => $request->return_reason,
            'return_amount'          => $request->return_amount,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::find($id)->delete();
    }
}
