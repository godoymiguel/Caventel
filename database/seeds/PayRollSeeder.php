<?php

use Illuminate\Database\Seeder;

class PayRollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Caventel\PayRoll::class, 100)->create();
    }
}
