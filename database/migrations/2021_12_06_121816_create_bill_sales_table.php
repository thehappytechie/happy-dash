<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_sales', function (Blueprint $table) {
            $table->id();
            $table->string('imo_number');
            $table->string('signal_letter');
            $table->string('official_number');
            $table->string('ship_name');
            $table->string('year_port_of_registry');
            $table->string('steam_motor');
            $table->string('power_engine');
            $table->string('length')->nullable();
            $table->string('depth')->nullable();
            $table->string('breadth')->nullable();
            $table->string('gross_ton')->nullable();
            $table->string('register_ton')->nullable();
            $table->string('company_name_main');
            $table->string('company_location');
            $table->string('company_amount');
            $table->string('company_payee_main');
            $table->string('company_shares');
            $table->string('company_payee_other');
            $table->string('company_name_other');
            $table->string('company_payee_last');
            $table->string('company_name_secondary');
            $table->string('company_assigns');
            $table->date('issue_date');
            $table->string('company_transferer');
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
        Schema::dropIfExists('bill_sales');
    }
}
