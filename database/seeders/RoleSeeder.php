<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['role_name' => 'Admin', 'url' => '/admin'],
            ['role_name' => 'User', 'url' => '/user'],
            ['role_name' => 'Guest', 'url' => '/guest'],
        ]);
    }
}
