<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weekdays=[
            'Su','Mo','Tu','We','Th','Fr','Sa',
        ];

        $users=\App\User::all();
        $users_count = count($users)-1;

        $subjects=\App\Subject::all();
        $subjects_count = count($subjects)-1;
        $data = [];


        for($i=0; $i<100 ; $i++){
            $data[] = [
                'weekday' => $weekdays[rand(0,6)],
                'subject_id' => $subjects[rand(0,$subjects_count)]->id,
                'user_id' => $users[rand(0,$users_count)]->id,
                'time' => rand(8,20).':00',
            ];
        }


        DB::table('schedules')->insert($data);

    }

}
