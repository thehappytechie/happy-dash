<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnershipCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownership_corporates', function (Blueprint $table) {
            $table->id();
            $table->string('imo_number')->nullable();
            $table->string('signal_letter')->nullable();
            $table->string('ship_name');
            $table->string('official_number');
            $table->date('port_registry_date');
            $table->string('steam_motor');
            $table->string('engine_power');
            $table->string('length');
            $table->string('breadth');
            $table->string('depth');
            $table->string('engine_room_length');
            $table->string('gross_ton');
            $table->string('register_ton');
            $table->string('rep_name');
            $table->string('rep_location');
            $table->string('company_name');
            $table->string('registered_location');
            $table->string('business_location');
            $table->string('skipper');
            $table->string('competency');
            $table->string('owner_shares');
            $table->date('subscriber_date');
            $table->string('subscriber_name');
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
        Schema::dropIfExists('ownership_corporates');
    }
}
