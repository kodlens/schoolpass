<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'qr_ref' => 'AA1234',
                'username' => 'angel',
                'lname' => 'LOPEZ',
                'fname' => 'ANGEL',
                'mname' => 'P',
                'sex' => 'FEMALE',
                'province' => 'MISMAIS OCCIDENTAL',
                'city' => 'TANGUB CITY',
                'barangay' => 'CANIANGAN',
                'street' => 'P-6',
                'email' => 'angel@dev.com',
                'contact_no' => '09167789585',
                'role' => 'ADMINISTRATOR',
                'password' => Hash::make('a')
            ],
            [
                'qr_ref' => 'BB1234',
                'username' => 'riche',
                'lname' => 'MAGLANGIT',
                'fname' => 'RICHE',
                'mname' => '',
                'sex' => 'MALE',
                'province' => 'MISMAIS OCCIDENTAL',
                'city' => 'OZAMIS CITY',
                'barangay' => 'SINUSZA',
                'street' => 'P-SAMPLE',
                'email' => 'riche@dev.com',
                'contact_no' => '09167789584',
                'role' => 'USER',
                'password' => Hash::make('a')
            ],
            [
                'qr_ref' => 'AAA111',
                'username' => 'admin',
                'lname' => 'AMPARADO',
                'fname' => 'ETIENNE WAYNE',
                'mname' => '',
                'sex' => 'MALE',
                'province' => 'MISMAIS OCCIDENTAL',
                'city' => 'OZAMIS CITY',
                'barangay' => 'SINUSZA',
                'street' => 'P-SAMPLE',
                'email' => 'admin@dev.com',
                'contact_no' => '09167789584',
                'role' => 'ADMINISTRATOR',
                'password' => Hash::make('a')
            ]
        ];

        \App\Models\User::insertOrIgnore($data);
    }
}
