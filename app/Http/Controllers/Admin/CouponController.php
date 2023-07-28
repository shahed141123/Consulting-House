<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['coupons'] = Coupon::latest()->get();
        if ($request->ajax()) {
            return Datatables::of($data['coupons'])
                ->addIndexColumn()
                ->addColumn('type', function ($row) {
                    if ($row->type == 'fixed') {
                        return '<span class="badge bg-success">' . $row->type . '</span>';
                    } elseif ($row->type == 'percentage') {
                        return '<span class="badge bg-danger">' . $row->type . '</span>';
                    } else {
                        return '';
                    }
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        return '<span class="badge bg-success">' . $row->status . '</span>';
                    } elseif ($row->status == 'expired') {
                        return '<span class="badge bg-info">' . $row->status . '</span>';
                    } elseif ($row->status == 'used') {
                        return '<span class="badge bg-danger">' . $row->status . '</span>';
                    } else {
                        return '';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-inline-flex text-center">
                    <a href="#" data-bs-toggle="modal"
                        data-bs-target="#couponEditModal' . $row->id . '"
                        class="text-primary">
                        <i class="ph-pen"></i>
                    </a>
                    <a href="' . route('admin.coupon.destroy', [$row->id]) . '" class="text-danger mx-2 delete">
                        <i class="ph-trash"></i>
                    </a>

                </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'type', 'status'])
                ->make(true);
        }
        return view('admin.pages.coupon.index', $data);
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
        Coupon::create([
            'code'        => $request->code,
            'value'       => $request->value,
            'type'        => $request->type,
            'max_uses'    => $request->max_uses,
            'valid_from'  => $request->valid_from,
            'valid_until' => $request->valid_until,
            'status'      => $request->status,
            'description' => $request->description,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coupon = Coupon::findOrFail($id);

        $coupon->update([
            'code'        => $request->code,
            'value'       => $request->value,
            'type'        => $request->type,
            'max_uses'    => $request->max_uses,
            'valid_from'  => $request->valid_from,
            'valid_until' => $request->valid_until,
            'status'      => $request->status,
            'description' => $request->description,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Coupon::find($id)->delete();
    }
}
