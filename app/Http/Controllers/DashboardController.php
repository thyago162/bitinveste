<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\Saldo;
use App\Charts\Lucro;
use App\Investimento;

class DashboardController extends Controller
{
    public function index()
    {
        $investimentos = Investimento::all();
        $resumo = Investimento::get()->last();

        $data = array();
        $saldos = array();
        $lucroOuPerda = array();
        $saldo = new Saldo;
        $lucro = new Lucro;

        foreach($investimentos as $investimento)
        {
            if($investimento->saldo_anterior != 0){

                $cal = (($investimento->saldo_atual / $investimento->saldo_anterior) -1) * 100;
            }
            else
            {
                $cal = 0;
            }
            
            array_push($data,date('d/m/y',strtotime($investimento->data)));
            array_push($saldos,$investimento->saldo_atual);
            array_push($lucroOuPerda,round($cal,2));
        }

        $saldo->labels($data);
        $saldo->dataset('Saldo','line',$saldos);

        $lucro->labels($data);
        $lucro->dataset('Lucro','line',$lucroOuPerda);


        return view('app.src.dashboard',compact('saldo','lucro','resumo'));
    }
}
