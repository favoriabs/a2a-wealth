<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'slug' => 'superadmin',
            'name' => 'Super Admin',
        ]);
        
        DB::table('roles')->insert([
            'slug' => 'cooperative_admin',
            'name' => 'Cooperative Admin',
        ]);
        
        DB::table('roles')->insert([
            'slug' => 'company_admin',
            'name' => 'Company Admin',
        ]);
        
        DB::table('roles')->insert([
            'slug' => 'agent_admin',
            'name' => 'Agent Admin',
        ]);
        
        DB::table('roles')->insert([
            'slug' => 'farmer',
            'name' => 'Farmer',
        ]);
    }
}
