<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminPhones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_phones', function (Blueprint $table) {
           $table->foreignId('admin_id')->constrained('admins')->onDelete('cascade')->onUpdate('cascade');
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
