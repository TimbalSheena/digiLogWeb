<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbladmin')->insert(array(
            array(
                'username' => 'jradmin',
                'adminName' => 'John R. Riley',
                'adminPassword' => 'adminpassword',
            ),
        ));

        DB::table('tbloffice')->insert(
            array(
                'username' => '003001ASO',  // bldgnum + floor + acronym
                'officeName' => 'Admission and Scholarship Office',
                'officeBuildingNum' => '3',
                'officePassword' => 'asopassword', // bisan unsa lang sa karon just make it simple
                'officeStatus' => 'offline', // i offline lang sa tanan
            ),
        );
    }
}
