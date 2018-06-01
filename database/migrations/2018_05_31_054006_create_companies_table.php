<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema ::create('companies', function (Blueprint $table){
            $table -> increments('company_id');
            $table -> integer('contact_person_id')-> unsigned();
            $table -> string('company_name');
            $table -> string('company_address_line_1');
            $table -> string('company_address_line_2');
            $table -> string('company_city');
            $table -> string('company_state');
            $table -> string('company_country');
            $table -> string('company_zip');
            $table -> tinyInteger('company_industry');
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
        Schema ::dropIfExists('companies');
    }
}
