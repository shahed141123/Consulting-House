<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ClientTypeCategory;
use App\Http\Controllers\Controller;

class ClientTypeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['client_type_categorys'] = ClientTypeCategory::latest('id','desc')->get();
        return view('admin.pages.client_type_category.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->name);
        $count = ClientTypeCategory::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        ClientTypeCategory::create([
            'name'        => $request->name,
            'slug'        => $data['slug'],
            'status'      => $request->status,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client_type_category = ClientTypeCategory::findOrFail($id);
        $client_type_category->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'status'      => $request->status,
        ]);

        toastr()->success('Data has been updated successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client_type_category = ClientTypeCategory::findOrFail($id);
        $client_type_category->forceDelete();
    }
}
