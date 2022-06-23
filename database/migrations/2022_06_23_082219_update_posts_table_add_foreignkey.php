<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTableAddForeignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // $table->unsignedBigInteger('user_id');

            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            $table->foreignID('category_id')->nullable()->constrained()->onDelete('set null');
            //cascadeOnDelete gestisce il caso in cui se cancello una categoria, con tutti i post assegnati a quella categoria cosa succede? in questo caso potremmo settare null nel campo category di quello specifico post
            $table->string("image")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn("category_id");
            $table->dropColumn("image");
        });
    }
}
