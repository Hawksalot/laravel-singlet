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
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->enum('type', [
                'image',
                'text',
                'video'
            ]);
            //$table->bigInteger('commentID')->unsigned()->nullable();
            $table->integer('feedID')->unsigned();
            //$table->integer('imageID')->unsigned()->nullable();
            //$table->integer('ownerID')->unsigned();
            //$table->integer('textID')->unsigned()->nullable();
            //$table->integer('videoID')->unsigned()->nullable();
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
