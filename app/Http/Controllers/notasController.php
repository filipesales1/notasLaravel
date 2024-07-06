<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\notasModel;


class notasController extends Controller
{
    public function index(){
        $data = ['resultado' => ""] ;

        return view("notas.index")->with('data', $data);
    }


public function store(Request $request){

    $data = $request->all();

    $nome = $data["nome"];
    $media = $data["media"];

    $notas = new notasModel();
    $notas -> nome = $nome;
    $notas -> media = $media;

    $notas->save();

    $data["resultado"] = $this->calculator($media);

    return redirect()->route('notas.index',$data);


}

public function show(Request $request) {

    $showNotas = notasModel::orderBy('id','asc')->get();

    return view('notas.show')->with('showNotas',$showNotas);
}

public function update(Request $request, $id){
    $updateNotas = notasModel::findOrFail($id);

    $updateNotas->nome = $request->novo_nome;
    $updateNotas->media = $request->novo_media;

    $updateNotas->save();

    return redirect('/notas/show');
}

public function destroy(Request $request, $id){

    $deleteNotas = notasModel::findOrFail($id);
    $deleteNotas -> delete();

    return redirect('/notas/show');
}

public function calculator($nota){
    if ($nota >= 6) {
        return "aprovado";
    } else {
        return "reprovado";
    }
}

}