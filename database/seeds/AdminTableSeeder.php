<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'admin',
        'password' => Hash::make('admin1'),
    ));
}

}
