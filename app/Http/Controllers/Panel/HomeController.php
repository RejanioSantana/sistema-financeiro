<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Models\ReceitasDespesas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::guest()){

            return redirect()->route('login');
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
}
