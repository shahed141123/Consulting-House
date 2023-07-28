<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['contacts'] = Contact::latest('id','DESC')->get();
        return view('admin.pages.contact.index', $data);
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
        $today = date('dmy');
        $lastCode = Contact::where('code', 'like',  $today . '%')->orderBy('id', 'desc')->first();

        if ($lastCode) {
            $lastNumber = explode('-', $lastCode->code)[1];
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        $code = $today . '-' . $newNumber;
        Contact::create([
            'code'       => $code,
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'address'    => $request->address,
            'message'    => $request->message,
            'ip_address' => request()->ip(),
        ]);
        toastr()->success('Thank You. We have received your message. We will contact with you very soon.');
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
        Contact::find($id)->update([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'address'    => $request->address,
            'message'      => $request->message,
            'ip_address' => $request->ip_address,
        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::find($id)->delete();
    }
}
