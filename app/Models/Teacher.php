<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'fname',
        'lname',
        'national_id',
        'dob',
        'phone',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
