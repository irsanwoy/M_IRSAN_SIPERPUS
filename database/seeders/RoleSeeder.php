<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pustakawan
        Role::create([
            'name' => 'pustakawan'
        ]);
        Permission::create([
            'name' => 'kelola_buku'
        ]);
        
        // Member
        Role::create([
            'name' => 'member'
        ]);
        Permission::create([
            'name' => 'lihat_buku'
        ]);
    }
}
