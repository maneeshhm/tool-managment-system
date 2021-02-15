<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerPhones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_phones', function (Blueprint $table) {
           
           $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade')->onUpdate('cascade');
           $table->string('phone', 10)->nullable()->default('text'); 
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
        //
    }
}
