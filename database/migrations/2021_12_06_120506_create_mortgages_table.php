<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMortgagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mortgages', function (Blueprint $table) {
            $table->id();
            $table->string('imo_number')->nullable();
            $table->string('signal_letter')->nullable();
            $table->string('official_number');
            $table->string('ship_name');
            $table->string('registry_port');
            $table->string('steam_motor_ship');
            $table->string('horse_power_engine');
            $table->string('length_forepart');
            $table->string('breadth');
            $table->string('depth');
            $table->string('gross_ton');
            $table->string('register_ton');
            $table->string('common_seal');
            $table->string('amount_considered');
            $table->string('company');
            $table->string('company_pronoun');
            $table->string('company_rate');
            $table->date('rate_date');
            $table->date('rate_issue_date');
            $table->date('rate_final_date');
            $table->string('shares');
            $table->string('incumberance');
            $table->date('seal_date');
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
        Schema::dropIfExists('mortgages');
    }
}
