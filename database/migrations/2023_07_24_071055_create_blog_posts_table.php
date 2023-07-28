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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('industry_id')->nullable();
            $table->string('profile_type_id')->nullable();
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
            $table->json('meta_tags')->nullable();
            $table->string('source')->nullable();
            $table->string('source_url')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_email')->nullable();
            $table->unsignedInteger('word_count')->nullable();
            $table->unsignedInteger('reading_time')->nullable();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('blog_categories')->onDelete('cascade');
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
        Schema::dropIfExists('blog_posts');
    }
};
