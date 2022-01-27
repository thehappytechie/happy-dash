<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeNameShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_name_ships', function (Blueprint $table) {
            $table->id();
            $table->string('signal_letter')->nullable();
            $table->string('imo_number')->nullable();
            $table->string('ship_name');
            $table->string('port_registry');
            $table->string('official_number');
            $table->string('registry_tonnage');
            $table->string('gross_tonnage');
            $table->string('steam_motor');
            $table->string('vessel_location');
            $table->string('proposed_ship_name');
            $table->string('new_port_registry');
            $table->string('name_late_owners');
            $table->string('reasons');
            $table->string('applicant_address');
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
        Schema::dropIfExists('change_name_ships');
    }
}
