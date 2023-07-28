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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title', 200)->nullable();
            $table->text('message')->nullable();
            $table->integer('consultation_rating')->unsigned()->nullable();
            $table->text('consultation_message')->nullable();
            $table->integer('business_rating')->unsigned()->nullable();
            $table->text('business_message')->nullable();
            $table->integer('website_rating')->unsigned()->nullable();
            $table->text('website_message')->nullable();
            $table->integer('rating')->unsigned()->nullable();
            $table->enum('approved', ['pending', 'approved'])->default('pending')->nullable();
            $table->enum('public', ['no', 'yes'])->default('no')->nullable();
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
        Schema::dropIfExists('feedback');
    }
};
