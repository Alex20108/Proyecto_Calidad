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
        Schema::create('producto', function (Blueprint $table) {

            // ID BIGINT UNSIGNED PRIMARY KEY
            $table->id('ID');

            // Campos
            $table->string('Nombre', 255);
            $table->integer('Precio');
            $table->string('Material', 255);
            $table->text('Descripcion')->nullable();

            // Relación con Categoria
            $table->unsignedBigInteger('ID_Categoria');

            // Foreign Key correcta → debe coincidir con _categoria.ID
            $table->foreign('ID_Categoria')
                    ->references('ID')
                    ->on('categoria')
                    ->onDelete('cascade');

            // Estado
            $table->boolean('Estado')->default(true);

            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};

