<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\FilteringItem;
use App\Http\Controllers\Controller;

class FilteringItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = FilteringItem::with('product')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == 'active') {
                        return '<span class="badge bg-success">' . $row->status . '</span>';
                    } elseif ($row->status == 'inactive') {
                        return '<span class="badge bg-danger">' . $row->status . '</span>';
                    } else {
                        return '';
                    }
                })
                ->addColumn('stock_status', function ($row) {
                    if ($row->stock_status == 'in_stock') {
                        return '<span class="badge bg-success">' . $row->stock_status . '</span>';
                    } elseif ($row->stock_status == 'out_of_stock') {
                        return '<span class="badge bg-danger">' . $row->stock_status . '</span>';
                    } else {
                        return '';
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-inline-flex text-center">
                    <a href="' . route('admin.filtering-item.edit', [$row->id]) . '"
                        class="text-primary">
                        <i class="ph-pen"></i>
                    </a>
                    <a href="' . route('admin.filtering-item.destroy', [$row->id]) . '" class="text-danger mx-2 with-reload-deleteDT">
                        <i class="ph-trash"></i>
                    </a>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'status', 'stock_status'])
                ->make(true);
        }
        return view('admin.pages.filteringItem.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['products'] = Product::pluck('name', 'id');
        return view('admin.pages.filteringItem.create', $data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FilteringItem::create([
            'product_id'      => $request->product_id,
            'status'          => $request->status,
            'sort_order'      => $request->sort_order,
            'icon'            => $request->icon,
            'attribute_name'  => $request->attribute_name,
            'attribute_value' => $request->attribute_value,
            'price'           => $request->price,
            'stock_status'    => $request->stock_status,
            'quantity'        => $request->quantity,
            'material'        => $request->material,
            'weight'          => $request->weight,
            'description'     => $request->description,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['filteringItem'] = FilteringItem::find($id);
        $data['products'] = Product::pluck('name', 'id');
        return view('admin.pages.filteringItem.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        FilteringItem::find($id)->update([
            'product_id'      => $request->product_id,
            'status'          => $request->status,
            'sort_order'      => $request->sort_order,
            'icon'            => $request->icon,
            'attribute_name'  => $request->attribute_name,
            'attribute_value' => $request->attribute_value,
            'price'           => $request->price,
            'stock_status'    => $request->stock_status,
            'quantity'        => $request->quantity,
            'material'        => $request->material,
            'weight'          => $request->weight,
            'description'     => $request->description,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FilteringItem::find($id)->delete();
    }
}
