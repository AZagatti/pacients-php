<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birthday');
            $table->string('gender');
            $table->integer('weight');
            $table->integer('height');
            $table->string('ethnicity');
            $table->string('schooling');
            $table->string('occupation');
            $table->string('rg');
            $table->string('cpf');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('nationality_state');
            $table->string('father');
            $table->string('father_nationality');
            $table->string('mother');
            $table->string('mother_nationality');
            $table->string('contact');
            $table->string('street');
            $table->integer('number');
            $table->string('add_on')->nullable();
            $table->string('district');
            $table->string('city');
            $table->string('cep');
            $table->string('state');
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
        Schema::dropIfExists('pacients');
    }
}
