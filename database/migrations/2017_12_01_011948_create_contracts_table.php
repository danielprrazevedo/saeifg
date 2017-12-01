<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dt_cad');
            $table->date('dt_term')->nullable();
            $table->date('dt_prev_inic');
            $table->date('dt_prev_fim');
            $table->integer('carga_horaria');
            $table->text('observacao')->nullable();
            $table->integer('student_id');
            $table->integer('company_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('contracts');
    }
}
