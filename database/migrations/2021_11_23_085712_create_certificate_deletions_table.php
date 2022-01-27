<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateDeletionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_deletions', function (Blueprint $table) {
            $table->id();
            $table->string('ship_name');
            $table->string('official_number');
            $table->string('signal_letter')->nullable();
            $table->string('imo_number')->nullable();
            $table->string('type');
            $table->string('port_registry');
            $table->string('gross_ton');
            $table->string('net_ton');
            $table->string('registered_owner');
            $table->date('dated_at');
            $table->string('sale_transfer');
            $table->string('encumberance');
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
        Schema::dropIfExists('certificate_deletions');
    }
}
