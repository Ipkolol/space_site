<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // uzivatel, resp id uzivatela -> cez id vytiahneme zvysok
            $table->integer('user_id');
            // nadpis
            $table->string('title');
            // text -> obsah clanku
            $table->text('article');
            // slug
            $table->string('slug')->unique();
            // pocet upvote-ov
            $table->integer('up_vote');
            // pocet downvote-ov
            $table->integer('down_vote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
