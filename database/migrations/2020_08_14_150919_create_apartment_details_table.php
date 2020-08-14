<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_details', function (Blueprint $table) {
            $table->increments('id');
            $table->float('clearance_area');
            $table->float('floor_area');
            $table->float('kidsbedroom_area');
            $table->float('masterbedroom_area');
            $table->float('balcony_area');
            $table->float('toilet1_area');
            $table->float('toilet2_area');
            $table->float('kitchen_area');
            $table->float('livingroom_area');
            $table->float('diningtable_area');
            $table->float('dryingyard_area');
            $table->float('apartment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartment_details');
    }
}
