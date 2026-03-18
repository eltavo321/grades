<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'subject_id',
        'type',
        'grade',
        'date',
        'comments'
    ];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}