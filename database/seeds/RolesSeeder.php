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
        $roles = ['admin', 'owner', 'customer'];

        foreach ($roles as $role) {
            \App\Models\Role::query()->create(['name' => $role]);
        }
    }
}
