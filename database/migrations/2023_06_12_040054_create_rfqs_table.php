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
        Schema::create('rfqs', function (Blueprint $table) {
            $table->id();
            $table->string('rfq_code')->unique();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->string('custom_product_name', 100)->nullable();
            $table->integer('quantity');
            $table->double('price', 8, 2)->nullable();
            $table->double('tax', 5, 2)->nullable();
            $table->double('vat', 5, 2)->nullable();
            $table->string('delivery_address', 200)->nullable();
            $table->string('user_name', 100)->nullable();
            $table->string('user_email', 100)->nullable();
            $table->string('user_phone', 20)->nullable();
            $table->enum('rfq_status', ['rfq', 'deal', 'order', 'delivered'])->default('rfq');
            $table->enum('status', ['pending', 'replied', 'closed', 'rejected'])->default('pending');
            $table->text('notes')->nullable();
            $table->text('product_description')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamp('creation_date')->useCurrent();
            $table->date('close_date')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfqs');
    }
};
