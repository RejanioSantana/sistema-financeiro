<?php

namespace App\Http\Controllers;

use App\Models\ReceitasDespesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        if(Auth::guest()){
            return redirect('/login');
        }
        
        $date  = date("Y",time());
        return view('report',['title'=> 'Relatório','date' => $date]);
    }
    public function pdf(Request $r)
    {
        $one_date =  $r['year-1']."/".$r['month-1']."/01";
        $two_date =  $r['year-2']."/".$r['month-2']."/01";
        
        $data =   ReceitasDespesas::whereBetween('date',[$one_date,$two_date])
                    ->where('user_id',Auth::user()->id)->get();


        $report = [
            'RECEITA FIXA' => [],
            'RECEITA VARIAVEL'=> [],
            'DESPESA FIXA' => [],
            'DESPESA VARIAVEL' => []
        ];
        $all = [
            'TR' => 0,
            'TD' => 0,
            'SD' => 0
        ];
        foreach ($data as  $value) {
            if(in_array($value->type, ['RF']) ){
                $report['RECEITA FIXA'][] = [$value->description,$value->value];
                $all['TR'] += $value->value;
            }
            if(in_array($value->type, ['RV']) ){
                $report['RECEITA VARIAVEL'][] = [$value->description,$value->value];
                $all['TR'] += $value->value;
            }
            if(in_array($value->type, ['DF']) ){
                $report['DESPESA FIXA'][] = [$value->description,$value->value];
                $all['TD'] += $value->value;
            }
            if(in_array($value->type, ['DV']) ){
                $report['DESPESA VARIAVEL'][] = [$value->description,$value->value];
                $all['TD'] += $value->value;
            }
            
        }
        $all['SD'] = $all['TR'] -$all['TD'];
        return view('result', ['title'=>'Planilha','report'=>$report,'all'=> $all]);

    }
}
