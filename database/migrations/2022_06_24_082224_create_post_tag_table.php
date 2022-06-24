<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //nella tabella ponte meglio togliere ID e timestamp. 
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->foreignID('post_id')->constrained()->onDelete('cascade');
            $table->foreignID('tag_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
