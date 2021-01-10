<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluatorsTable extends Migration
{
    public function up()
    {
        Schema::create('evaluators', function (Blueprint $table) {
            $table->id();
            $table->string('name_evaluators',80);
            $table->string('lastname_evaluators',80);
            $table->text('address');
            $table->string('extension',80);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evaluators');
    }
}
