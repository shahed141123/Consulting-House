<?php

namespace App\Http\Controllers\Admin;

use App\Mail\BulkEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class BulkEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.bulk_email.index');
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
        $data = $request->all();
        // dd($data);
        return view('mail.custom');
        $validator = Validator::make(
            $request->all(),
            [
                'recipients.*' => 'nullable|email',
                'subject'      => 'nullable|string',
                'message'      => 'nullable|string',
            ]

        );

        if ($validator->passes()) {
            $data = $request->all();

            foreach ($data['recipients'] as $recipient) {
                Mail::to($recipient)->send(
                    new BulkEmail(
                        $data['subject'],
                        'row_one_title',
                        'row_one_sub_title',
                        'date',
                        'row_one_btn',
                        'row_one_btn_link',
                        'banner_image_desc',
                        'product_title',
                        'product_sub_title',
                        'product_button_name',
                        'product_button_link',
                        'row_four_title',
                        'row_four_sub_title'
                    )
                );
            }
            Toastr::success('Mail Send Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
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
