<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
      
        protected $fillable = ['name', 'position', 'office', 'role', 'email', 'phone', 'country','age', 'salary', 'created_at'];
    public function getSalaryAttribute($value)
    {
        return $value . "$";
    }


     function getCreatedAtAttribute($date)
    {
        return date("d/m/Y", strtotime($date));
    }
}
