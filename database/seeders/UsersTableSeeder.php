<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456789'),
            'remember_token' => Str::random(10),
            'profile_photo_path' => 'avatar.png',

        ]);
        $super_admin->attachRole('super_admin');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456789'),
            'remember_token' => Str::random(10),
            'profile_photo_path' => 'avatar.png',

        ]);
        $admin->attachRole('admin');
    }
}
