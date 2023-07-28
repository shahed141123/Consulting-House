<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ChildCategory;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Product\ProductRequest;
use App\Models\ProductAttachment;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('products.*')->latest('id')->get();
            return Datatables::of($data)
                ->addIndexColumn()

                ->addColumn('checkbox', function ($item) {
                    return '<input  type="checkbox" name="rowId[]" id="manual_entry_' . $item->id . '" class="form-check-input" value="' . $item->id . '" />';
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-inline-flex text-center">
                    <a href="' . route('admin.product.edit', [$row->id]) . '"
                        class="text-primary">
                        <i class="ph-pen"></i>
                    </a>
                    <a href="' . route('admin.product.destroy', [$row->id]) . '" class="text-danger mx-2 with-reload-deleteDT">
                        <i class="ph-trash"></i>
                    </a>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action', 'checkbox'])
                ->make(true);
        }
        return view('admin.pages.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'categorys'      => Category::get(['id', 'name']),
            'subCategorys'   => SubCategory::get(['id', 'name']),
            'childCategorys' => ChildCategory::get(['id', 'name']),
            'brands'         => Brand::get(['id', 'name']),
            'paymentMethods' => PaymentMethod::get(['id', 'method']),
        ];
        return view('admin.pages.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $mainSingleImageFile = $request->file('image');
        $mainMultiImagesFile = $request->file('images');
        $path                = storage_path('app/public/');

        if (!empty($mainSingleImageFile)) {
            $globalFunSingleImage =  customUpload($mainSingleImageFile, $path, 44, 44);
        } else {
            $globalFunSingleImage = ['status' => 0];
        }

        $slug = Str::slug($request->name);

        while (Product::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        $productID = Product::insertGetId([
            'brand_id'               => $request->brand_id,
            'category_id'            => $request->category_id,
            'sub_category_id'        => $request->sub_category_id,
            'child_category_id'      => $request->child_category_id,
            'vendor_id'              => $request->vendor_id,
            'supplier_id'            => $request->supplier_id,
            'warehouse_id'           => $request->warehouse_id,
            'pickup_point_id'        => $request->pickup_point_id,
            'payment_method_id'      => $request->payment_method_id,
            'name'                   => $request->name,
            'slug'                   => $slug,
            'price'                  => $request->price,
            'quantity'               => $request->quantity,
            'sku'                    => $request->sku,
            'manufacturer_code'      => $request->manufacturer_code,
            'product_code'           => $request->product_code,
            'tags'                   => json_encode($request->tags),
            'size'                   => json_encode($request->size),
            'color'                  => json_encode($request->color),
            'warranty'               => $request->warranty,
            'is_discount'            => $request->is_discount,
            'is_featured'            => isset($request->is_featured) ? 'true' : 'false',
            'offer_category'         => $request->offer_category,
            'is_status'              => $request->is_status,
            'type'                   => $request->type,
            'is_today_deal'          => isset($request->is_today_deal) ? 'true' : 'false',
            'deal'                   => $request->deal,
            'pdf'                    => $request->pdf,
            'supplier_price'         => $request->supplier_price,
            'supplier_delivery_date' => $request->supplier_delivery_date,
            'short_description'      => $request->short_description,
            'specification'          => $request->specification,
            'description'            => $request->description,
            'image'                  => $globalFunSingleImage['status'] == 1 ? $mainSingleImageFile->hashName() : null,
        ]);

        if (!empty($mainMultiImagesFile)) {
            $attachments = [];
            foreach ($mainMultiImagesFile as $mainMultiImageFile) {
                $globalFunMultiImageFile = customUpload($mainMultiImageFile, $path, 44, 44);
                $attachments[] = [
                    'product_id' => $productID,
                    'images' => $globalFunMultiImageFile['file_name'],
                ];
            }

            ProductAttachment::insert($attachments);
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
            'product'        => Product::find($id),
            'product_images' => ProductAttachment::where('product_id', $id)->get(),
            'categorys'      => Category::get(['id', 'name']),
            'subCategorys'   => SubCategory::get(['id', 'name']),
            'childCategorys' => ChildCategory::get(['id', 'name']),
            'brands'         => Brand::get(['id', 'name']),
            'paymentMethods' => PaymentMethod::get(['id', 'method']),
        ];
        return view('admin.pages.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $mainFile = $request->file('image');
        $filePath = storage_path('app/public/');

        if (!empty($mainFile)) {
            $globalFunImage = customUpload($mainFile, $filePath, 44, 44);

            $paths = [
                storage_path("app/public/{$product->image}"),
                storage_path("app/public/requestImg/{$product->image}")
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

        while (Product::where('slug', '=', $slug)->exists()) {
            $slug = Str::slug($request->name) . '-' . rand(1, 9999);
        }

        $product->update([
            'brand_id'               => $request->brand_id,
            'category_id'            => $request->category_id,
            'sub_category_id'        => $request->sub_category_id,
            'child_category_id'      => $request->child_category_id,
            'vendor_id'              => $request->vendor_id,
            'supplier_id'            => $request->supplier_id,
            'warehouse_id'           => $request->warehouse_id,
            'pickup_point_id'        => $request->pickup_point_id,
            'payment_method_id'      => $request->payment_method_id,
            'name'                   => $request->name,
            'slug'                   => $slug,
            'price'                  => $request->price,
            'quantity'               => $request->quantity,
            'sku'                    => $request->sku,
            'manufacturer_code'      => $request->manufacturer_code,
            'product_code'           => $request->product_code,
            'tags'                   => json_encode($request->tags),
            'size'                   => json_encode($request->size),
            'color'                  => json_encode($request->color),
            'warranty'               => $request->warranty,
            'is_discount'            => $request->is_discount,
            'is_featured'            => isset($request->is_featured) ? 'true'  : 'false',
            'offer_category'         => $request->offer_category,
            'is_status'              => $request->is_status,
            'type'                   => $request->type,
            'is_today_deal'          => isset($request->is_today_deal) ? 'true' : 'false',
            'deal'                   => $request->deal,
            'pdf'                    => $request->pdf,
            'supplier_price'         => $request->supplier_price,
            'supplier_delivery_date' => $request->supplier_delivery_date,
            'short_description'      => $request->short_description,
            'specification'          => $request->specification,
            'description'            => $request->description,
            'image'                  => $globalFunImage['status'] == 1 ? $mainFile->hashName() : $product->image,
        ]);


        toastr()->success('Data has been saved successfully!');

        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $paths = [
            storage_path('app/public/') . $product->image,
            storage_path('app/public/requestImg/') . $product->image
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $product->forceDelete();
    }
    public function multiImageStore(Request $request)
    {
        $productID           = $request->product_id;
        $mainMultiImagesFile = $request->file('images');
        $path                = storage_path('app/public/');

        if (!empty($mainMultiImagesFile)) {
            $attachments = [];
            foreach ($mainMultiImagesFile as $mainMultiImageFile) {
                $globalFunMultiImageFile = customUpload($mainMultiImageFile, $path, 44, 44);
                $attachments[] = [
                    'product_id' => $productID,
                    'images' => $globalFunMultiImageFile['file_name'],
                ];
            }

            ProductAttachment::insert($attachments);

            $product_images = ProductAttachment::where('product_id', $productID)->get();
        }


        return response()->json(['product_images' => $product_images]);
    }
    public function multiImageUpdate(Request $request)
    {
        $id = $request->id;
        $image = ProductAttachment::findOrFail($id);

        if (!$image) {
            return response()->json(['error' => 'Image not found'], 404);
        }
        $paths = [
            storage_path('app/public/') . $image->images,
            storage_path('app/public/requestImg/') . $image->images
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $image->forceDelete();
        return response()->json(['success' => true]);
    }
}
