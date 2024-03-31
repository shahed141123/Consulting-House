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
use App\Models\ProfileDocuments;
use App\Models\ProfilePhotos;
use App\Models\ProfileProof;
use App\Models\TransactionType;
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
            'InterestTypes'      => TransactionType::get(['id', 'name']),
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
        $mainMultiDocumentFile = $request->file('document');
        $mainMultiProofFile = $request->file('verification_document');
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

        while (Profile::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }
        $profileID = Profile::insertGetId([
            'profile_type_id'          => $request->profile_type_id,
            'business_plan_id'         => $request->business_plan_id,
            'individual_service_id'    => $request->individual_service_id,
            'client_id'                => $request->client_id,
            'client_type'              => $request->client_type,
            'transaction_type'         => $request->transaction_type,
            'company_entity_type'      => $request->company_entity_type,
            'industry_id'              => json_encode($request->industry_id),

            'contact_person'           => $request->contact_person,
            'company_name'             => $request->company_name,
            'mobile_number'            => $request->mobile_number,
            'email_address'            => $request->email_address,
            'display_contact_details'  => (!empty($request->display_contact_details) ? $request->display_contact_details : 'false'),
            'display_company_details'  => (!empty($request->display_company_details) ? $request->display_company_details : 'false'),
            'established_year'         => $request->established_year,
            'profile_location'         => $request->profile_location,
            'employee'                 => $request->employee,
            'short_description'        => $request->short_description,
            'products_services'        => $request->products_services,
            'description'              => $request->description,
            'specification'            => $request->specification,
            'capitalization_overview'  => $request->capitalization_overview,
            'monthly_expected_sales'   => $request->monthly_expected_sales,
            'yearly_turnover'          => $request->yearly_turnover,
            'ebitda_margin'            => $request->ebitda_margin,
            'ebitda_margin_percentage' => $request->ebitda_margin_percentage,
            'assets_description'       => $request->assets_description,
            'real_estate_value'        => $request->real_estate_value,
            'allow_advisors_contact'   => (!empty($request->allow_advisors_contact) ? $request->allow_advisors_contact : 'false'),

            'designation'           => $request->designation,
            'image'                 => $globalFunSingleImage['status'] == 1 ? $mainSingleImageFile->hashName() : null,
            'slug'                  => $slug,
            'status'                => $request->status,
        ]);

        if (!empty($mainMultiDocumentFile)) {
            $attachments = [];
            foreach ($mainMultiDocumentFile as $mainMultiDocumentFile) {
                $globalFunSingleDocument = customUpload($mainMultiDocumentFile, $path);
                $attachments[] = [
                    'profile_id' => $profileID,
                    'file' => $globalFunSingleDocument['file_name'],
                ];
            }
            ProfileDocuments::insert($attachments);

        }
        
        if (!empty($mainMultiProofFile)) {
            $attachments = [];
            foreach ($mainMultiProofFile as $mainMultiProofFile) {
                $globalFunSingleProof = customUpload($mainMultiProofFile, $path);
                $attachments[] = [
                    'profile_id' => $profileID,
                    'file' => $globalFunSingleProof['file_name'],
                ];
            }
            ProfileProof::insert($attachments);

        }

        if (!empty($mainSingleImageFile)) {
            $attachments = [];
            foreach ($mainSingleImageFile as $mainSingleImageFile) {
                $globalFunSingleImage = customUpload($mainSingleImageFile, $path);
                $attachments[] = [
                    'profile_id' => $profileID,
                    'image' => $globalFunSingleImage['file_name'],
                ];
            }

            ProfilePhotos::insert($attachments);
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
            'profile_teaser'    => ProfileAttachment::where('profile_id', $id)->get(),
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
            'transaction_type_id'      => $request->transaction_type_id,
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
