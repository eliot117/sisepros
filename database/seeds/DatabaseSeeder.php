<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EvaluatorsTableSeeder::class);
    }
}
