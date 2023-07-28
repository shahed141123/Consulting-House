<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Category\SubCategoryRequest;
use App\Http\Requests\Category\ChildCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'categories'      => Category::latest()->get(),
            'subCategories'   => SubCategory::latest()->get(),
            'childCategories' => ChildCategory::latest()->get(),
        ];
        return view('admin.pages.category.index', $data);
    }

    public function subCategoryDropdown(Request $request)
    {
        $category_id = $request->category_id;
        $data['subCategories'] = SubCategory::where('category_id', $category_id)->get(['id', 'name']);
        return view('admin.pages.category.partials.sub-category-dropdown', $data);
    }

    public function childCategoryDropdown(Request $request)
    {
        $sub_category_id = $request->sub_category_id;
        $data['childCategories'] = ChildCategory::where('sub_category_id', $sub_category_id)->get(['id', 'name']);
        return view('admin.pages.category.partials.child-category-dropdown', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function categoryStore(CategoryRequest $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Category::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        Category::create([
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'icon'        => $request->icon,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function categoryUpdate(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$category->image}"),
                storage_path("app/public/requestImg/{$category->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Category::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        $category->update([
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'icon'        => $request->icon,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $category->image,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function categoryDestroy(string $id)
    {
        $category = Category::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $category->image,
            storage_path('app/public/requestImg/') . $category->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $category->forceDelete();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function subCategoryStore(SubCategoryRequest $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Category::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        SubCategory::create([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'icon'        => $request->icon,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
        ]);
        toastr()->success('Data has been saved successfully!');
        // return redirect()->back()->withInput();
        return redirect()->route('sub.categories.index')->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function subCategoryUpdate(SubCategoryRequest $request, string $id)
    {
        $subCategory = SubCategory::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$subCategory->image}"),
                storage_path("app/public/requestImg/{$subCategory->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Category::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        $subCategory->update([
            'category_id' => $request->category_id,
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'icon'        => $request->icon,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $subCategory->image,

        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function subCategoryDestroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $subCategory->image,
            storage_path('app/public/requestImg/') . $subCategory->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $subCategory->forceDelete();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function childCategoryStore(ChildCategoryRequest $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Category::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        ChildCategory::create([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'icon'        => $request->icon,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function childCategoryUpdate(ChildCategoryRequest $request, string $id)
    {
        $childCategory = ChildCategory::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$childCategory->image}"),
                storage_path("app/public/requestImg/{$childCategory->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Category::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        $childCategory->update([
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name'        => $request->name,
            'slug'        => $slug,
            'description' => $request->description,
            'icon'        => $request->icon,
            'image'       => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $childCategory->image,

        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function childCategoryDestroy(string $id)
    {
        $childCategory = ChildCategory::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $childCategory->image,
            storage_path('app/public/requestImg/') . $childCategory->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $childCategory->forceDelete();
    }
}
