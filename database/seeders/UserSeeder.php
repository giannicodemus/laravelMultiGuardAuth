<?php

namespace Database\Seeders;


use DB;
use Hash;
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
        //
        DB::table('users')->insert([
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'password' => Hash::make('123mudar'),
        ]);

        DB::table('admin_users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123mudar'),
        ]);

        DB::table('client_users')->insert([
            'name' => 'Cliente',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('123mudar'),
        ]);
    }

}
