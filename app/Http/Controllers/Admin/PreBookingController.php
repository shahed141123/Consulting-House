<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use App\Models\PreBooking;
use Illuminate\Http\Request;

class PreBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = PreBooking::with('product', 'user')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-inline-flex text-center">
                    <a href="' . route('admin.pre-booking.edit', [$row->id]) . '"
                        class="text-primary">
                        <i class="ph-pen"></i>
                    </a>
                    <a href="' . route('admin.pre-booking.destroy', [$row->id]) . '" class="text-danger mx-2 with-reload-deleteDT">
                        <i class="ph-trash"></i>
                    </a>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.preBooking.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.preOBooking.create');
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
}
