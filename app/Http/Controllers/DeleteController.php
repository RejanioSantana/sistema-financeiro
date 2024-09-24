<?php

namespace App\Http\Controllers;

use App\Models\ReceitasDespesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteController extends Controller
{
    public function index()
    {
        if(Auth::guest()){
            return redirect('/login');
        }
        $dados = ReceitasDespesas::where('user_id',Auth::user()->id)->paginate(15);
        $months = array( 'Jan','Fev','Mar','Abr','Mai','Jun',
                        'Jul','Ago','Set','Out','Nov','Dez');
        return view('delete',[
            'title'=> 'Exclusão',
            'dados'=> $dados,
            'months' =>$months]);
    }
    public function destroy($id)
    {
        $dados = ReceitasDespesas::find($id);
        $dados->delete();
        return back();
    }
}
