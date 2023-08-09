<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=['name' , 'position' ,'office','role','email', 'phone' ,'age', 'start_date' , 'salary'];
}
