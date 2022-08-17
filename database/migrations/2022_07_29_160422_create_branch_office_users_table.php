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
        Schema::create('branch_office_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignID('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('branch_office_users');
    }
};
