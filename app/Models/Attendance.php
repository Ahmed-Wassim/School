<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_date',
        'student_id',
        'attendance_status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
