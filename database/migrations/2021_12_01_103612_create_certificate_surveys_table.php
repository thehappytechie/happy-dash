<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_surveys', function (Blueprint $table) {
            $table->id();
            $table->string('signal_letter')->nullable();
            $table->string('imo_number')->nullable();
            $table->string('ship_name');
            $table->string('ship_port');
            $table->string('official_number');
            $table->string('steam_motor');
            $table->string('where_built');
            $table->string('when_built');
            $table->string('name_address_builder');
            $table->string('decks');
            $table->string('masts');
            $table->string('rigged');
            $table->string('stem');
            $table->string('stern');
            $table->string('build');
            $table->string('vessel_desc');
            $table->string('bulkheads');
            $table->string('gross_ton');
            $table->string('register_ton');
            $table->string('gross_cubic_ton');
            $table->string('register_cubic_ton');
            $table->string('length');
            $table->string('breadth');
            $table->string('depth');
            $table->string('engine_length');
            $table->string('number_seafarers');
            $table->string('location');
            $table->string('no_engines');
            $table->string('no_shafts');
            $table->string('desc_engine');
            $table->string('when_made');
            $table->string('name_address_maker_engine');
            $table->string('cylinder_no');
            $table->string('cylinder_diameter');
            $table->string('stroke_length');
            $table->string('cylinder_set');
            $table->string('boiler_desc');
            $table->string('boiler_no');
            $table->string('load_pressure');
            $table->string('boiler_make');
            $table->string('boiler_maker_address');
            $table->string('nhp');
            $table->string('bhp');
            $table->string('ihp');
            $table->string('ship_speed');
            $table->date('issue_date');
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
        Schema::dropIfExists('certificate_surveys');
    }
}
