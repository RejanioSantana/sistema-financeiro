<?php

namespace App\Http\Controllers;

use App\Models\ReceitasDespesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceitasDespesasController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::guest()){
            return redirect('/login');
        }
        $data = $this->getUser($request);
        return view('insert',['title'=> 'Inserção','data' => $data]);

    }

    public function getUser($request):array
    {
        $r = $request->path();
        $tipo = [];
        switch ($r) {
            case 'rf':
                $tipo = ['RF','RECEITA FIXA'];
                break;
            case 'rv':
                $tipo = ['RV','RECEITA VARIÁVEL'];
                break;
            case 'df':
                $tipo = ['DF','DESPESA FIXA'];
                break;
            case 'dv':
                $tipo = ['DV','DESPESA VARIÁVEL'];
                break;
        }

        $options = ReceitasDespesas::where('user_id',Auth::user()->id)
                    ->where('type',$tipo[0])
                    ->get();

        $options= $options->pluck('description');
        $date  = date("Y",time());
        $data = [$tipo, $options,$date];
        return $data;
    }


    public function store()
    {
        
    }
}
