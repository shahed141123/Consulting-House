<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use App\Models\Country;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function activityInfo($id)
    {
        $data['active_id'] = $id;
        $data['countries'] = Country::orderBy('name', 'ASC')->get(['id', 'name']);
        return view('client.pages.activity_info', $data);
    }
    public function addProfile($id)
    {
        if (Auth::check()) {
            $data['active_id'] = $id;
            $data['countries'] = Country::orderBy('name', 'ASC')->get(['id', 'name']);
            return view('client.pages.custom_profile', $data);
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
