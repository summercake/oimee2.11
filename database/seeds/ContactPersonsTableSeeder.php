<?php

use Illuminate\Database\Seeder;
use App\Models\Contact_person;
class ContactPersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contact_person::class, 100)->create();
    }
}
