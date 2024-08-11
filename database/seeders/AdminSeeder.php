<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $admin = [
        'name' => 'admin',
        'email' => 'admin@mail.com',
        'password' => Hash::make('admin@123'),
      ];

      $user = User::updateOrCreate(
        ['email' => $admin['email']], // Search criteria
        [
            'name' => $admin['name'], 
            'password' =>$admin['password'],
        ] // Values to update or create
    );
      $user->roles()->attach(1);

    }
}
