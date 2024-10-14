<?php
// database/migrations/2024_09_05_054523_create_blog_tag_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTagTable extends Migration
{
    public function up()
    {
        Schema::create('blog_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_tag');
    }
}
