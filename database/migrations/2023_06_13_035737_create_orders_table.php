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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('rfq_id')->nullable();
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->string('order_number', 20)->unique();
            $table->string('invoice_number', 20)->unique();
            $table->string('billing_name');
            $table->string('billing_address_line1', 255);
            $table->string('billing_address_line2', 255)->nullable();
            $table->string('billing_city', 100)->nullable();
            $table->string('billing_state', 100)->nullable();
            $table->string('billing_postal_code', 20)->nullable();
            $table->unsignedBigInteger('billing_country')->nullable();
            $table->string('billing_phone', 20)->nullable();
            $table->string('shipping_name');
            $table->string('shipping_address_line1', 255);
            $table->string('shipping_address_line2', 255)->nullable();
            $table->string('shipping_city', 100)->nullable();
            $table->string('shipping_state', 100)->nullable();
            $table->string('shipping_postal_code', 20)->nullable();
            $table->unsignedBigInteger('shipping_country')->nullable();

            $table->string('shipping_phone', 20)->nullable();
            $table->unsignedBigInteger('payment_method_id')->nullable();
            $table->string('transaction_number', 100)->nullable();
            $table->double('total_amount', 10, 2);
            $table->text('notes')->nullable();
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->date('order_date')->nullable();
            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled', 'return'])->default('pending');
            $table->date('processing_date')->nullable();
            $table->date('shipped_date')->nullable();
            $table->date('delivered_date')->nullable();
            $table->date('return_date')->nullable();
            $table->text('return_reason')->nullable();
            $table->double('return_amount', 10, 2);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('rfq_id')->references('id')->on('rfqs')->onUpdate('cascade');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onUpdate('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onUpdate('cascade');
            $table->foreign('billing_country')->references('id')->on('countries')->onUpdate('cascade');
            $table->foreign('shipping_country')->references('id')->on('countries')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
