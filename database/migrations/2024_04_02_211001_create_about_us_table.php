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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('breadcrumb_title')->nullable();
            $table->string('breadcrumb_sub_title')->nullable();
            $table->string('section_one_badge')->nullable();
            $table->string('section_one_title')->nullable();
            $table->string('section_one_sub_title')->nullable();
            $table->longText('section_one_description')->nullable();
            $table->string('section_one_image')->nullable()->comment('original'); //570 x 531 pixels
            $table->string('ceo_section_badge')->nullable();
            $table->string('ceo_section_title')->nullable();
            $table->string('ceo_section_sub_title')->nullable();
            $table->longText('ceo_section_description')->nullable();
            $table->string('ceo_section_image')->nullable()->comment('original'); //570 x 531 pixels
            $table->string('ceo_section_ceo_name')->nullable();
            $table->string('ceo_section_ceo_designation')->nullable();
            $table->string('ceo_section_signature_image')->nullable()->comment('rqImg:105*33');
            $table->string('choose_us_section_title')->nullable();
            $table->string('choose_us_one_image')->nullable()->comment('rqImg:32*32');
            $table->string('choose_us_one_title')->nullable();
            $table->text('choose_us_one_description')->nullable();
            $table->string('choose_us_two_image')->nullable()->comment('rqImg:32*32');
            $table->string('choose_us_two_title')->nullable();
            $table->text('choose_us_two_description')->nullable();
            $table->string('choose_us_three_image')->nullable()->comment('rqImg:32*32');
            $table->string('choose_us_three_title')->nullable();
            $table->text('choose_us_three_description')->nullable();
            $table->string('contact_section_title')->nullable();
            $table->string('head_office_title')->nullable();
            $table->string('head_office_address')->nullable();
            $table->string('head_office_email')->nullable();
            $table->string('head_office_phone')->nullable();
            $table->string('sub_office_one_title')->nullable();
            $table->string('sub_office_one_address')->nullable();
            $table->string('sub_office_one_email')->nullable();
            $table->string('sub_office_one_phone')->nullable();
            $table->string('sub_office_two_title')->nullable();
            $table->string('sub_office_two_address')->nullable();
            $table->string('sub_office_two_email')->nullable();
            $table->string('sub_office_two_phone')->nullable();
            $table->string('sub_office_three_title')->nullable();
            $table->string('sub_office_three_address')->nullable();
            $table->string('sub_office_three_email')->nullable();
            $table->string('sub_office_three_phone')->nullable();
            $table->string('sub_office_four_phone')->nullable();
            $table->string('sub_office_four_title')->nullable();
            $table->string('sub_office_four_address')->nullable();
            $table->string('sub_office_four_email')->nullable();
            $table->string('counter_one_value')->nullable();
            $table->string('counter_one_title')->nullable();
            $table->string('counter_two_value')->nullable();
            $table->string('counter_two_title')->nullable();
            $table->string('counter_three_value')->nullable();
            $table->string('counter_three_title')->nullable();
            $table->string('counter_four_value')->nullable();
            $table->string('counter_four_title')->nullable();
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
        Schema::dropIfExists('about_us');
    }
};
