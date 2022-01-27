<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoastalCraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coastal_crafts', function (Blueprint $table) {
            $table->id();
            $table->string('signal_letter')->nullable();
            $table->string('imo_number')->nullable();
            $table->string('craft_name');
            $table->string('registry_port');
            $table->string('official_number');
            $table->string('register_tonnage');
            $table->date('issue_date');
            $table->string('port_name');
            $table->string('owner');
            $table->string('owner_address');
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
        Schema::dropIfExists('coastal_crafts');
    }
}
