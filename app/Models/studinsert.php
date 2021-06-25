<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studinsert extends Model
{
    use HasFactory;
    protected $table = 'studentsinsert';
    protected $fillable = ['name'];

}
