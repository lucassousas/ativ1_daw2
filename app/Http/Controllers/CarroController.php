<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function index(){
        $carro = new Carro();
        $carros = Carro::All();
        return view("carro.index", [
            "carro" => $carro,
            "carros" => $carros
        ]);
    }

    public function salvar (Request $request){
        if($request->get("id") == ""){
            $carro = new Carro();
        }else{
            $carro = Carro::find($request->get("id"));
        }
        $carro = new Carro();
        $carro->marca = $request->get("marca");
        $carro->modelo = $request->get("modelo");
        $carro->placa = $request->get("placa");
        $carro->cor = $request->get("cor");
        $carro->ano = $request->get("ano");
        $carro->save();
        return redirect("/carro");
    }

    public function excluir ($id){
        Carro::Destroy($id);
        return redirect("/carro");
    }

    public function editar ($id){
        $carro = Carro::find($id);
        $carros = Carro::All();
        return view("carro.index", [
            "carro" => $carro,
            "carros" => $carros
        ]);
    }
}
