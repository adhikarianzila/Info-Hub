<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->mediumText('description');
            $table->string('image');
            $table->tinyInteger('navbar_status')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonial_category');
    }
}
