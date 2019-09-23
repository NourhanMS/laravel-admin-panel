<?php

use Illuminate\Database\Seeder;

class leadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leads')->insert(
            [
                'firstname' => 'Ghada',
                'lastname' => 'Mobarez',
                'title' => 'Doctor',
                'email' => 'Ghada@gmail.com',
                'postcode' => '35892',
                'phone' => '0112756223',
            ]
        );
        DB::table('leads')->insert(
            [
                'firstname' => 'Abeer',
                'lastname' => 'Mawaad',
                'title' => 'Doctor',
                'email' => 'Abeer@gmail.com',
                'postcode' => '35892',
                'phone' => '0112756223',
            ]
        );
        DB::table('leads')->insert(
            [
                'firstname' => 'Rawia',
                'lastname' => 'Kera',
                'title' => 'Doctor',
                'email' => 'Rawia@gmail.com',
                'postcode' => '35892',
                'phone' => '0112565623',
            ]
        );
    }
}
