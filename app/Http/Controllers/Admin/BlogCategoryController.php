<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Blog\BlogCategoryRequest;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blogCategorys'] = BlogCategory::latest('id', 'desc')->get();
        return view('admin.pages.blogCategory.index', $data);
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
    public function store(BlogCategoryRequest $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);
        } else {
            $globalFunImage = ['status' => 0];
        }
        $slug = Str::slug($request->name);
        $count = BlogCategory::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        BlogCategory::create([
            'name'        => $request->name,
            'slug'        => $data['slug'],
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
            'description' => $request->description,
            'status'      => $request->status,
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
    public function update(BlogCategoryRequest $request, string $id)
    {
        $blogCategory = BlogCategory::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);

            $paths = [
                storage_path("app/public/{$blogCategory->image}"),
                storage_path("app/public/requestImg/{$blogCategory->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $blogCategory->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $blogCategory->image,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $BlogCategory = blogCategory::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $BlogCategory->image,
            storage_path('app/public/requestImg/') . $BlogCategory->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $BlogCategory->forceDelete();
    }
}
