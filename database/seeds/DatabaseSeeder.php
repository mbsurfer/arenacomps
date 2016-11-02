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
        $this->call(BracketSeeder::class);
        $this->call(FactionSeeder::class);
        $this->call(RaceSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
