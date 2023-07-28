<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\IndustryWatchCategory;
use App\Http\Requests\Industry\IndustryWatchCategoryRequest;

class IndustryWatchCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['industryWatchCategorys'] = IndustryWatchCategory::latest('id', 'desc')->get();
        return view('admin.pages.industry_watch_categories.index', $data);
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
    public function store(IndustryWatchCategoryRequest $request)
    {
        $mainIconFile = $request->file('icon');
        $mainImageFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainIconFile)) {
            $globalFunIcon = customUpload($mainIconFile, $filePath,);
        } else {
            $globalFunIcon = ['status' => 0];
        }
        if (!empty($mainImageFile)) {
            $globalFunImage = customUpload($mainImageFile, $filePath);
        } else {
            $globalFunImage = ['status' => 0];
        }
        $slug = Str::slug($request->name);
        $count = IndustryWatchCategory::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        IndustryWatchCategory::create([
            'name'        => $request->name,
            'slug'        => $data['slug'],
            'icon'        => $globalFunIcon['status'] == 1 ? $mainIconFile->hashName() : null,
            'image'       => $globalFunImage['status'] == 1 ? $mainImageFile->hashName() : null,
            'description' => $request->description,
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
    public function update(IndustryWatchCategoryRequest $request, string $id)
    {
        $industryWatchCategory = IndustryWatchCategory::findOrFail($id);

        $mainIconFile = $request->file('icon');
        $mainImageFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainIconFile)) {
            $globalFunIcon = customUpload($mainIconFile, $filePath);
            $paths = [
                storage_path("app/public/{$industryWatchCategory->icon}"),
                storage_path("app/public/requestImg/{$industryWatchCategory->icon}"),
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunIcon = ['status' => 0];
        }
        if (!empty($mainImageFile)) {
            $globalFunImage = customUpload($mainImageFile, $filePath);
            $paths = [
                storage_path("app/public/{$industryWatchCategory->image}"),
                storage_path("app/public/requestImg/{$industryWatchCategory->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }



        $industryWatchCategory->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'icon'        => $globalFunIcon['status'] == 1 ? $mainIconFile->hashName() :  $industryWatchCategory->icon,
            'image'       => $globalFunImage['status'] == 1 ? $mainImageFile->hashName() :  $industryWatchCategory->image,
            'description' => $request->description,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $industryWatchCategory = IndustryWatchCategory::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $industryWatchCategory->icon,
            storage_path('app/public/requestImg/') . $industryWatchCategory->icon,
            storage_path('app/public/') . $industryWatchCategory->image,
            storage_path('app/public/requestImg/') . $industryWatchCategory->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $industryWatchCategory->forceDelete();
    }
}
