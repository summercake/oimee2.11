<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema ::create('collections', function (Blueprint $table){
            $table -> increments('collection_id');
            $table -> integer('adv_id')-> unsigned();
            $table -> integer('user_id')-> unsigned();
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
        Schema ::dropIfExists('collections');
    }
}
