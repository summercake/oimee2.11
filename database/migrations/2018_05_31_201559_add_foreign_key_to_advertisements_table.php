<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advertisements', function (Blueprint $table) {
            $table -> foreign('category_id') -> references('category_id') -> on('categories');
            $table -> foreign('company_id') -> references('company_id') -> on('companies');
            $table -> foreign('image_id') -> references('image_id') -> on('images');
            //$table -> foreign('sale_note_id') -> references('sale_note_id') -> on('sale_notes') -> onUpdate('cascade') -> onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('advertisements', function (Blueprint $table) {
            $table -> dropForeign('advertisements_category_id_foreign');
            $table -> dropForeign('advertisements_company_id_foreign');
            $table -> dropForeign('advertisements_image_id_foreign');
            //$table -> dropForeign('advertisements_role_id_foreign');
        });
    }
}
