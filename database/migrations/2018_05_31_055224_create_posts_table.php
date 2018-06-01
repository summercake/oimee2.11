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
        Schema ::create('posts', function (Blueprint $table){
            $table -> increments('post_id');
            $table -> integer('user_id')-> unsigned();
            $table -> integer('category_id')-> unsigned();
            $table -> string('post_title') -> unique();
            $table -> string('post_subtitle') -> nullable();
            $table -> string('post_content');
            $table -> string('post_excerpt');
            $table -> string('post_slug');
            $table -> integer('post_reply_count')->default(0);
            $table -> integer('post_view_count')->default(0);
            $table -> integer('post_like_count')->default(0);
            $table -> tinyInteger('post_tag');
            $table -> integer('post_last_reply_user_id');
            $table -> integer('post_order')->default(1);
            // active_flag is used for identifying status of delete or not
            $table -> tinyInteger('active_flag')->default(1);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema ::dropIfExists('posts');
    }
}
