<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investimento;

class InvestimentoController extends Controller
{
    private $investimento;

    public function __constructor($investimento)
    {
        $this->investimento = $investimento;
    }

    public function index()
    {
        $investimentos = Investimento::paginate(3);

        if(!empty($investimentos))
        {
            $cont = count($investimentos);
            $saldoAnterior = $investimentos[$cont-1]->saldo_atual;
        }
        else
        {
            $saldoAnterior = 0;
        }

        return view('app.src.main',['investimentos'=>$investimentos,'saldoAnterior'=>$saldoAnterior]);
    }

    public function store(Request $request)
    {

        $investimentos = new Investimento($request->all());
        $investimentos->save();

        return redirect('/');
    }

    public function delete(Request $request)
    {
        $investimento = Investimento::findOrFail($request->id_investimento);
        $investimento->delete();

        return redirect('/');

    }
}
