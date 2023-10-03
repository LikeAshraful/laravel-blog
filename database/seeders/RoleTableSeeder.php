<?php

namespace Database\Seeders;

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'administrator',
        ]);

        Role::create([
            'name' => 'author',
        ]);
    }
}
