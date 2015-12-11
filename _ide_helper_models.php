<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Schedule
 *
 * @property integer $id
 * @property string $weekday
 * @property integer $subject_id
 * @property integer $user_id
 * @property string $time
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereWeekday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereSubjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Schedule whereDeletedAt($value)
 */
	class Schedule {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ExamSchedule[] $examSchedules
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Schedule[] $schedules
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDeletedAt($value)
 */
	class User {}
}

namespace App{
/**
 * App\ExamSchedule
 *
 * @property integer $id
 * @property integer $subject_id
 * @property integer $user_id
 * @property string $description
 * @property string $date_time
 * @property float $duration
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Subject $subject
 * @property-read mixed $subject_name
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereSubjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereDateTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereDuration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ExamSchedule whereDeletedAt($value)
 */
	class ExamSchedule {}
}

namespace App{
/**
 * App\Building
 *
 * @property integer $id
 * @property string $name
 * @property float $latitude
 * @property float $longitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Building whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Building whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Building whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Building whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Building whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Building whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Building whereDeletedAt($value)
 */
	class Building {}
}

namespace App{
/**
 * App\Subject
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Subject whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subject whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subject whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subject whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Subject whereDeletedAt($value)
 */
	class Subject {}
}

