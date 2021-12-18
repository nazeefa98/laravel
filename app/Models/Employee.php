<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;
    protected $table= "employees";
    protected $fillable = ['name','email','phone','salary'];

    public static function getEmployee(){
        $records= DB::table('employees')->select('id','name','email','phone','salary');
        return $records;
    }
}
