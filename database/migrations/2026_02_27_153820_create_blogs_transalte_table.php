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
        Schema::create('blogs_transalte', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('blog_id');
            $table->string('lang');
            $table->string('title');
            $table->string('desc')->nullable();
            $table->text('content');
            $table->string('keywords')->nullable();
            $table->index('id');
            $table->index('blog_id');
            $table->index('lang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs_transalte');
    }
};
