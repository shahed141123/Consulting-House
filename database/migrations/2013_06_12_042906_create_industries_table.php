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
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('logo')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('link')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active')->nullable();
            $table->foreign('sector_id')->references('id')->on('industry_sectors')->onUpdate('cascade');
            $table->foreign('parent_id')->references('id')->on('industries')->onUpdate('cascade');
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
        Schema::dropIfExists('industries');
    }
};
