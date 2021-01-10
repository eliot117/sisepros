<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolTableSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create([
            'name' => 'administrador',
        ]);

        $role = Role::create([
            'name' => 'solicitante',
        ]);
    }

}
