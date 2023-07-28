<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClientType;
use App\Models\ProfileType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ClientTypeCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Types\TransactionAndProfileTypeRequest;

class ClientTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profile_types'] = ProfileType::latest('id', 'desc')->get(['id', 'name']);
        $data['client_type_categories'] = ClientTypeCategory::latest('id', 'desc')->get(['id', 'name']);
        $data['client_types'] = ClientType::latest('id', 'desc')->get();
        return view('admin.pages.client_type.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(TransactionAndProfileTypeRequest $request)
    {
        $slug = Str::slug($request->name);
        $count = ClientType::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        ClientType::create([
            'profile_type_id' => $request->profile_type_id,
            'category_id'     => $request->category_id,
            'name'            => $request->name,
            'slug'            => $data['slug'],
            'status'          => $request->status,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransactionAndProfileTypeRequest $request, string $id)
    {
        $clientType = ClientType::findOrFail($id);

        $clientType->update([
            'profile_type_id' => $request->profile_type_id,
            'category_id'     => $request->category_id,
            'name'            => $request->name,
            'slug'            => Str::slug($request->name),
            'status'          => $request->status,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientType = ClientType::findOrFail($id);

        $clientType->forceDelete();
    }
}
