<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterReportsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'water_reports';

    /**
     * Run the migrations.
     * @table water_reports
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_reports', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('start_hour');
            $table->time('final_hour');
            $table->decimal('initial_read');
            $table->decimal('final_read');
            $table->decimal('cloration');
            $table->decimal('consumption');
            $table->decimal('consumption_total');
            $table->longText('Observations')->nullable();
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
       Schema::dropIfExists('water_reports');
     }
}
