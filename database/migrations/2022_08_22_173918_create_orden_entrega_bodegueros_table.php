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
        Schema::create('orden_entrega_bodegueros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',200);
            $table->string('detalle', 200);
            $table->foreignID('users_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('products_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_entrega_bodegueros');
    }
};
