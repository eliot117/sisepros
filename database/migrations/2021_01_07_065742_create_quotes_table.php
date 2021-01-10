<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('name_evaluado',80);
            $table->string('lastname_evaluado',80);
            $table->string('correo_evaluado',80);
            $table->date('date_exam_map')->nullable();
            $table->date('time_exam_map')->nullable();
            $table->date('date_exam_pyxon')->nullable();
            $table->date('time_exam_pyxon')->nullable();
            $table->enum('type_exam', ['MAP','PYXON', 'AMBAS']);
            $table->string('eps_exam');
            $table->integer('status_evaluation')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
