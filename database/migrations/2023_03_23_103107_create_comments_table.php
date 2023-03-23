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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();            
            $table->string('text');
            $table->string('user_name');
            // create a column for the foreign key and also the constraint.
            // when a message is beeing deleted, also the comments are beeing deleted: 
            // onDelete('cascade')
            $table->foreignId('message_id')->constrained('messages')->onDelete('cascade');                            
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
