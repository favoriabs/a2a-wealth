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
            'first_name' => 'Super',
            'last_name' => 'admin',
            'phone_number' => '1234567890',
            'email' => 'admin@agric.com',
            'password' => 'secret',
            'user_name' => 'admin',
            
        ];
        
        $admin = Sentinel::registerAndActivate($adminDetails, true);
        $role = Sentinel::findRoleBySlug('superadmin');
        $role->users()->attach($admin);
        
        $cooperativeDetails = [
            'first_name' => 'Admin',
            'last_name' => 'Cooperative',
            'phone_number' => '1234567890',
            'email' => 'cooperative@agric.com',
            'password' => 'secret',
            'user_name' => 'cooperative',
            
        ];
        
        $cooperative = Sentinel::registerAndActivate($cooperativeDetails, true);
        $role = Sentinel::findRoleBySlug('cooperative_admin');
        $role->users()->attach($cooperative);
        
        $companyDetails = [
            'first_name' => 'Admin',
            'last_name' => 'Company',
            'phone_number' => '1234567890',
            'email' => 'company@agric.com',
            'password' => 'secret',
            'user_name' => 'company',
            
        ];
        
        $company = Sentinel::registerAndActivate($companyDetails, true);
        $role = Sentinel::findRoleBySlug('company_admin');
        $role->users()->attach($company);
        
        $agentDetails = [
            'first_name' => 'Admin',
            'last_name' => 'Agent',
            'phone_number' => '1234567890',
            'email' => 'agent@agric.com',
            'password' => 'secret',
            'user_name' => 'agent',
            
        ];
        
        $agent = Sentinel::registerAndActivate($agentDetails, true);
        $role = Sentinel::findRoleBySlug('agent_admin');
        $role->users()->attach($agent);
        
        $farmerDetails = [
            'first_name' => 'Farmer',
            'last_name' => 'Farmer',
            'phone_number' => '1234567890',
            'email' => 'farmer@agric.com',
            'password' => 'secret',
            'user_name' => 'farmer',
            'agent_id' => 1,
            
        ];
        
        $farmer = Sentinel::registerAndActivate($farmerDetails, true);
        $role = Sentinel::findRoleBySlug('farmer');
        $role->users()->attach($farmer);
        
        
    }
}
