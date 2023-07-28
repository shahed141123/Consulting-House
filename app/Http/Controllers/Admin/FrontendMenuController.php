<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\FrontendMenu;
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\FrontendMenuRequest;

class FrontendMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['menuItems'] = FrontendMenu::orderBy('order', 'asc')->get();

        return view('admin.pages.frontend_menu.index', $data);
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
    public function store(FrontendMenuRequest $request)
    {

        $slug = Str::slug($request->name);
        $count = FrontendMenu::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        FrontendMenu::create([
            'parent_id' => $request->parent_id,
            'name'      => $request->name,
            'slug'      => $data['slug'],
            'url'       => $request->url,
            'order'     => $request->order,
            'status'    => $request->status,
            'icon'      => $request->icon,
            'target'    => $request->target,
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FrontendMenuRequest $request, string $id)
    {
        $fontendmenu = FrontendMenu::findOrFail($id);

        $fontendmenu->update([
            'parent_id' => $request->parent_id,
            'name'      => $request->name,
            'url'       => $request->url,
            'order'     => $request->order,
            'status'    => $request->status,
            'icon'      => $request->icon,
            'target'    => $request->target,
        ]);

        toastr()->success('Data has been Updated successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fontendmenu = FrontendMenu::findOrFail($id);

        $fontendmenu->forceDelete();
    }
}
