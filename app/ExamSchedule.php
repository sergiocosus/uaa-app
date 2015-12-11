<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamSchedule extends Model
{
    use SoftDeletes;

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    protected $appends = array('subject_name');

    public function getSubjectNameAttribute()
    {
        return $this->subject->name;
    }
}
