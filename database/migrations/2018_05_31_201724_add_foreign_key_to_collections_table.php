<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddForeignKeyToCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema ::table('collections', function (Blueprint $table){
            $table -> foreign('adv_id') -> references('adv_id') -> on('advertisements');
            $table -> foreign('user_id') -> references('user_id') -> on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema ::table('collections', function (Blueprint $table){
            $table -> dropForeign('collections_adv_id_foreign');
            $table -> dropForeign('collections_user_id_foreign');
        });
    }
}
