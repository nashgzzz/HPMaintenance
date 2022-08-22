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
        Schema::create('product_client_vouchers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignID('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignID('item_clients_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreignID('vouchers_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_client_vouchers');
    }
};
