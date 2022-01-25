<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            $table->string('Name_of_trip', 100);
            $table->text('Description')->nullable();
            $table->string('Destination', 100);
            $table->string('Trip_duration', 10);
            $table->string('Type_of_transport', 50);
            $table->boolean('Children_accepted')->unsigned();
            $table->tinyInteger('Cost')->unsigned();
    
   
    
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
        Schema::dropIfExists('trips');
    }
}
