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

            $table->unsignedBigInteger('client_type')->nullable();
            $table->unsignedBigInteger('transaction_type')->nullable();
            $table->unsignedBigInteger('company_entity_type')->nullable();
            $table->unsignedBigInteger('industry_id')->nullable()->comment('multiple');
            $table->string('contact_person', 200);
            $table->string('company_name', 200);
            $table->string('mobile_number', 200);
            $table->string('email_address', 200);
            $table->boolean('display_contact_details')->default(false);
            $table->boolean('display_company_details')->default(false);
            $table->string('established_year')->nullable();
            $table->string('profile_location', 230);
            $table->string('employee', 200);
            $table->text('short_description')->nullable();
            $table->mediumText('products_services')->nullable();
            $table->mediumText('description')->nullable();
            $table->longText('specification')->nullable();
            $table->mediumText('capitalization_overview')->nullable();
            $table->string('company_location', 230);
            $table->mediumText('assets_description')->nullable();
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
