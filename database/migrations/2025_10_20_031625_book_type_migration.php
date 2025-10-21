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
        Schema::create('book_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('pages')->nullable();
            $table->string('size')->nullable();
            $table->enum('book_cover', ['hardcover', 'softcover'])->nullable();
            $table->unsignedMediumInteger('copies')->nullable();
            $table->unsignedSmallInteger('weight')->nullable();
            $table->unsignedSmallInteger('filesize')->nullable();
            $table->string('file_format')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('e-book-link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_types');
    }
};
