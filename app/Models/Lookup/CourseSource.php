<?php

namespace App\Models\Lookup;

use Illuminate\Database\Eloquent\Model;

class CourseSource extends Model
{
    protected $table = 'lookup_course_sources';

    public function levelField()
    {
        return $this->belongsTo('App\Models\LevelField', 'level_field_id', 'id');
    }
}