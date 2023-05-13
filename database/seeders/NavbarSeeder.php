<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{

    public function run()
    {
        $links = [
            [
                'name' => 'Registrarse',
                'route' => 'registro',
                'ordering' => 1,
            ]
           
            ];

            foreach($links as $key => $navbar){
                Navbar::create($navbar);
            }
    }
}
