<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text('banner_title_1_en')->nullable();
            $table->text('banner_title_2_en')->nullable();
            $table->text('banner_title_3_en')->nullable();
            $table->text('banner_title_1_ar')->nullable();
            $table->text('banner_title_2_ar')->nullable();
            $table->text('banner_title_3_ar')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
