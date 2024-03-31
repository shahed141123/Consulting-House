<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TermsPrivacyCategory;
use Illuminate\Support\Facades\Validator;

class TermsPrivacyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories'] = TermsPrivacyCategory::get();
        return view('admin.pages.terms_privacy_category.index', $data);
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
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
            ],
        );
        $slug = Str::slug($request->name);
        $count = TermsPrivacyCategory::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        if ($validator->passes()) {
            TermsPrivacyCategory::create([
                'name'   => $request->name,
                'slug'   => $data['slug'],
                'type'   => $request->type,
                'status' => !empty($request->status) ? $request->status : 'inactive',
            ]);
            toastr()->success('Data Insert Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                toastr()->error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
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
    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'type' => 'required',
            ],
        );

        if ($validator->passes()) {
            TermsPrivacyCategory::find($id)->update([
                'name'   => $request->name,
                'type'   => $request->type,
                'status' => $request->status,

            ]);
            toastr()->success('Data Update Successfully');
        } else {

            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                toastr()->error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TermsPrivacyCategory::findOrFail($id)->delete();
    }
}
