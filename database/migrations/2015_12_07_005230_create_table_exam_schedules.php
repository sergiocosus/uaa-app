<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExamSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id',false,true);
            $table->integer('user_id',false,true);
            $table->string('description');
            $table->dateTime('date_time');

            $table->foreign('subject_id','exam_schedules_subject_id_foreign' )->references('id')->on('subjects');
            $table->foreign('user_id','exam_schedules_user_id_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam schedules', function (Blueprint $table) {
            //
        });
    }
}
