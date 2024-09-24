<?php

namespace App\Http\Controllers;

use App\Models\ReceitasDespesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::guest()){

            return redirect('/login');
        }

        $movimentos = $this->relatorioMes();
        return view('home',['title'=> 'Home','relatorio'=> $movimentos]);
    }
    public function relatorioMes(): array
    {
        $movimento = ReceitasDespesas::limit(30)->orderby('id','desc')->get();
        $relatorio = [
            'RG' => 0,
            'DG' => 0,
            'GR' => 0,
            'LC' => 0,
        ];
        foreach($movimento as $value)
        {
            if(in_array($value->type, ['DV','DF']) ){
                $relatorio['DG'] +=  $value->value;
            }
            
            if(in_array($value->type, ['RV','RF'])){
                $relatorio['RG'] +=  $value->value;
            }
            $relatorio['GR'] += $value->value;
        }

        $relatorio['LC'] = $relatorio['RG'] - $relatorio['DG'];

        return $relatorio;
    }
}
