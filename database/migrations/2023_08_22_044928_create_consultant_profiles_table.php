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
        Schema::create('consultant_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('sector_id')->nullable()->comment('multiple');
            $table->unsignedBigInteger('industry_id')->nullable()->comment('multiple');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('contact_number')->unique();
            $table->string('experience')->nullable();
            $table->string('established_year')->nullable();
            $table->string('profile_location')->nullable();
            $table->text('short_description')->nullable();
            $table->text('bio')->nullable();
            $table->text('specialization')->nullable();
            $table->string('image')->nullable();
            $table->string('experience_document')->nullable();
            $table->string('verification_degree')->nullable();
            $table->boolean('is_approved')->default(false)->nullable();
            $table->boolean('acknowledege')->default(true)->nullable();
            $table->enum('status', ['active', 'inactive','suspended','hold'])->default('active')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->foreign('client_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultant_profiles');
    }
};
