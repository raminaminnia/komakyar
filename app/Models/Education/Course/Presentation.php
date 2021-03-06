<?php

namespace App\Models\Education\Course;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $table = 'education_course_presentations';

    public function group()
    {
        return $this->belongsTo('App\Models\Education\Group\Group', 'group_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\User\Teacher\Teacher', 'teacher_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Education\Course\Course', 'course_id', 'id');
    }

    public function annualPrograms()
    {
        return $this->hasMany('App\Models\Education\Program\AnnualProgram', 'presentation_id', 'id');
    }

    public function dailyPrograms()
    {
        return $this->hasMany('App\Models\Education\Program\DailyProgram', 'presentation_id', 'id');
    }
}
