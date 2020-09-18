<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompresorReportsTable extends Migration
{
  
    /**
     * Run the migrations.
     * @table compresor_reports
     *
     */

    public function up()
    {
        Schema::create('compresor_reports', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->date('date');
            $table->decimal('oil_level');
            $table->decimal('temperature');
            $table->longText('observations')->nullable();
            $table->unsignedBigInteger('user_report');
            $table->timestamps();

            $table->foreign('user_report')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('compresor_reports');
     }
}
