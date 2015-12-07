<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => '150795',
                'name' => 'Sergio',
                'last_name' => 'Contreras Sustaita',
                'password' => bcrypt('070993')
            ],
            [
                'id' => '116157',
                'name' => 'Eric Josué',
                'last_name' => 'Narváez Mendoza',
                'password' => bcrypt('160993')
            ],
            [
                'id' => '141617',
                'name' => 'Liliana Sxxxxxxxx',
                'last_name' => 'Mondragón Vidal',
                'password' => bcrypt('123456')
            ],
            [
                'id' => '152463',
                'name' => 'Francisco de Jesús',
                'last_name' => 'Serrano Paul',
                'password' => bcrypt('456789')
            ],
        ]);
    }
}
