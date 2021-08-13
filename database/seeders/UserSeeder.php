<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Greg',
                'email' => 'gregvandenbergh@gmail.com',
                'password'=> bcrypt('KAR-S@f3W@ys013'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Fus',
                'email' => 'alain.fustin@gmail.com',
                'password'=> bcrypt('ZVcHY3Hct7yVrSd'),
                'remember_token' => Str::random(60),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
