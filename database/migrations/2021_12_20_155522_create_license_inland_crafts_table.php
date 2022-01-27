<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseInlandCraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_inland_crafts', function (Blueprint $table) {
            $table->id();
            $table->string('imo_number')->nullable();
            $table->string('signal_letter')->nullable();
            $table->string('craft_name');
            $table->string('official_number');
            $table->string('port_registry');
            $table->string('craft_type');
            $table->string('no_persons');
            $table->string('engine_speed');
            $table->string('engine_desc');
            $table->string('maker_address_name');
            $table->string('engine_total');
            $table->string('where_built');
            $table->string('maker_builder_name');
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
            $table->string('address_owner_name');
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
        Schema::dropIfExists('license_inland_crafts');
    }
}
