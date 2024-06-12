<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_copies', function (Blueprint $table) {
            $table->id();

             //atributo foraneo 
             $table->unsignedBigInteger('user_id')->nullable();
             $table->unsignedBigInteger('book_id')->nullable();

              //referencia 
            $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('set null');

            $table->foreign('book_id')
            ->references('id')
            ->on('books')->onDelete('set null');

             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user__copies');
    }
};
