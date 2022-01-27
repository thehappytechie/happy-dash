<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternationalCodeLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('international_code_letters', function (Blueprint $table) {
            $table->id();
            $table->string('imo_number');
            $table->string('signal_letter');
            $table->string('ship_name');
            $table->string('registry_port');
            $table->string('net_tonnage');
            $table->string('official_number');
            $table->string('name_address_owner');
            $table->string('registry_port_location');
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
        Schema::dropIfExists('international_code_letters');
    }
}
