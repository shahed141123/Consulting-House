<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->mediumText('description')->nullable();
            $table->text('specification')->nullable();
            $table->double('price', 8, 2);
            $table->integer('quantity')->unsigned();
            $table->string('sku')->unique();
            $table->string('manufacturer_code')->unique()->nullable();
            $table->string('product_code')->unique()->nullable();
            $table->json('tags')->nullable();
            $table->json('size')->nullable();
            $table->json('color')->nullable();
            $table->string('warranty')->nullable();
            $table->double('is_discount', 5, 2)->default(0);
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id')->nullable();
            $table->unsignedBigInteger('child_category_id')->nullable();
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->unsignedBigInteger('warehouse_id')->nullable();
            $table->unsignedBigInteger('pickup_point_id')->nullable();
            $table->unsignedBigInteger('payment_method_id')->nullable();
            $table->enum('is_featured', ['false', 'true'])->default('false');
            $table->string('offer_category')->nullable();
            $table->enum('is_status', ['draft', 'pending', 'active', 'inactive'])->default('draft');
            $table->enum('type', ['new', 'refurbished', 'used'])->default('new');
            $table->enum('is_today_deal', ['false', 'true'])->default('false');
            $table->double('deal', 5, 2)->nullable();
            $table->string('image')->nullable();
            $table->string('pdf')->nullable();
            $table->double('supplier_price', 8, 2)->nullable();
            $table->date('supplier_delivery_date')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('child_category_id')->references('id')->on('child_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('warehouse_id')->references('id')->on('ware_houses')->onUpdate('set null');
            $table->foreign('pickup_point_id')->references('id')->on('pick_up_points')->onUpdate('set null');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onUpdate('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
