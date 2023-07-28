<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\User;
use App\Models\Profile;
use App\Models\Industry;
use App\Models\ClientType;
use App\Models\ProfileType;
use Illuminate\Support\Str;
use App\Models\BusinessPlan;
use App\Models\InterestType;
use Illuminate\Http\Request;
use App\Models\IndividualService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if ($request->ajax()) {
            $data = Profile::latest('id')->get();
            return Datatables::of($data)
                ->addIndexColumn()

                ->addColumn('checkbox', function ($item) {
                    return '<input  type="checkbox" name="rowId[]" id="manual_entry_' . $item->id . '" class="form-check-input" value="' . $item->id . '" />';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-inline-flex text-center">
                    <a href="' . route('admin.profile.edit', [$row->id]) . '"
                        class="text-primary">
                        <i class="ph-pen"></i>
                    </a>
                    <a href="' . route('admin.profile.destroy', [$row->id]) . '" class="text-danger mx-2 with-reload-deleteDT">
                        <i class="ph-trash"></i>
                    </a>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'checkbox'])
                ->make(true);
        }
        return view('admin.pages.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'ProfileTypes'       => ProfileType::get(['id', 'name']),
            'BusinessPlans'      => BusinessPlan::get(['id', 'name']),
            'IndividualServices' => IndividualService::get(['id', 'name']),
            'Users'              => User::get(['id', 'name']),
            'ClientTypes'        => ClientType::get(['id', 'name']),
            'InterestTypes'      => InterestType::get(['id', 'name']),
            'Industries'         => Industry::get(['id', 'name']),
        ];
        return view('admin.pages.profile.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mainSingleImageFile = $request->file('image');
        $mainMultiTeaserFile = $request->file('teaser');
        $path                = storage_path('app/public/');

        if (!empty($mainSingleImageFile)) {
            $globalFunSingleImage =  customUpload($mainSingleImageFile, $path, 44, 44);
        } else {
            $globalFunSingleImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Profile::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }
        $profileID = Profile::insertGetId([
            'profile_type_id'       => $request->profile_type_id,
            'business_plan_id'      => $request->business_plan_id,
            'individual_service_id' => $request->individual_service_id,
            'client_id'             => $request->client_id,
            'client_type_id'        => $request->client_type_id,
            'interest_type_id'      => $request->interest_type_id,
            'industry_id'           => $request->industry_id,
            'established_year'      => $request->established_year,
            'employee'              => $request->employee,
            'profile_location'      => $request->profile_location,
            'company_location'      => $request->company_location,
            'short_description'     => $request->short_description,
            'description'           => $request->description,
            'specification'         => $request->specification,
            'franchise_procedures'  => $request->franchise_procedures,
            'currency'              => $request->currency,
            'asset_value'           => $request->asset_value,
            'price'                 => $request->price,
            'deal_size_min'         => $request->deal_size_min,
            'deal_size_max'         => $request->deal_size_max,
            'price_type'            => $request->price_type,
            'selling_reason'        => $request->selling_reason,
            'receive_quotations'    => $request->receive_quotations,
            'company_name'          => $request->company_name,
            'company_headquarter'   => $request->company_headquarter,
            'company_website'       => $request->company_website,
            'outlet'                => $request->outlet,
            'current_location'      => $request->current_location,
            'interested_location'   => $request->interested_location,
            'designation'           => $request->designation,
            'image'                 => $globalFunSingleImage['status'] == 1 ? $mainSingleImageFile->hashName() : null,
            'slug'                  => $slug,
            'status'                => $request->status,
        ]);

        if (!empty($mainMultiTeaserFile)) {
            $attachments = [];
            foreach ($mainMultiTeaserFile as $mainMultiTeaserFile) {
                $globalFunMultiTeaserFile = customUpload($mainMultiTeaserFile, $path);
                $attachments[] = [
                    'product_id' => $profileID,
                    'teaser' => $globalFunMultiTeaserFile['file_name'],
                ];
            }

            ProfileAttachment::insert($attachments);
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
            'profile'           => Profile::find($id),
            'profile_teaser'    => ProfileAttachment::where('product_id', $id)->get(),
            'ProfileType'       => ProfileType::get(['id', 'name']),
            'BusinessPlan'      => BusinessPlan::get(['id', 'name']),
            'IndividualService' => IndividualService::get(['id', 'name']),
            'User'              => User::get(['id', 'name']),
            'ClientType'        => ClientType::get(['id', 'name']),
            'InterestType'      => InterestType::get(['id', 'name']),
            'Industry'          => Industry::get(['id', 'name']),
        ];
        return view('admin.pages.profile.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = Profile::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$profile->image}"),
                storage_path("app/public/requestImg/{$profile->image}")
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

        while (Profile::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        $profile->update([
            'profile_type_id'       => $request->profile_type_id,
            'business_plan_id'      => $request->business_plan_id,
            'individual_service_id' => $request->individual_service_id,
            'client_id'             => $request->client_id,
            'client_type_id'        => $request->client_type_id,
            'interest_type_id'      => $request->interest_type_id,
            'industry_id'           => $request->industry_id,
            'established_year'      => $request->established_year,
            'employee'              => $request->employee,
            'profile_location'      => $request->profile_location,
            'company_location'      => $request->company_location,
            'short_description'     => $request->short_description,
            'description'           => $request->description,
            'specification'         => $request->specification,
            'franchise_procedures'  => $request->franchise_procedures,
            'currency'              => $request->currency,
            'asset_value'           => $request->asset_value,
            'price'                 => $request->price,
            'deal_size_min'         => $request->deal_size_min,
            'deal_size_max'         => $request->deal_size_max,
            'price_type'            => $request->price_type,
            'selling_reason'        => $request->selling_reason,
            'receive_quotations'    => $request->receive_quotations,
            'company_name'          => $request->company_name,
            'company_headquarter'   => $request->company_headquarter,
            'company_website'       => $request->company_website,
            'outlet'                => $request->outlet,
            'current_location'      => $request->current_location,
            'interested_location'   => $request->interested_location,
            'designation'           => $request->designation,
            'image'                  => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $profile->image,
            'slug'                  => $slug,
            'status'                => $request->status,
        ]);


        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::findOrFail($id);

        $paths = [
            storage_path('app/public/') . $profile->image,
            storage_path('app/public/requestImg/') . $profile->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $profile->forceDelete();
    }

    public function multiImageStore(Request $request)
    {
        $profileID           = $request->profile_id;
        $mainMultiTeaserFile = $request->file('teaser');
        $path                = storage_path('app/public/');

        if (!empty($mainMultiTeaserFile)) {
            $attachments = [];
            foreach ($mainMultiTeaserFile as $mainMultiTeaserFile) {
                $globalFunMultiImageFile = customUpload($mainMultiTeaserFile, $path);
                $attachments[] = [
                    'profile_id' => $profileID,
                    'teaser' => $globalFunMultiTeaserFile['file_name'],
                ];
            }

            ProfileAttachment::insert($attachments);

            $profile_teaser = ProfileAttachment::where('profile_id', $profileID)->get();
        }


        return response()->json(['profile_teaser' => $profile_teaser]);
    }
    public function multiImageUpdate(Request $request)
    {
        $id = $request->id;
        $teaserT = ProfileAttachment::findOrFail($id);

        if (!$teaserT) {
            return response()->json(['error' => 'Image not found'], 404);
        }
        $paths = [
            storage_path('app/public/') . $teaserT->teaser,
            storage_path('app/public/requestImg/') . $teaserT->teaser
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $teaserT->forceDelete();
        return response()->json(['success' => true]);
    }
}
