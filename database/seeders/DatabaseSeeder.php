<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = new User;
        $user->fname = 'super admin';
        $user->username = 'superadmin';
        $user->email = 'superadmin@gmail.com';
        $user->password = Hash::make('admin');
        $user->email_verified_at = '2021-03-21 05:45:01';
        $user->role = 'superadmin';
        $user->role_level = 1;
        $user->save();
    }
}
