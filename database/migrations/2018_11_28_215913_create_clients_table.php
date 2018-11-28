<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['FISICA','JURIDICA']); //se é pessoa fisica ou juridica
            $table->string('cpf_cnpj',30); //cpf ou cnpj
            $table->string('name',100); //nome
            $table->string('name_fantasy',100)->nullable(); //nome fantasia
            $table->string('email',100)->nullable(); //email
            $table->string('address')->nullable(); //endreço
            $table->integer('number')->default(0); //número
            $table->string('city')->nullable(); //cidade
            $table->char('uf',2)->nullable(); //UF/estado
            $table->text('obs')->nullable(); //observação
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
        Schema::dropIfExists('clients');
    }
}
