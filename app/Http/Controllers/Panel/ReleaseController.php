<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Models\ReceitasDespesas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReleaseController extends Controller
{
    private string $description;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = ReceitasDespesas::where('user_id',Auth::user()->id)->paginate(15);
        $months = array( 'Jan','Fev','Mar','Abr','Mai','Jun',
                        'Jul','Ago','Set','Out','Nov','Dez');
        return view('panel/release/index',[
            'title'=> 'Exclusão',
            'dados'=> $dados,
            'months' =>$months]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        if(Auth::guest()){
            return redirect('/login');
        }
        $data = $this->getType($id);
        return view('panel/release/create',['title'=> 'Inserção','data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $value = str_replace(',','.', $request->value);

        if($request->description == 'new')
        { 
            $this->description = $request->new_description;
        }
        elseif($request->description == 'exist')
        {    
            $this->description = $request->exist_description;
        }
        else
        {
            $this->description = 'Erro interno'; 
        }


        $dados = [
            'user' => Auth::user()->id,
            'type' => $request->tipo,
            'description' => $this->description,
            'value' => $value,
            'date' => "$request->year-$request->month-1",
        ];
        $create = ReceitasDespesas::create(
            ['user_id' => $dados['user'],
            'type' => $dados['type'],
            'description' => $dados['description'],
            'value' => $dados['value'],
            'date' => $dados['date'],]
        );

        // alert('Dados cadastrado com sucesso!');
        return back();
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

    public function getType($id)
    {
        $tipo = [];
        switch ($id) {
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $dados = ReceitasDespesas::find($id);
        $dados->delete();
        return back();

    }

    
}
