<?php

namespace App\Http\Controllers;

use App\Models\ReceitasDespesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Scalar\Float_;

use function Laravel\Prompts\alert;

class InsertController extends Controller
{
    private string $description;
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
}
