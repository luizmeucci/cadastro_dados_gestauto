<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dados;

class DadosController extends Controller
{
    public function create()
    {
        return view('dados.create');
    }
    public function store(Request $request)
    {
        //---LINHAS UTILIZADAS PARA DEBUG---
        //dd($request->all());
        //dd($_FILES);
        //die();
        if ($request->hasFile('curriculo')) {

            $path = $request->file('curriculo')->path();
            $contents = file_get_contents($path);
            $blob =  base64_encode($contents);
        } else {
            return "Necessario enviar um arquivo. <a href='novo'> voltar</a>";
        }


        Dados::create([
            'nome' => $request->nome,
            'nascimento' => $request->nascimento,
            'email' => $request->email,
            'curriculo' => $blob


        ]);

        return "Cadastro criado com sucesso! <a href='novo'> voltar</a>";
    }
}
