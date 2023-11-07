<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'description',
    ];

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
