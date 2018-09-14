<?php

use Illuminate\Database\Seeder;
use Populasi\Models\User;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('bismillah'),
            ],
            [
                'name' => 'Randy Anwar',
                'username' => 'randy',
                'password' => bcrypt('randy789'),
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
