<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_ships', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('business_location');
            $table->string('appointee');
            $table->string('common_seal');
            $table->string('affixed_hereto');
            $table->date('issue_date');
            $table->string('witness');
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
        Schema::dropIfExists('register_ships');
    }
}
