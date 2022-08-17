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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',100);
            $table->string('serie', 100);
            $table->time('Hora_llegada');
            $table->time('Hora_salida');
            $table->datetime('fecha');
            $table->string('observaciones', 200);
            $table->foreignID('branch_office_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('product_client_vouchers')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
};
