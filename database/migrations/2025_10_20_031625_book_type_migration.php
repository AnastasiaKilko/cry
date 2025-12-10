<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_types', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['выберите тип книги', 'paper-book', 'e-book']);
            $table->string('type_img');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('book_types');
    }
};
