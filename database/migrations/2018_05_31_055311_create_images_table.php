<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema ::create('images', function (Blueprint $table){
            $table -> increments('image_id');
            $table -> string('image_name');
            // image_path is the physical absolute path
            $table -> string('image_path');
            $table -> string('image_url');
            // image type : 0 is surface image, 1 is content image
            $table -> string('image_type');
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
        Schema ::dropIfExists('images');
    }
}
