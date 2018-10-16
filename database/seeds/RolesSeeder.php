<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Role::create([
            'name' => 'User',
            'slug' => 'user'
        ]);

        $coach = \App\Role::create([
            'name' => 'Coach',
            'slug' => 'coach',
        ]);

        $company = \App\Role::create([
            'name' => 'Company',
            'slug' => 'company',
        ]);
    }
}
