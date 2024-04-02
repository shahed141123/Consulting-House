<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Industry;
use App\Models\ClientType;
use App\Models\ProfileType;
use Illuminate\Support\Str;
use App\Models\BusinessPlan;
use App\Models\InterestType;
use Illuminate\Http\Request;
use App\Models\IndustryWatch;
use App\Models\IndustrySector;
use App\Models\IndividualService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\IndustryWatchCategory;
use App\Http\Requests\Industry\IndustryWatchRequest;
use App\Models\IndustryWatchSidebar;

class IndustryWatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['industryWatches'] = IndustryWatch::get();
        return view('admin.pages.industry_watch.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'profile_types'      => ProfileType::get(['id', 'name']),
            'users'              => User::get(['id', 'name']),
            'categories'         => IndustryWatchCategory::get(['id', 'name']),
            'sectors'            => IndustrySector::get(['id', 'name']),
            'industries'         => Industry::get(['id', 'name']),
        ];
        return view('admin.pages.industry_watch.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IndustryWatchRequest $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);
        } else {
            $globalFunImage = ['status' => 0];
        }
        $slug = Str::slug($request->title);
        $count = IndustryWatch::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $industry_watch_id = IndustryWatch::insertGetId([
            'user_id'           => $request->user_id,
            'category_id'       => json_encode($request->category_id),
            'sector_id'         => json_encode($request->sector_id),
            'industry_id'       => json_encode($request->industry_id),
            'profile_type_id'   => json_encode($request->profile_type_id),
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
            'author_name'       => $request->author_name,
            'views'             => !empty($request->views) ? $request->views : 0,
            'status'            => !empty($request->status) ? $request->status : 'published',
            'meta_tags'         => $request->meta_tags,
            'author_email'      => $request->author_email,
            'word_count'        => $request->word_count,
            'reading_time'      => $request->reading_time,
        ]);


        $industry_watch_id = $industry_watch_id;
        $title             = $request->sidebar_title;
        $value             = $request->sidebar_value;



        for ($i = 0; $i < count($title); $i++) {
            $datasave = [
                'industry_watch_id' => $industry_watch_id,
                'title'             => $title[$i],
                'value'             => $value[$i],
                'created_at'        => Carbon::now(),

            ];

            IndustryWatchSidebar::insert($datasave);
        }

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
            'industryWatch'      => IndustryWatch::find($id),
            'profile_types'      => ProfileType::get(['id', 'name']),
            'users'              => User::get(['id', 'name']),
            'categories'         => IndustryWatchCategory::get(['id', 'name']),
            'sectors'            => IndustrySector::get(['id', 'name']),
            'industries'         => Industry::get(['id', 'name']),
        ];
        return view('admin.pages.industry_watch.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IndustryWatchRequest $request, string $id)
    {
        $industryWatch = IndustryWatch::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath);

            $paths = [
                storage_path("app/public/{$industryWatch->image}"),
                storage_path("app/public/requestImg/{$industryWatch->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $industryWatch->update([
            'user_id'           => $request->user_id,
            'category_id'       => json_encode($request->category_id),
            'sector_id'         => json_encode($request->sector_id),
            'industry_id'       => json_encode($request->industry_id),
            'profile_type_id'   => json_encode($request->profile_type_id),
            'featured'          => $request->featured,
            'badge'             => $request->badge,
            'title'             => $request->title,
            'header'            => $request->header,
            'tags'              => $request->tags,
            'content'           => $request->content,
            'short_description' => $request->short_description,
            'image'             => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
            'published_at'      => $request->published_at,
            'author_name'       => $request->author_name,
            'views'             => !empty($request->views) ? $request->views : 0,
            'status'            => !empty($request->status) ? $request->status : 'published',
            'meta_tags'         => $request->meta_tags,
            'author_email'      => $request->author_email,
            'word_count'        => $request->word_count,
            'reading_time'      => $request->reading_time,
        ]);

        toastr()->success('Data has been updated successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $industryWatch = IndustryWatch::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $industryWatch->image,
            storage_path('app/public/requestImg/') . $industryWatch->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $industryWatch->forceDelete();
    }
}
