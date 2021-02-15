<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tool_name', 15)->nullable()->default('text');
            $table->integer('tool_price')->unsigned()->nullable()->default(12);
            //tool quality 5 star rating. category according to 1 to n number 
            $table->tinyInteger('tool_category');
            $table->tinyInteger('tool_quality');
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
