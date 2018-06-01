<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema ::create('users', function (Blueprint $table){
            $table -> increments('user_id');
            // active_flag is used for identifying role of user
            $table -> integer('role_id') -> unsigned();
            $table -> string('user_name');
            $table -> string('user_password');
            // active_flag is used for identifying avatar of user
            $table -> string('user_avatar');
            $table -> string('user_firstname') -> nullable();
            $table -> string('user_lastname') -> nullable();
            $table -> tinyInteger('user_gender') -> nullable();
            $table -> string('user_email') -> unique();
            $table -> string('user_phone') -> nullable();
            $table -> string('user_wechat_id') -> nullable();
            // active_flag is used for identifying status of delete or not
            $table -> tinyInteger('active_flag') ->default(1);
            // active_flag is used for verifying user's email
            $table -> rememberToken();
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

        Schema ::dropIfExists('users');
    }
}
