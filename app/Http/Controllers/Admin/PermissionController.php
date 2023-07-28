<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GroupPermission;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Permission\PermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'groupPermissions' => GroupPermission::latest()->get(['id', 'name']),
            'permissions' => Permission::latest()->get()->unique('group_name'),
        ];
        return view('admin.pages.permission.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        Permission::create([
            'name'       => $request->name,
            'group_name' => $request->group_name,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, string $id)
    {
        Permission::find($id)->update([
            'name'       => $request->name,
            'group_name' => $request->group_name,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Permission::where('group_name', $id)->delete();
        GroupPermission::find($id)->delete();
    }
}
