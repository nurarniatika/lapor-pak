<?php

namespace Database\Seeders;

use App\models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name' => 'Admin Lapor Pak',
            'email' => 'admin@laporpak.com',
            'password' => bcrypt('password')
        ])->assignRole('admin');
    }
}
