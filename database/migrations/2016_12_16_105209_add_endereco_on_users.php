<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnderecoOnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('endereco');
            $table->unsignedInteger('numero');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->enum('estado',["AC","AL","AP","AM","BA","CE","DF","ES","GO",
                                  "MA","MT","MS","MG","PA","PB","PR","PE","PI",
                                  "RJ","RN","RS","RO","RR","SC","SP","SE","TO"]);       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->dropColumn('endereco');
               $table->dropColumn('numero');
                 $table->dropColumn('bairro');
                   $table->dropColumn('cep');
                    $table->dropColumn('cidade');
                     $table->dropColumn('estado',["AC","AL","AP","AM","BA","CE","DF","ES","GO",
                                  "MA","MT","MS","MG","PA","PB","PR","PE","PI",
                                  "RJ","RN","RS","RO","RR","SC","SP","SE","TO"]);
        });
    }
}
