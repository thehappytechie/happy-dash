<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInlandCraftLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inland_craft_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('signal_letter')->nullable();
            $table->string('imo_number')->nullable();
            $table->string('name_of_craft');
            $table->string('official_number');
            $table->string('port_registry');
            $table->string('craft_type');
            $table->string('no_persons');
            $table->string('engine_speed');
            $table->string('engine_desc');
            $table->string('name_maker_address');
            $table->string('engine_total');
            $table->string('where_built');
            $table->string('name_maker_builders');
            $table->string('year_built');
            $table->string('power');
            $table->string('length');
            $table->string('breadth');
            $table->string('depth');
            $table->string('net_tonnage');
            $table->string('gross_tonnage');
            $table->string('operator_name');
            $table->string('certificate_no');
            $table->date('issue_date');
            $table->string('name_address_owners');
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
        Schema::dropIfExists('inland_craft_licenses');
    }
}
