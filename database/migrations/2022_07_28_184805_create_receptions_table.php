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
        Schema::create('receptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 200);
            $table->string('descripcion', 200);
            $table->datetime('fecha');
            $table->foreignID('item_clients_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('bodega_sucursal_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receptions');
    }
};
