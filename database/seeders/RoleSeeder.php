<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'User A'],
            ['name' => 'User B'],
            ['name' => 'User C'],
        ];

        foreach ($roles as $role) {
           Role::updateOrCreate($role);
        }
    }
}
