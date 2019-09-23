<?php

use Illuminate\Database\Seeder;

class agentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('agents')->insert(
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'password' => bcrypt('123456789'),
                'phone' => '0112756643',
            ]
        );
        DB::table('agents')->insert(
            [
                'name' => 'Maissa',
                'email' => 'Maissa@gmail.com',
                'password' => bcrypt('123456789'),
                'phone' => '0112756223',
            ]
        );
    }

}
