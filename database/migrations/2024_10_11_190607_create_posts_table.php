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
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key column called 'id'
            $table->unsignedBigInteger('autor_id'); // Creates an 'autor_id' column as an unsigned big integer
            $table->foreign('autor_id')->references('id')->on('users'); // Sets 'autor_id' as a foreign key referencing the 'id' column in the 'users' table
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->string('image-url');
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('posts'); // Drops the 'posts' table if it exists
    }
};
