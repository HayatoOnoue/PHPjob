<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ['taro' ,'jiro', 'saburo'];
        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user,
                'email' => $user . '@ex.com',
                'password' => Hash::make('password'),
            ]);
        }

    }
}
