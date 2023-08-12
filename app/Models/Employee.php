<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'position', 'office', 'role', 'email', 'phone', 'age', 'salary', 'created_at'];
    public function getSalaryAttribute($value)
    {
        return $value . "$";
    }
    public function getRoleAttribute($role){
        if ($role == 'admin') {
            ucfirst($role);
            echo "<span class='label label-danger'>$role</span>";
        } elseif ($role == "manger") {
            ucfirst($role);
            echo "<span class='label label-lg label-success'>$role</span>";
        } else {
            ucfirst($role);
            echo "<span class='label label-lg label-primary'>$role</span>";
        }
    }

    public function getCreatedAtAttribute($date)
    {
        return date("d/m/Y", strtotime($date));
    }
}
