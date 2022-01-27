<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateRegistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_registries', function (Blueprint $table) {
            $table->id();
            $table->string('imo_number')->nullable();
            $table->string('signal_letter')->nullable();
            $table->string('official_number');
            $table->string('ship_name');
            $table->string('port_registry');
            $table->string('prev_port_registry');
            $table->string('steam_motor');
            $table->string('where_built');
            $table->string('when_built');
            $table->string('name_address_builders');
            $table->string('decks');
            $table->string('masts');
            $table->string('rigged');
            $table->string('stem');
            $table->string('stern');
            $table->string('build');
            $table->string('vessel_desc');
            $table->string('bulkheads');
            $table->string('overall_length');
            $table->string('breadth_mould');
            $table->string('depth_mould');
            $table->string('engine_length');
            $table->string('no_engines');
            $table->string('no_shafts');
            $table->string('desc_engine');
            $table->string('engine_make');
            $table->string('engine_name_address_maker');
            $table->string('cylinder_set');
            $table->string('cylinder_diameter');
            $table->string('cylinder_no');
            $table->string('stroke_length');
            $table->string('NHP');
            $table->string('BHP');
            $table->string('IHP');
            $table->string('ship_speed');
            $table->string('gross_tonn');
            $table->string('register_tonn');
            $table->string('gross_ton_cubic');
            $table->string('register_ton_cubic');
            $table->string('number_seafarers');
            $table->string('registry_port');
            $table->string('captain');
            $table->string('competency');
            $table->string('name_residence_owners');
            $table->string('sixty_four_shares');
            $table->string('location');
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
        Schema::dropIfExists('certificate_registries');
    }
}
