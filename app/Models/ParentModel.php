<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    use HasFactory;

    protected $table = 'parents';

    protected $fillable = [
        'email',
        'password',
        'fname',
        'lname',
        'national_id',
        'dob',
        'phone',
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
