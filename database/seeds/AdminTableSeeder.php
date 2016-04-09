<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Caventel\User::class)->create([
            'idCedula' => '1',
            'password' => \Hash::make('1234'),
            'role' => 'superadmin'
        ]);



    }
}