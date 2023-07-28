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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_type_id')->nullable();
            $table->unsignedBigInteger('business_plan_id')->nullable();
            $table->unsignedBigInteger('individual_service_id')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('client_type_id')->nullable();
            $table->unsignedBigInteger('interest_type_id')->nullable();
            $table->unsignedBigInteger('industry_id')->nullable()->comment('multiple');
            $table->year('established_year')->nullable();
            $table->string('contact_person', 200);
            $table->string('email_address', 200);
            $table->string('mobile_number', 200);
            $table->string('company_name', 200);
            $table->string('employee', 200);
            $table->string('profile_location', 230);
            $table->string('company_location', 230);
            $table->text('short_description')->nullable();
            $table->mediumText('description')->nullable();
            $table->longText('specification')->nullable();
            $table->mediumText('franchise_procedures')->nullable();
            $table->string('currency')->nullable();
            $table->double('asset_value', 8, 2)->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->double('deal_size_min', 8, 2)->nullable();
            $table->double('deal_size_max', 8, 2)->nullable();
            $table->string('price_type', 200)->nullable(); //dropdown dropdown-values: yearly, monthly, full_sale
            $table->mediumText('selling_reason')->nullable();
            $table->enum('receive_quotations', ['false', 'true'])->default('false')->nullable();

            $table->string('company_headquarter')->nullable();
            $table->string('company_website')->nullable();
            $table->integer('outlet')->nullable();
            $table->string('current_location')->nullable();
            $table->string('interested_location')->nullable();
            $table->string('designation')->nullable();
            $table->string('image')->nullable();
            $table->string('teaser')->nullable(); //file
            $table->string('slug')->unique();
            $table->enum('status', ['active', 'inactive'])->default('active')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
