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
            $table->bigIncrements('id');
            // $table->bigInteger('user_id')->nullable()->default(NULL);
            // $table->string('body', 255)->nullable()->default(NULL);
            // $table->timestamp('created_at')->nullable()->default(NULL);
            // $table->timestamp('updated_at')->nullable()->default(NULL);
            // // 論理削除
            // $table->softDeletes()->default(NULL);

            $table->bigInteger('user_id')->nullable();
            $table->string('body', 255)->nullable();
            $table->timestamps();
            // 論理削除
            $table->softDeletes();
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
