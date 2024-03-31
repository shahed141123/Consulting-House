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
        Schema::create('consultant_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('consultant_id');
            $table->integer('rating');
            $table->text('review')->nullable();
            $table->enum('status', ['active', 'inactive','suspended','hold'])->default('inactive')->nullable();
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('consultant_id')->references('id')->on('consultant_profiles')->onDelete('cascade');
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
        Schema::dropIfExists('consultant_ratings');
    }
};
