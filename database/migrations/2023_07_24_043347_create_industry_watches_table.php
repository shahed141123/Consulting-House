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
        Schema::create('industry_watches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('sector_id')->nullable();
            $table->unsignedBigInteger('industry_id')->nullable();
            $table->unsignedBigInteger('profile_type_id')->nullable()->comment('multi_id');
            $table->enum('featured', ['0', '1'])->default('0')->nullable();
            $table->string('badge')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('header')->nullable();
            $table->string('tags')->nullable();
            $table->longText('content');
            $table->text('short_description')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->boolean('is_published')->default(false);
            $table->string('author_name')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->string('meta_tags')->nullable();
            $table->string('author_email')->nullable();
            $table->unsignedInteger('word_count')->nullable();
            $table->unsignedInteger('reading_time')->nullable();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('industry_watch_categories')->onDelete('cascade');
            // $table->foreign('sector_id')->references('id')->on('industry_sectors')->onDelete('cascade');
            // $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
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
        Schema::dropIfExists('industry_watches');
    }
};
