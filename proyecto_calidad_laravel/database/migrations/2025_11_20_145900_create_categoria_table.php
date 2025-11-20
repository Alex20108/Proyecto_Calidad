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
        Schema::create('categoria', function (Blueprint $table) {

            // ID int primary key → en Laravel: BIGINT UNSIGNED
            $table->id('ID');

            // Nombre varchar(255) not null
            $table->string('Nombre', 255);

            // Estado boolean default true
            $table->boolean('Estado')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria');
    }
};

