<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',100);
            $table->string('direccion',200);
            $table->string('serie',100);
            $table->integer('iva');
            $table->integer('precio');
            $table->foreignID('inventory_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('supplier_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('kind_products_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('store_id')->constrained()->onUpdate('cascade')->onDelete('cascade');   

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
};
