<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipMarkingCarvingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_marking_carvings', function (Blueprint $table) {
            $table->id();
            $table->string('signal_letter')->nullable();
            $table->string('imo_number')->nullable();
            $table->string('ship_name');
            $table->string('registry_port');
            $table->string('official_number');
            $table->string('register_tonnage');
            $table->date('registrar_date');
            $table->string('registrar_port');
            $table->date('issue_date');
            $table->string('location');
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
        Schema::dropIfExists('ship_marking_carvings');
    }
}
