<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     * @table areas
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('label');
            $table->unsignedBigInteger('responsable')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     */
     public function down()
     {
       Schema::dropIfExists('areas');
     }
}
