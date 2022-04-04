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
                'name' => 'Compte démo',
                'email' => 'karao@creacube.site',
                'password'=> bcrypt('demo-2022'),
                'remember_token' => Str::random(60),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
