<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(LgasTableSeeder::class);
        $this->call(Lgas1TableSeeder::class);
        $this->call(Lgas2TableSeeder::class);
        $this->call(Lgas3TableSeeder::class);
        
    }
}
