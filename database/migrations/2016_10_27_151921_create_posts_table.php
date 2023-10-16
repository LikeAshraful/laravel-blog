<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('img_name');
            $table->string('img_path');
            $table->string('img_thumb');
            $table->unsignedBigInteger('user_id')->constrained()->index()->nullable();
            $table->unsignedBigInteger('author_id')->constrained()->index()->nullable();
            $table->unsignedBigInteger('category_id')->constrained();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('posts');
    }
}
