<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\BlogPost;
use App\Models\Industry;
use App\Models\ProfileType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\IndustryWatchCategory;
use App\Http\Requests\Blog\BlogPostRequest;
use App\Models\BlogCategory;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['blogPosts'] = BlogPost::latest('id','desc')->get();
        return view('admin.pages.blog_post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'profile_types'      => ProfileType::get(['id', 'name', 'slug']),
            'categories'         => BlogCategory::get(['id', 'name', 'slug']),
            'industries'         => Industry::get(['id', 'name', 'slug']),
        ];
        return view('admin.pages.blog_post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);
        } else {
            $globalFunImage = ['status' => 0];
        }
        $slug = Str::slug($request->title);
        $count = BlogPost::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        BlogPost::create([
            'user_id'           => $request->user_id,
            'category_id'       => $request->category_id,
            'industry_id'       => $request->industry_id,
            'profile_type_id'   => $request->profile_type_id,
            'featured'          => $request->featured,
            'badge'             => $request->badge,
            'title'             => $request->title,
            'slug'              => $data['slug'],
            'header'            => $request->header,
            'tags'              => $request->tags,
            'content'           => $request->content,
            'short_description' => $request->short_description,
            'image'             => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
            'published_at'      => $request->published_at,
            'views'             => $request->views,
            'is_published'      => $request->is_published,
            'status'            => $request->status,
            'meta_tags'         => $request->meta_tags,
            'source'            => $request->source,
            'source_url'        => $request->source_url,
            'author_email'      => $request->author_email,
            'word_count'        => $request->word_count,
            'reading_time'      => $request->reading_time,
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
        $data = [
            'blogPost'           => BlogPost::find($id),
            'profile_types'      => ProfileType::get(['id', 'name']),
            'users'              => User::get(['id', 'name']),
            'categories'         => IndustryWatchCategory::get(['id', 'name']),
            'industries'         => Industry::get(['id', 'name']),
        ];
        return view('admin.pages.blog_post.create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, string $id)
    {
        $blogPost = BlogPost::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);

            $paths = [
                storage_path("app/public/{$blogPost->image}"),
                storage_path("app/public/requestImg/{$blogPost->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $blogPost->update([
            'user_id'           => $request->user_id,
            'category_id'       => $request->category_id,
            'industry_id'       => $request->industry_id,
            'profile_type_id'   => $request->profile_type_id,
            'featured'          => $request->featured,
            'badge'             => $request->badge,
            'title'             => $request->title,
            'slug'              => Str::slug($request->title),
            'header'            => $request->header,
            'tags'              => $request->tags,
            'content'           => $request->content,
            'short_description' => $request->short_description,
            'image'             => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $blogPost->image,
            'published_at'      => $request->published_at,
            'views'             => $request->views,
            'is_published'      => $request->is_published,
            'status'            => $request->status,
            'meta_tags'         => $request->meta_tags,
            'source'            => $request->source,
            'source_url'        => $request->source_url,
            'author_email'      => $request->author_email,
            'word_count'        => $request->word_count,
            'reading_time'      => $request->reading_time,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogPost = BlogPost::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $blogPost->image,
            storage_path('app/public/requestImg/') . $blogPost->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $blogPost->forceDelete();
    }
}
