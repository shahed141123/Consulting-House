<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProfileType;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\EntityType\EntityTypeRequest;
use App\Models\EntityType;

class EntityTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profile_types'] = ProfileType::latest('id', 'desc')->get(['id', 'name']);
        $data['entity_types'] = EntityType::latest('id', 'desc')->get();
        return view('admin.pages.entity_type.index', $data);
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
    public function store(EntityTypeRequest $request)
    {
        $slug = Str::slug($request->name);
        $count = EntityType::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        EntityType::create([
            'profile_type_id' => $request->profile_type_id,
            'name'            => $request->name,
            'slug'            => $data['slug'],
            'status'          => $request->status,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
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
    public function update(EntityTypeRequest $request, string $id)
    {
        $entityType = EntityType::findOrFail($id);

        $entityType->update([
            'profile_type_id' => $request->profile_type_id,
            'name'            => $request->name,
            'slug'            => Str::slug($request->name),
            'status'          => $request->status,
        ]);

        toastr()->success('Data has been updated successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entityType = EntityType::findOrFail($id);

        $entityType->forceDelete();
    }
}
