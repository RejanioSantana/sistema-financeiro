<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Models\ReceitasDespesas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $date  = date("Y",time());
        return view('panel/report/index',['title'=> 'Relatório','date' => $date]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function report(Request $r)
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
        return view('panel/report/result', ['title'=>'Planilha','report'=>$report,'all'=> $all]);
    }
}
