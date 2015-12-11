<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(BuildingTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);
        $this->call(ExamScheduleTableSeeder::class);
        $this->call(OfferTableSeeder::class);
        Model::reguard();
    }
}
