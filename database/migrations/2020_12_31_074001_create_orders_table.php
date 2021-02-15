<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tool_id')->constrained('tools')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('location_id')->nullable()->constrained('locations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->integer('fee')->unsigned()->nullable()->default(12);
            $table->integer('qty')->unsigned()->nullable()->default(12);
            $table->integer('delivery_fee')->unsigned()->nullable()->default(12);
            $table->integer('days')->unsigned()->nullable()->default(12);
            $table->string('status', 50)->nullable()->default('text');
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
        Schema::dropIfExists('orders');
    }
}
