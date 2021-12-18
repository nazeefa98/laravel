<?php

namespace App\Imports;

use App\Models\Dartx;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class DartxImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dartx([
            //
            'sku'=>$row['sku'],
            'Item Description'=>$row['description'],
            'colour'=>$row['colour'],
            'group_name'=>$row['group_name'],
            'bar_code'=>$row['bar_code'],
            'in_stock'=>$row['in_stock'],
            'b2c'=>$row['b2c'],
            'sale'=>$row['sale'],
            'brand'=>$row['brand'],

        ]);
    }
}
