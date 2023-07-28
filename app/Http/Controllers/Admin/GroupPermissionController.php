s<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GroupPermission;
use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\GroupPermissionRequest;

class GroupPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['groupPermissions'] = GroupPermission::latest()->get();
        return view('admin.pages.groupPermission.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupPermissionRequest $request)
    {
        GroupPermission::create([
            'name' => $request->name,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GroupPermissionRequest $request, string $id)
    {
        GroupPermission::find($id)->update([
            'name' => $request->name,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GroupPermission::find($id)->delete();
    }
}
