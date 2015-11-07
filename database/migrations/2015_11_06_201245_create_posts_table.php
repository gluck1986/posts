<?php

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
       /* Schema::table('posts', function (Blueprint $table) {
            //
        });*/
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->string('title',255);
            $table->string('author',255);
            $table->text('content');
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
        /*Schema::table('posts', function (Blueprint $table) {
            //
        });*/
        Schema::drop('posts');
    }
}
