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
        Schema::create('mis_menu', function (Blueprint $table) {
            $table->id();
            $table->string('menu')->nullable();
            $table->string('url')->nullable();
            $table->string('category')->nullable();
            $table->unsignedBigInteger('parent')->nullable();
            $table->string('role')->nullable();
            $table->timestamps();

            $table->foreign('parent')->references('id')->on('mis_menu')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mis_menu');
    }
};
