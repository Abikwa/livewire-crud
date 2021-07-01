<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquilibrecomptablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equilibrecomptables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plancomptable_id');
            $table->double('debut')->nullable();
            $table->double('credit')->nullable();
            $table->foreign('parent_id')
                  ->references('id')
                  ->on('plancomptables')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('equilibrecomptables');
    }
}
