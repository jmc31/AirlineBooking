<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('departure');
            $table->string('destination');
            $table->date('departure_date');
            $table->date('return_date')->nullable();
            $table->string('class');
            $table->integer('available_seats');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
