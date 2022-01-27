<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatercraftOperationLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watercraft_operation_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('imo_number')->nullable();
            $table->string('signal_letter')->nullable();
            $table->string('name_craft');
            $table->string('official_number');
            $table->string('craft_owner');
            $table->string('location');
            $table->string('operation_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('license_conditions');
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
        Schema::dropIfExists('watercraft_operation_licenses');
    }
}
