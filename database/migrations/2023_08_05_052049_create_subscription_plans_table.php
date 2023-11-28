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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_type_id')->nullable();
            $table->string('category')->nullable();
            $table->string('name');
            $table->string('stripe_plan');
            $table->string('slug')->unique();
            $table->json('descriptions')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('currency')->default('USD')->nullable();
            $table->string('interval')->comment('Interval in days')->nullable();
            $table->integer('max_users')->nullable();
            $table->integer('max_projects')->nullable();
            $table->integer('max_storage')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
