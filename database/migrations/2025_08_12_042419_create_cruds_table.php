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
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('text_field')->nullable();
            $table->string('radio_field')->nullable();
            $table->json('checkbox')->nullable();
            $table->integer('select_field')->nullable();
            $table->date('date_field')->nullable();
            $table->string('file_field')->nullable();
            $table->text('textarea')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cruds');
    }
};
