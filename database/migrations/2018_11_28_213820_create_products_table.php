<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100); //nome do produto
            $table->decimal('value_sale',11,2); //valor de venda
            $table->decimal('value_cost',11,2); //valor de compra (custo)
            $table->text('obs')->nullable(); //observação
            $table->timestamps(); //datas de criação e alteração
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
