<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('date');
            $table->string('paid_by_to');
            $table->integer('amount');
            $table->integer('quantity');
            $table->string('unit');
            $table->integer('total');
            $table->string('type');
            $table->string('status');
            $table->string('utr');
            $table->string('invoice');
            $table->string('project');
            $table->text('comment');
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
};
