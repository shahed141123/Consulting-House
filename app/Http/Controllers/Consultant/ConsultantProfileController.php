<?php

namespace App\Http\Controllers\Consultant;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultant\ConsultantProfile;

class ConsultantProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $mainSingleImageFile = $request->file('image');
        $mainMultiDocumentFile = $request->file('experience_document');
        $mainMultiProofFile = $request->file('verification_degree');
        $path                = storage_path('app/public/');

        if (!empty($mainMultiDocumentFile)) {
            $globalFunSingleDocument =  customUpload($mainMultiDocumentFile, $path, 44, 44);
        } else {
            $globalFunSingleDocument = ['status' => 0];
        }
        if (!empty($mainMultiProofFile)) {
            $globalFunSingleProof =  customUpload($mainMultiProofFile, $path, 44, 44);
        } else {
            $globalFunSingleProof = ['status' => 0];
        }
        if (!empty($mainSingleImageFile)) {
            $globalFunSingleImage =  customUpload($mainSingleImageFile, $path, 44, 44);
        } else {
            $globalFunSingleImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (ConsultantProfile::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }
        ConsultantProfile::create([
            'client_id'           => $request->client_id,
            'sector_id'           => $request->sector_id,
            'industry_id'         => json_encode($request->industry_id),

            'name'                => $request->name,
            'slug'                => $request->slug,
            'email'               => $request->email,
            'contact_number'      => $request->contact_number,
            'experience'          => $request->experience,
            'established_year'    => $request->established_year,
            'profile_location'    => $request->profile_location,
            'short_description'   => $request->short_description,
            'bio'                 => $request->bio,
            'specialization'      => $request->specialization,
            'image'               => $globalFunSingleImage['status'] == 1 ? $mainSingleImageFile->hashName() : null,
            'experience_document' => $globalFunSingleDocument['status'] == 1 ? $mainMultiDocumentFile->hashName() : null,
            'verification_degree' => $globalFunSingleProof['status'] == 1 ? $mainMultiProofFile->hashName() : null,
            'is_approved'         => 'false',
            'acknowledege'        => 'true',
            'status'              => 'hold',
            'slug'                => $slug,

        ]);


        toastr()->success('Your Profile has been Created successfully!');

        return redirect()->route('dashboard');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
