<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->float('departure_time', 4 , 2);
            $table->float('arrival_time', 4 , 2);
            $table->mediumInteger('train_code')->unique();
            $table->smallInteger('number_of_carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');
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
        Schema::dropIfExists('trains');
    }
}
