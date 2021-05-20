<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => 'admin',
                'email'     => 'admin@admin.com',
                'password'  => \bcrypt('admin_test'),
            ],
            [
                'name'      => 'manager',
                'email'     => 'manager@manager.com',
                'password'  => \bcrypt('manager_test'),
            ],
        ];

        \DB::table('users')->insert($data);
    }
}
