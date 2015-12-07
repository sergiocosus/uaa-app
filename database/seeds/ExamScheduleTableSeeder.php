<?php

use Illuminate\Database\Seeder;

class ExamScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users=\App\User::all();
        $users_count = count($users)-1;

        $subjects=\App\Subject::all();
        $subjects_count = count($subjects)-1;
        $data = [];


        for($i=0; $i<100 ; $i++){
            $data[] = [
                'description' => '',
                'subject_id' => $subjects[rand(0,$subjects_count)]->id,
                'user_id' => $users[rand(0,$users_count)]->id,
                'date_time' => '2015-'.rand(1,12).'-'.rand(1,28).' '.rand(8,20).':'.(rand(0,1)*3).'0',
                'duration' => ((float)rand(1,6))/2,
            ];
        }


        DB::table('exam_schedules')->insert($data);
    }
}
