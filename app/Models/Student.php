<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'email',
        'password',
        'fname',
        'lname',
        'dob',
        'phone',
        'parent_id',
        'classroom_id',
        'date_of_joining',
    ];

    public function parent()
    {
        return $this->belongsTo(Parent::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
