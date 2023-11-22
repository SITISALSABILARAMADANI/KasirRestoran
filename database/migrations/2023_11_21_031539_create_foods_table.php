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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->integer('harga');
            $table->integer('stock');
            $table->string('slug');
            $table->enum('status', ['Tersedia', 'Tidak Tersedia'])->default('Tersedia');
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->foreign('id_kategori')->on('kategoris')
                ->references('id')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema:table('foods', function (Blueprint $table) {
            $table->dropForeign(['id_kategori']);
        });

        Schema::dropIfExists('foods');
}
};