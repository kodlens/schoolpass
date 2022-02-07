<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HealthQuestionSeeder extends Seeder
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
                'question' => 'Do you have ubo?',
            ],
            [
                'question' => 'Do you have sipon?',
            ],
            [
                'question' => 'Nabuang naka?',
            ],

        ];

        \App\Models\HealthQuestion::insertOrIgnore($data);


    }
}
