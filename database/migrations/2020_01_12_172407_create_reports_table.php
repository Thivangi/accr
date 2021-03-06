<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('regNum');
            $table->string('driverId');
            $table->dateTime('dnt');
            $table->string('type');
            $table->integer('injured');
            $table->integer('death');
            $table->integer('numOfVehicles');
            $table->string('info');
            $table->string('lat');
            $table->string('lon');
            $table->string('severity');
            $table->string('url');
            $table->boolean('confirm');
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
        Schema::dropIfExists('reports');
    }
}
