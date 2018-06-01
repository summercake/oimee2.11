<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema ::create('advertisements', function (Blueprint $table){
            $table -> increments('adv_id');
            $table -> integer('category_id')-> unsigned();
            $table -> integer('company_id')-> unsigned();
            $table -> integer('image_id')-> unsigned();
            $table -> integer('sale_note_id')-> unsigned();
            $table -> string('adv_title');
            $table -> string('adv_description') -> nullable();
            // adv_link is used for store product official shopping link
            $table -> string('adv_link') -> nullable();
            // adv_secondary_link is a backup product link
            $table -> string('adv_secondary_link') -> nullable();
            $table -> decimal('adv_original_price', 8, 2) -> nullable();
            $table -> decimal('adv_final_price', 8, 2) -> nullable();
            $table -> decimal('adv_actual_charge_price', 8, 2) -> nullable();
            $table -> decimal('adv_discount_rate', 8, 2) -> nullable();
            $table -> string('adv_promotion_code') -> nullable();
            $table -> datetime('adv_start_date') -> nullable();
            $table -> datetime('adv_valid_to_date') -> nullable();
            $table -> datetime('adv_display_valid_to_date') -> nullable();
            // adv_tag is used for identifying status of normal, hottest, newest and others
            $table -> tinyInteger('adv_tag');
            //
            $table -> string('adv_share_channel') -> nullable();
            $table -> tinyInteger('adv_page_zone_code') -> nullable();
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
        Schema ::dropIfExists('advertisements');
    }
}
