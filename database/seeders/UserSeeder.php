<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'pustakawan'
        ]);
        Permission::create([
            'name' =>'kelola_buku'
        ]);

        Role::create([
            'name' => 'member'
        ]);
        Permission::create([
            'name' =>'lihat_buku'
        ]);
        //
    }
}
