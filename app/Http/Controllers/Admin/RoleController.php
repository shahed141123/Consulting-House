<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GroupPermission;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleRequet;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['roles'] = Role::latest('id', 'desc')->get();
        return view('admin.pages.role.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['groupNames'] = GroupPermission::get();
        return view('admin.pages.role.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequet $request)
    {
        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'admin',
        ]);

        $permissions = $request->input('permission_id', []);
        $role->permissions()->attach($permissions);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('admin.role.index')->withInput();
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
        $data['role'] = Role::findOrFail($id);
        $data['groupNames'] = GroupPermission::get();
        $data['permissions'] = DB::table('role_has_permissions')->where('role_id', $id)->get();
        return view('admin.pages.role.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequet $request, string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = $request->permission_id;

        if ($request->name != $role->name || !empty($permissions)) {
            $role->update([
                'name' => $request->name,
            ]);
            if (!empty($permissions)) {
                $role->syncPermissions($permissions);
            }
            toastr()->success('Data has been saved successfully!');
        }

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);

        $role->permissions()->detach();
        $role->delete();
    }
}
