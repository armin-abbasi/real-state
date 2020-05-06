<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    const ADMIN_ROLE = 1;
    const OWNER_ROLE = 2;
    const CUSTOMER_ROLE = 3;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::query()->create([
            'name'     => 'Admin',
            'email'    => 'admin@test.local',
            'password' => '12345',
            'role_id'  => self::ADMIN_ROLE,
        ]);

        \App\Models\User::query()->create([
            'name'     => 'Owner',
            'email'    => 'owner@test.local',
            'password' => '12345',
            'role_id'  => self::OWNER_ROLE,
        ]);

        \App\Models\User::query()->create([
            'name'     => 'Customer',
            'email'    => 'customer@test.local',
            'password' => '12345',
            'role_id'  => self::CUSTOMER_ROLE,
        ]);
    }
}
