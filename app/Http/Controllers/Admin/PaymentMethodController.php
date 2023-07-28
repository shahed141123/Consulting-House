<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['paymentMethods'] = PaymentMethod::get();
        return view('admin.pages.paymentMethod.index', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');
        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);
        } else {
            $globalFunImage = ['status' => 0];
        }
        PaymentMethod::create([
            'method'              => $request->method,
            'account_number'      => $request->account_number,
            'account_holder_name' => $request->account_holder_name,
            'account_address'     => $request->account_address,
            'bank_name'           => $request->bank_name,
            'bank_branch_name'    => $request->bank_branch_name,
            'bank_routing'        => $request->bank_routing,
            'status'              => $request->status,
            'image'               => $globalFunImage['status'] == 1 ? $mainFile->hashName() : null,
            'api_key'             => $request->api_key,
            'minimum_amount'      => $request->minimum_amount,
            'maximum_amount'      => $request->maximum_amount,
            'description'         => $request->description,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$paymentMethod->image}"),
                storage_path("app/public/requestImg/{$paymentMethod->image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunImage = ['status' => 0];
        }

        $paymentMethod->update([
            'method'              => $request->method,
            'account_number'      => $request->account_number,
            'account_holder_name' => $request->account_holder_name,
            'account_address'     => $request->account_address,
            'bank_name'           => $request->bank_name,
            'bank_branch_name'    => $request->bank_branch_name,
            'bank_routing'        => $request->bank_routing,
            'status'              => $request->status,
            'image'               => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $paymentMethod->image,
            'api_key'             => $request->api_key,
            'minimum_amount'      => $request->minimum_amount,
            'maximum_amount'      => $request->maximum_amount,
            'description'         => $request->description,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paths = [
            storage_path('app/public/') . $paymentMethod->image,
            storage_path('app/public/requestImg/') . $paymentMethod->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $paymentMethod->forceDelete();
    }
}
