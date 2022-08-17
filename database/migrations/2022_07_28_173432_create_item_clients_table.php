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
        Schema::create('item_clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',200);
            $table->dateTime('fecha_isntalacion');
            $table->string('descripcion',200);
            $table->string('obvervaciones',400);
            $table->foreignID('branch_office_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_client');
    }
};
