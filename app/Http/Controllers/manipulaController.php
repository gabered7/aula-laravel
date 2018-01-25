<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manipulaController extends Controller
{
  public function nomeDaFuncao()
      {
      	return view('form');
      }
  public function recebeParametro($mensagem){
            dd($mensagem);
    }
  public function add(Request $request)
  {
    dd($request);
    $nome $request-> input("firstname");
    $sobrenome $request -> input("lastname");
    dd($nome,$sobrenome);
  }
}
