<?php

namespace App\Http\Controllers;

use App\logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function logs(){
        return view('log.logs');
    }

    public function logsApi(Request $request)
    {
        $columns = array(
            0 => 'name',
            1 =>  'email',
            2 =>  'ip',
            3 =>  'kind',
            4 =>  'created_at',
        );

        $totalData = logs::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value')))  {

            $logs = logs::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = logs::count();
        }else

        {
            $search= $request->input('search.value');
            $logs = logs:: where('name','like',"%{$search}%")
                ->orWhere('email','like',"%{$search}%")
                ->orWhere('ip','like',"%{$search}%")
                ->orWhere('kind','like',"%{$search}%")
                ->orWhere('created_at','like',"%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = logs::count();
        }
        $data = array();
        if ($logs) {
            foreach ($logs as $log) {
                $nestedData['name'] = $log->name?'<p class="text-center">'.$log->name.'</p>':'<p class="text-center">-</p>';
                $nestedData['email'] = $log->email;
                $nestedData['ip'] = $log->ip;
                if($log->kind==1) {
                    $type = '<p><i class="fa fa-door-open text-success"></i> Girdi</p>';
                }elseif($log->kind==2){
                    $type = '<p><i class="fa fa-door-closed text-info"></i> Çykdy</p>';
                }elseif($log->kind==3){
                    $type = '<p><i class="fa fa-outdent text-danger"></i> Şowsuz</p>';
                }
                $nestedData['kind'] = $type;
                $nestedData['created_at'] = $log->created_at->toDateTimeString();
                $data[] = $nestedData;
            }
        }
        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }
}
