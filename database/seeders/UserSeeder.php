<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Benjie Lenteria',
            'email' => 'benjielenteria@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'Geneva Postrana',
            'email' => 'geneva@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        [
            'name' => 'Ronald Quino',
            'email' => 'ronalquino@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password123')
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
