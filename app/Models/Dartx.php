<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dartx extends Model
{
    use HasFactory;
    protected $table= "dartx";
    protected $fillable = ['sku','description','colour','size','group_name','bar_code','in_stock','b2c','sale','brand'];

    public static function getEmployee(){
        $records= DB::table('dartx')->select('sku','description','colour','size','group_name','bar_code','in_stock','b2c','sale','brand');

        return $records;
    }
}
