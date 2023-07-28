<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProfileType;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Types\ProfileTypeRequest;

class ProfileTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['profile_types'] = ProfileType::latest('id','desc')->get();
        return view('admin.pages.profile_type.index',$data);
    }


    public function store(ProfileTypeRequest $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }
        ProfileType::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
            'status'      => $request->status,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileTypeRequest $request, string $id)
    {
        $profile_type = ProfileType::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$profile_type->image}"),
                storage_path("app/public/requestImg/{$profile_type->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $profile_type->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $profile_type->image,
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
        $profile_type = ProfileType::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $profile_type->image,
            storage_path('app/public/requestImg/') . $profile_type->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $profile_type->forceDelete();
    }
}
