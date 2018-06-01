<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * recursion unlimited categories
         * */
        Schema ::create('categories', function (Blueprint $table){
            $table -> increments('category_id');
            $table -> integer('parent_id') -> unsigned() -> nullable() ->default(null);
            $table -> string('name') -> unique();
            $table -> string('slug') -> unique();
            // active_flag is used for identifying status of delete or not
            $table -> tinyInteger('active_flag') ->default(1);
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
        Schema ::dropIfExists('categories');
    }
}
