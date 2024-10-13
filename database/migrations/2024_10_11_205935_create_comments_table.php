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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key column called 'id'
            $table->unsignedBigInteger('post_id'); // Creates a 'post_id' column as an unsigned big integer
            $table->foreign('post_id')->references('id')->on('posts'); // Sets 'post_id' as a foreign key referencing the 'id' column in the 'posts' table
            $table->text('body'); // Creates a 'body' column for storing comment text
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
        Schema::dropIfExists('comments'); // Drops the 'comments' table if it exists
    }
};
