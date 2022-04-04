<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            [
                'status' => false,
                'next_event' => '01/04/2025',
            ],
        ];

        foreach ($activities as $key => $value) {
            Activity::create($value);
        }
    }
}
