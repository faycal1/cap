<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('pername');
            $table->date('birthday');
            $table->string('phone');
            $table->longText('adress');
            $table->json('diploma');
            $table->longText('affilation');
            $table->longText('otheskills');            
            $table->longText('currentsituation');
            $table->string('anciente');
            $table->longText('qualification');
            $table->json('expirience');
            $table->longText('otherinformation');
            $table->json('matrix');
            $table->timestamps();
            $table->softDeletes();
        }) ;

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cvs');
    }
}
