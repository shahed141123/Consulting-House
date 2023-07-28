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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('phone', 20)->nullable();
            $table->string('designation', 100)->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('company_logo', 100)->nullable();
            $table->string('image')->nullable();
            $table->string('address', 200)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('zip_code', 50)->nullable();
            $table->string('timezone', 150)->nullable();
            $table->string('country')->nullable();
            $table->string('currency')->nullable();
            // $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('interested_country_id')->nullable();
            $table->unsignedBigInteger('interested_industry_id')->nullable();

            $table->boolean('two_factor_authentication')->default(false);
            $table->enum('status', ['active', 'inactive', 'suspended','pending']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamp('last_activity')->nullable();
            $table->timestamp('creation_date')->useCurrent();
            $table->timestamps();
            // $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade');
            $table->foreign('interested_country_id')->references('id')->on('countries')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
