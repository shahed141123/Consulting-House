<?php

namespace App\Http\Controllers\Admin;

use App\Models\Industry;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\IndustrySector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Industry\industriesRequest;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['industrySectors'] = IndustrySector::latest('id', 'desc')->get();
        $data['industries'] = Industry::latest('id', 'desc')->get();
        return view('admin.pages.industry.index', $data);
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
    public function store(industriesRequest $request)
    {
        $mainLogoFile = $request->file('logo');
        $mainImageFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainLogoFile)) {
            $globalFunLogo = customUpload($mainLogoFile, $filePath,);
        } else {
            $globalFunLogo = ['status' => 0];
        }
        if (!empty($mainImageFile)) {
            $globalFunImage = customUpload($mainImageFile, $filePath);
        } else {
            $globalFunImage = ['status' => 0];
        }
        $slug = Str::slug($request->name);
        $count = Industry::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        Industry::create([
            'sector_id'   => $request->sector_id,
            'parent_id'   => $request->parent_id,
            'name'        => $request->name,
            'slug'        => $data['slug'],
            'logo'        => $globalFunLogo['status'] == 1 ? $mainLogoFile->hashName() : null,
            'image'       => $globalFunImage['status'] == 1 ? $mainImageFile->hashName() : null,
            'description' => $request->description,
            'link'        => $request->link,
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
    public function update(industriesRequest $request, string $id)
    {
        $industry = Industry::findOrFail($id);

        $mainLogoFile = $request->file('logo');
        $mainImageFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainLogoFile)) {
            $globalFunLogo = customUpload($mainLogoFile, $filePath);
        } else {
            $globalFunLogo = ['status' => 0];
        }
        if (!empty($mainImageFile)) {
            $globalFunImage = customUpload($mainImageFile, $filePath);
        } else {
            $globalFunImage = ['status' => 0];
        }

        $paths = [
            storage_path("app/public/{$industry->logo}"),
            storage_path("app/public/requestImg/{$industry->logo}"),

            storage_path("app/public/{$industry->image}"),
            storage_path("app/public/requestImg/{$industry->image}")
        ];
        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $industry->update([
            'sector_id'   => $request->sector_id,
            'parent_id'   => $request->parent_id,
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'logo'        => $globalFunLogo['status'] == 1 ? $mainLogoFile->hashName() :  $industry->logo,
            'image'       => $globalFunImage['status'] == 1 ? $mainImageFile->hashName() :  $industry->image,
            'description' => $request->description,
            'link'        => $request->link,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $industry = Industry::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $industry->logo,
            storage_path('app/public/requestImg/') . $industry->logo,
            storage_path('app/public/') . $industry->image,
            storage_path('app/public/requestImg/') . $industry->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $industry->forceDelete();
    }
}
