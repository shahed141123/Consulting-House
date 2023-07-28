<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class EmployeePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['employees'] = Admin::latest('id')->get();
        $data['countries'] = Country::latest('id')->get();
        return view('admin.pages.employee.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }

        Admin::create([
            'name'        => $request->name,
            'username'    => $request->username,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'designation' => $request->designation,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
            'address'     => $request->address,
            'country_id'  => $request->country_id,
            'city'        => $request->city,
            'zip_code'    => $request->zip_code,
            'status'      => $request->status,
            'password'    => Hash::make($request->password),
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Admin::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$employee->image}"),
                storage_path("app/public/requestImg/{$employee->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $employee->update([
            'name'        => $request->name,
            'username'    => $request->username,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'designation' => $request->designation,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $employee->image,
            'address'     => $request->address,
            'country_id'  => $request->country_id,
            'city'        => $request->city,
            'zip_code'    => $request->zip_code,
            'status'      => $request->status,
            'password'    => Hash::make($request->password),

        ]);

        toastr()->success('Data has been updated successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Admin::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $employee->image,
            storage_path('app/public/requestImg/') . $employee->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $employee->forceDelete();
    }
}
