<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'linh',
            'email' => 'itvdn1995@gmail.com',
            'password' => bcrypt('123123'),
            'quyen' => 1
        ]);

        DB::table('managedomain')->insert([[
            'username' => 'linh',
            'namedomain' => 'test123.com',
        ],[
            'username' => 'linh-test',
            'namedomain' => 'linh-test.com',
        ]
        ]);
    }
}
