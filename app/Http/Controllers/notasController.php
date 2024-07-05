<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\notasModel;

class notasController extends Controller
{
    public function index(){

        return view("notas.index");
    }


public function store(Request $request){

    $data = $request->all();

    $nome = $data["nome"];
    $media = $data["media"];

    $notas = new notasModel();
    $notas -> nome = $nome;
    $notas -> media = $media;

    $notas->save();

    return redirect("/notas");


}

public function show(Request $request) {

    $showImc = notasModel::orderBy('id','asc')->get();

    return view('notas.show')->with('showImc',$showImc);
}

}