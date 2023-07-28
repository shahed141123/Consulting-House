<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use App\Models\Rfq;
use Illuminate\Http\Request;

class RfqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Rfq::with('product')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('rfq_status', function ($row) {
                    if ($row->rfq_status == 'rfq') {
                        return '<span class="badge bg-success">' . $row->rfq_status . '</span>';
                    } elseif ($row->rfq_status == 'deal') {
                        return '<span class="badge bg-danger">' . $row->rfq_status . '</span>';
                    } elseif ($row->rfq_status == 'order') {
                        return '<span class="badge bg-danger">' . $row->rfq_status . '</span>';
                    } elseif ($row->rfq_status == 'delivered') {
                        return '<span class="badge bg-danger">' . $row->rfq_status . '</span>';
                    } else {
                        return '';
                    }
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 'pending') {
                        return '<span class="badge bg-success">' . $row->status . '</span>';
                    } elseif ($row->status == 'replied') {
                        return '<span class="badge bg-danger">' . $row->status . '</span>';
                    } elseif ($row->status == 'closed') {
                        return '<span class="badge bg-danger">' . $row->status . '</span>';
                    } elseif ($row->status == 'rejected') {
                        return '<span class="badge bg-danger">' . $row->status . '</span>';
                    } else {
                        return '';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-inline-flex text-center">
                    <a href="' . route('admin.rfq.edit', [$row->id]) . '"
                        class="text-primary">
                        <i class="ph-pen"></i>
                    </a>
                    <a href="' . route('admin.rfq.destroy', [$row->id]) . '" class="text-danger mx-2 with-reload-deleteDT">
                        <i class="ph-trash"></i>
                    </a>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'rfq_status', 'status'])
                ->make(true);
        }
        return view('admin.pages.rfq.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.rfq.create');
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
