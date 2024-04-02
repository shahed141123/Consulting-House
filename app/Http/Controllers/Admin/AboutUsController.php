<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['aboutUses'] = AboutUs::latest()->get();
        return view('admin.pages.about.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mainFileSectionOne = $request->file('section_one_image');
        $mainFileCeoSection = $request->file('ceo_section_image');
        $mainFileCeoSectionSignature = $request->file('ceo_section_signature_image');
        $mainFileChooseUsOne = $request->file('choose_us_one_image');
        $mainFileChooseUsTwo = $request->file('choose_us_two_image');
        $mainFileChooseUsThree = $request->file('choose_us_three_image');

        $filePath = storage_path('app/public/');

        if (!empty($mainFileSectionOne)) {
            $globalFunSectionOneImage = customUpload($mainFileSectionOne, $filePath);
        } else {
            $globalFunSectionOneImage = ['status' => 0];
        }
        if (!empty($mainFileCeoSection)) {
            $globalFunCeoSectionImage = customUpload($mainFileCeoSection, $filePath);
        } else {
            $globalFunCeoSectionImage = ['status' => 0];
        }
        if (!empty($mainFileCeoSectionSignature)) {
            $globalFunCeoSectionSignatureImage = customUpload($mainFileCeoSectionSignature, $filePath);
        } else {
            $globalFunCeoSectionSignatureImage = ['status' => 0];
        }
        if (!empty($mainFileChooseUsOne)) {
            $globalFunChooseUsOneImage = customUpload($mainFileChooseUsOne, $filePath);
        } else {
            $globalFunChooseUsOneImage = ['status' => 0];
        }
        if (!empty($mainFileChooseUsTwo)) {
            $globalFunChooseUsTwoImage = customUpload($mainFileChooseUsTwo, $filePath);
        } else {
            $globalFunChooseUsTwoImage = ['status' => 0];
        }
        if (!empty($mainFileChooseUsThree)) {
            $globalFunChooseUsThreeImage = customUpload($mainFileChooseUsThree, $filePath);
        } else {
            $globalFunChooseUsThreeImage = ['status' => 0];
        }

        AboutUs::create([
            'breadcrumb_title'            => $request->breadcrumb_title,
            'breadcrumb_sub_title'        => $request->breadcrumb_sub_title,
            'section_one_badge'           => $request->section_one_badge,
            'section_one_title'           => $request->section_one_title,
            'section_one_sub_title'       => $request->section_one_sub_title,
            'section_one_description'     => $request->section_one_description,
            'section_one_image'           => $globalFunSectionOneImage['status'] == 1 ? $mainFileSectionOne->hashName() : null,
            'ceo_section_badge'           => $request->ceo_section_badge,
            'ceo_section_title'           => $request->ceo_section_title,
            'ceo_section_sub_title'       => $request->ceo_section_sub_title,
            'ceo_section_description'     => $request->ceo_section_description,
            'ceo_section_image'           => $globalFunCeoSectionImage['status'] == 1 ? $mainFileCeoSection->hashName() : null,
            'ceo_section_ceo_name'        => $request->ceo_section_ceo_name,
            'ceo_section_ceo_designation' => $request->ceo_section_ceo_designation,
            'ceo_section_signature_image' => $globalFunCeoSectionSignatureImage['status'] == 1 ? $mainFileCeoSectionSignature->hashName() : null,
            'choose_us_section_title'     => $request->choose_us_section_title,
            'choose_us_one_image'         => $globalFunChooseUsOneImage['status'] == 1 ? $mainFileChooseUsOne->hashName() : null,
            'choose_us_one_title'         => $request->choose_us_one_title,
            'choose_us_one_description'   => $request->choose_us_one_description,
            'choose_us_two_image'         => $globalFunChooseUsTwoImage['status'] == 1 ? $mainFileChooseUsTwo->hashName() : null,
            'choose_us_two_title'         => $request->choose_us_two_title,
            'choose_us_two_description'   => $request->choose_us_two_description,
            'choose_us_three_image'       => $globalFunChooseUsThreeImage['status'] == 1 ? $mainFileChooseUsThree->hashName() : null,
            'choose_us_three_title'       => $request->choose_us_three_title,
            'choose_us_three_description' => $request->choose_us_three_description,
            'contact_section_title'       => $request->contact_section_title,
            'head_office_title'           => $request->head_office_title,
            'head_office_address'         => $request->head_office_address,
            'head_office_email'           => $request->head_office_email,
            'head_office_phone'           => $request->head_office_phone,
            'sub_office_one_title'        => $request->sub_office_one_title,
            'sub_office_one_address'      => $request->sub_office_one_address,
            'sub_office_one_email'        => $request->sub_office_one_email,
            'sub_office_one_phone'        => $request->sub_office_one_phone,
            'sub_office_two_title'        => $request->sub_office_two_title,
            'sub_office_two_address'      => $request->sub_office_two_address,
            'sub_office_two_email'        => $request->sub_office_two_email,
            'sub_office_two_phone'        => $request->sub_office_two_phone,
            'sub_office_three_title'      => $request->sub_office_three_title,
            'sub_office_three_address'    => $request->sub_office_three_address,
            'sub_office_three_email'      => $request->sub_office_three_email,
            'sub_office_three_phone'      => $request->sub_office_three_phone,
            'sub_office_four_phone'       => $request->sub_office_four_phone,
            'sub_office_four_title'       => $request->sub_office_four_title,
            'sub_office_four_address'     => $request->sub_office_four_address,
            'sub_office_four_email'       => $request->sub_office_four_email,
            'counter_one_value'           => $request->counter_one_value,
            'counter_one_title'           => $request->counter_one_title,
            'counter_two_value'           => $request->counter_two_value,
            'counter_two_title'           => $request->counter_two_title,
            'counter_three_value'         => $request->counter_three_value,
            'counter_three_title'         => $request->counter_three_title,
            'counter_four_value'          => $request->counter_four_value,
            'counter_four_title'          => $request->counter_four_title,
        ]);
        toastr()->success('Data has been saved successfully!');
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
        $data['aboutUs'] = AboutUs::find($id);
        return view('admin.pages.about.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutus = AboutUs::findOrFail($id);

        $paths = [
            storage_path("app/public/{$aboutus->section_one_image}"),
            storage_path("app/public/requestImg/{$aboutus->section_one_image}"),

            storage_path("app/public/{$aboutus->ceo_section_image}"),
            storage_path("app/public/requestImg/{$aboutus->ceo_section_image}"),

            storage_path("app/public/{$aboutus->ceo_section_signature_image}"),
            storage_path("app/public/requestImg/{$aboutus->ceo_section_signature_image}"),

            storage_path("app/public/{$aboutus->choose_us_one_image}"),
            storage_path("app/public/requestImg/{$aboutus->choose_us_one_image}"),

            storage_path("app/public/{$aboutus->choose_us_two_image}"),
            storage_path("app/public/requestImg/{$aboutus->choose_us_two_image}"),

            storage_path("app/public/{$aboutus->choose_us_three_image}"),
            storage_path("app/public/requestImg/{$aboutus->choose_us_three_image}"),
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $mainFileSectionOne = $request->file('section_one_image');
        $mainFileCeoSection = $request->file('ceo_section_image');
        $mainFileCeoSectionSignature = $request->file('ceo_section_signature_image');
        $mainFileChooseUsOne = $request->file('choose_us_one_image');
        $mainFileChooseUsTwo = $request->file('choose_us_two_image');
        $mainFileChooseUsThree = $request->file('choose_us_three_image');

        $filePath = storage_path('app/public/');

        if (!empty($mainFileSectionOne)) {
            $globalFunSectionOneImage = customUpload($mainFileSectionOne, $filePath);
        } else {
            $globalFunSectionOneImage = ['status' => 0];
        }
        if (!empty($mainFileCeoSection)) {
            $globalFunCeoSectionImage = customUpload($mainFileCeoSection, $filePath);
        } else {
            $globalFunCeoSectionImage = ['status' => 0];
        }
        if (!empty($mainFileCeoSectionSignature)) {
            $globalFunCeoSectionSignatureImage = customUpload($mainFileCeoSectionSignature, $filePath);
        } else {
            $globalFunCeoSectionSignatureImage = ['status' => 0];
        }
        if (!empty($mainFileChooseUsOne)) {
            $globalFunChooseUsOneImage = customUpload($mainFileChooseUsOne, $filePath);
        } else {
            $globalFunChooseUsOneImage = ['status' => 0];
        }
        if (!empty($mainFileChooseUsTwo)) {
            $globalFunChooseUsTwoImage = customUpload($mainFileChooseUsTwo, $filePath);
        } else {
            $globalFunChooseUsTwoImage = ['status' => 0];
        }
        if (!empty($mainFileChooseUsThree)) {
            $globalFunChooseUsThreeImage = customUpload($mainFileChooseUsThree, $filePath);
        } else {
            $globalFunChooseUsThreeImage = ['status' => 0];
        }


        $aboutus->update([
            'breadcrumb_title'            => $request->breadcrumb_title,
            'breadcrumb_sub_title'        => $request->breadcrumb_sub_title,
            'section_one_badge'           => $request->section_one_badge,
            'section_one_title'           => $request->section_one_title,
            'section_one_sub_title'       => $request->section_one_sub_title,
            'section_one_description'     => $request->section_one_description,
            'section_one_image'           => $globalFunSectionOneImage['status'] == 1 ? $mainFileSectionOne->hashName() : $aboutus->section_one_image,
            'ceo_section_badge'           => $request->ceo_section_badge,
            'ceo_section_title'           => $request->ceo_section_title,
            'ceo_section_sub_title'       => $request->ceo_section_sub_title,
            'ceo_section_description'     => $request->ceo_section_description,
            'ceo_section_image'           => $globalFunCeoSectionImage['status']    == 1 ? $mainFileCeoSection->hashName()  : $aboutus->ceo_section_image,
            'ceo_section_ceo_name'        => $request->ceo_section_ceo_name,
            'ceo_section_ceo_designation' => $request->ceo_section_ceo_designation,
            'ceo_section_signature_image' => $globalFunCeoSectionSignatureImage['status'] == 1 ? $mainFileCeoSectionSignature->hashName() : $aboutus->ceo_section_signature_image,
            'choose_us_section_title'     => $request->choose_us_section_title,
            'choose_us_one_image'         => $globalFunChooseUsOneImage['status']   == 1 ? $mainFileChooseUsOne->hashName()  : $aboutus->choose_us_one_image,
            'choose_us_one_title'         => $request->choose_us_one_title,
            'choose_us_one_description'   => $request->choose_us_one_description,
            'choose_us_two_image'         => $globalFunChooseUsTwoImage['status']   == 1 ? $mainFileChooseUsTwo->hashName() : $aboutus->choose_us_two_image,
            'choose_us_two_title'         => $request->choose_us_two_title,
            'choose_us_two_description'   => $request->choose_us_two_description,
            'choose_us_three_image'       => $globalFunChooseUsThreeImage['status']   == 1 ? $mainFileChooseUsThree->hashName()  : $aboutus->choose_us_three_image,
            'choose_us_three_title'       => $request->choose_us_three_title,
            'choose_us_three_description' => $request->choose_us_three_description,
            'contact_section_title'       => $request->contact_section_title,
            'head_office_title'           => $request->head_office_title,
            'head_office_address'         => $request->head_office_address,
            'head_office_email'           => $request->head_office_email,
            'head_office_phone'           => $request->head_office_phone,
            'sub_office_one_title'        => $request->sub_office_one_title,
            'sub_office_one_address'      => $request->sub_office_one_address,
            'sub_office_one_email'        => $request->sub_office_one_email,
            'sub_office_one_phone'        => $request->sub_office_one_phone,
            'sub_office_two_title'        => $request->sub_office_two_title,
            'sub_office_two_address'      => $request->sub_office_two_address,
            'sub_office_two_email'        => $request->sub_office_two_email,
            'sub_office_two_phone'        => $request->sub_office_two_phone,
            'sub_office_three_title'      => $request->sub_office_three_title,
            'sub_office_three_address'    => $request->sub_office_three_address,
            'sub_office_three_email'      => $request->sub_office_three_email,
            'sub_office_three_phone'      => $request->sub_office_three_phone,
            'sub_office_four_phone'       => $request->sub_office_four_phone,
            'sub_office_four_title'       => $request->sub_office_four_title,
            'sub_office_four_address'     => $request->sub_office_four_address,
            'sub_office_four_email'       => $request->sub_office_four_email,
            'counter_one_value'           => $request->counter_one_value,
            'counter_one_title'           => $request->counter_one_title,
            'counter_two_value'           => $request->counter_two_value,
            'counter_two_title'           => $request->counter_two_title,
            'counter_three_value'         => $request->counter_three_value,
            'counter_three_title'         => $request->counter_three_title,
            'counter_four_value'          => $request->counter_four_value,
            'counter_four_title'          => $request->counter_four_title,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutus = AboutUs::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $aboutus->section_one_image,
            storage_path('app/public/requestImg/') . $aboutus->section_one_image,

            storage_path('app/public/') . $aboutus->ceo_section_image,
            storage_path('app/public/requestImg/') . $aboutus->ceo_section_image,

            storage_path('app/public/') . $aboutus->ceo_section_signature_image,
            storage_path('app/public/requestImg/') . $aboutus->ceo_section_signature_image,

            storage_path('app/public/') . $aboutus->choose_us_one_image,
            storage_path('app/public/requestImg/') . $aboutus->choose_us_one_image,

            storage_path('app/public/') . $aboutus->choose_us_two_image,
            storage_path('app/public/requestImg/') . $aboutus->choose_us_two_image,

            storage_path('app/public/') . $aboutus->choose_us_three_image,
            storage_path('app/public/requestImg/') . $aboutus->choose_us_three_image,
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $aboutus->forceDelete();
    }
}
