<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use App\Models\Country;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\ChMessage as Message;
use App\Models\ClientType;
use App\Models\EntityType;
use App\Models\IndustrySector;
use App\Models\ProfileType;
use App\Models\SubscriptionPlan;
use App\Models\TransactionType;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function dashboard()
    {
        $data['user'] = User::findOrFail(Auth::user()->id);
        return view('client.pages.dashboard', $data);
    }
    public function generalInfo($id)
    {
        $data['active_id'] = $id;
        $data['countries'] = Country::orderBy('name', 'ASC')->get(['id', 'name']);
        $data['industries'] = Industry::orderBy('name', 'ASC')->get(['id', 'name']);
        return view('client.pages.general_info', $data);
    }
    public function activityInfo( $id)
    {
        $data['active_id'] = $id;
        $data['countries'] = Country::orderBy('name', 'ASC')->get(['id', 'name']);

        return view('client.pages.activity_info', $data);
    }
    public function addProfile($id)
    {
        if (Auth::check()) {
            $data['active_id'] = $id;
            $data['profile_type'] = ProfileType::where('slug', $id)->first();
            $data['years'] = range( date('Y') , date('Y') - 300);
            $data['client_types'] = ClientType::where('profile_type_id',$data['profile_type']->id)->get(['id', 'name']);
            $data['transaction_types'] = TransactionType::where('profile_type_id',$data['profile_type']->id)->get(['id', 'name']);
            $data['company_entity_types'] = EntityType::where('profile_type_id',$data['profile_type']->id)->get(['id', 'name']);
            $data['industries'] = Industry::orderBy('name', 'ASC')->get(['id', 'name', 'sector_id']);
            $data['countries'] = Country::orderBy('name', 'ASC')->get(['id', 'name']);
            return view('client.pages.custom_profile', $data);
        } else {
            return redirect()->route('login');
        }
    }
    public function consultantProfile()
    {
        if (Auth::check()) {
            $data['years'] = range( date('Y') , date('Y') - 50);
            $data['industries'] = Industry::orderBy('name', 'ASC')->get(['id', 'name', 'sector_id']);
            $data['sectors'] = IndustrySector::orderBy('name', 'ASC')->get(['id', 'name']);
            $data['plans'] = SubscriptionPlan::latest('id', 'ASC')->get();
            $data['countries'] = Country::orderBy('name', 'ASC')->get(['id', 'name']);
            return view('client.pages.consultant_profile', $data);
        } else {
            return redirect()->route('login');
        }
    }

    public function clientImageStore(Request $request)
    {

        $user     = User::findOrFail(Auth::user()->id);
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $paths = [
                storage_path("app/public/{$user->image}"),
                storage_path("app/public/requestImg/{$user->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
            $user->update([
                'image' => $mainFile->hashName(),
            ]);
        }
        // return response()->json(['image' => $mainFile->hashName()]);
        return response()->json(['image' => asset(Storage::url($mainFile->hashName()))]);
    }
    // public function businessProfile($id)
    // {
    //     $data['active_id'] = $id;
    //     $data['countries'] = Country::orderBy('name', 'ASC')->get(['id','name']);
    //     return view('client.pages.business_profile',$data);
    // }
    // public function investorProfile($id)
    // {
    //     $data['active_id'] = $id;
    //     $data['countries'] = Country::orderBy('name', 'ASC')->get(['id','name']);
    //     return view('client.pages.franchise_profile',$data);
    // }
    // public function franchiseProfile($id)
    // {
    //     $data['active_id'] = $id;
    //     $data['countries'] = Country::orderBy('name', 'ASC')->get(['id','name']);
    //     return view('client.pages.general_info',$data);
    // }

}
