<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminDetails = [
            'first_name' => 'Nani',
            'last_name' => 'admin',
            'phone_number' => '1234567890',
            'email' => 'admin@agric.com',
            'password' => 'secret',
            
        ];
        
        $admin = Sentinel::registerAndActivate($adminDetails, true);
        $role = Sentinel::findRoleBySlug('superadmin');
        $role->users()->attach($admin);
        
        $corporativeDetails = [
            'first_name' => 'Nani',
            'last_name' => 'Coporative',
            'phone_number' => '1234567890',
            'email' => 'corporative@agric.com',
            'password' => 'secret',
            
        ];
        
        $corporative = Sentinel::registerAndActivate($corporativeDetails, true);
        $role = Sentinel::findRoleBySlug('corporative_admin');
        $role->users()->attach($corporative);
        
        $farmerDetails = [
            'first_name' => 'Nani',
            'last_name' => 'Farmer',
            'phone_number' => '1234567890',
            'email' => 'farmer@agric.com',
            'password' => 'secret',
            
        ];
        
        $farmer = Sentinel::registerAndActivate($farmerDetails, true);
        $role = Sentinel::findRoleBySlug('farmer');
        $role->users()->attach($farmer);
        
        
    }
}
