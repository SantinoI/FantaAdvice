<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttaccantiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attaccanti', function (Blueprint $table) {
            $table->id();
            $table->text("R");
            $table->text("Nome");
            $table->text("Squadra");
            $table->integer("Qt_A");
            $table->integer("Qt_I");
            $table->integer("Diff");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attaccanti');
    }
}
