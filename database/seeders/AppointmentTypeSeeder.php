<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppointmentTypeSeeder extends Seeder
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
                'appointment' => 'AA1234'
            ],
            [
                'appointment' => 'AA1234'
            ]
        ];

        \App\Models\AppointmentType::insertOrIgnore($data);
    }
}
