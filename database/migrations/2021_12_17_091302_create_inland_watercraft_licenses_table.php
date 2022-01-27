<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInlandWatercraftLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inland_watercraft_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('signal_letter')->nullable();
            $table->string('imo_number')->nullable();
            $table->string('craft_name');
            $table->string('official_number');
            $table->string('craft_owner');
            $table->string('location');
            $table->string('operation_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('license_condition');
            $table->longText('operational_area');
            $table->string('issue_location');
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
        Schema::dropIfExists('inland_watercraft_licenses');
    }
}
