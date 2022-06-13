<?php

namespace App\Imports;

use App\Caks;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CaksImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $rows = Array($row);

        foreach ($rows as $row)
        {
            $insert_data[] = ['time' => $row['time'],'temp' => $row['temp'],'basys' => $row['basys'],'cyg' => $row['cyg'],'tizlik' => $row['tizlik'],'aht' => $row['aht'],'hyagday_id' => $row['hyagday_id'],'ugur_id' => $row['ugur_id'],'wel_id' => $row['wel_id'],'date' => $row['date']];
        }
        if(!empty($insert_data))
        {
            DB::table('caks')->insert($insert_data);
        }
    }
}
