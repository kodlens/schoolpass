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
                'appointment_type' => '(REGISTRAR) GRADE INQUIRY'
            ],
            [
                'appointment_type' => '(OSA) CLAIM UNIFORM'
            ],
            [
                'appointment_type' => '(ACCOUNTING) PAYMENT'
            ],
            [
                'appointment_type' => '(REGISTRAR) EVALUATION'
            ],
        ];

        \App\Models\AppointmentType::insertOrIgnore($data);
    }
}
