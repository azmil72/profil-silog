<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->longText('content');
            $table->string('image')->nullable();
            $table->string('category');
            $table->string('slug')->unique();
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->date('published_at');
            $table->string('author')->nullable();
            $table->json('tags')->nullable();
            $table->string('download_file')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};