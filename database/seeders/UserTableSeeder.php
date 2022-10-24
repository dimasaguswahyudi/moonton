<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Dimas',
            'email' => 'dimas2.ds4@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');
    }
}
