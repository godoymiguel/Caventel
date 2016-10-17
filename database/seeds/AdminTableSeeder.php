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
            'ci' => '1',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234'),
            'type' => 'superadmin',
            'created_at' => '2014-02-27'
        ]);

        factory(Caventel\User::class, 5)->create();

    }
}