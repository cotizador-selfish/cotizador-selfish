<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('quote_histories', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('quote_id'); // Esto podría ser el ID de la cotización principal
        $table->string('ip_address');
        $table->string('cookie');
        $table->timestamp('cotizacion_at');
        $table->unsignedBigInteger('id_service');
        // Agrega más columnas según sea necesario
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_histories');
    }
};
