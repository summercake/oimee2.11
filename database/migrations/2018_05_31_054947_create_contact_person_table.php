<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_persons', function (Blueprint $table) {
            $table->increments('contact_person_id');
            $table->string('contact_person_firstname');
            $table->string('contact_person_lastname');
            $table->string('contact_person_email')->unique();
            $table->string('contact_person_phone');
            $table->string('contact_person_weachat_id')->nullable();
            // active_flag is used for identifying status of delete or not
            $table->tinyInteger('active_flag')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_persons');
    }
}
