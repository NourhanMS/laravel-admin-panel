<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmittedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submitted_orders', function (Blueprint $table) {
            $table->integer('lead_id')->unsigned();
            $table->integer('agent_id')->unsigned();
            $table->timestamp('submitted_on');
            $table->primary(['lead_id', 'agent_id']);
            $table->foreign('lead_id')->references('id')->on('leads');
            $table->foreign('agent_id')->references('id')->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submitted_orders');
    }
}
