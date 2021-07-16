<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    private static array $roles = [
        [
            'name' => 'Admin',
        ],
        [
            'name' => 'Manager',
        ],
        [
            'name' => 'Operator',
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$roles as $role) {
            \App\Models\Role::factory(1)->create($role);
        }
    }
}
