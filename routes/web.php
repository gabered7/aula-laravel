<?php

Route::get('/teste/{mensagem}', "manipulaController@recebeParametro");

Route::get('/form', "manipulaController@nomeDaFuncao");
Route::post('/form', "manipulaController@nomeDaFuncao")->name('nome');


Route::get('/contato', function () {
    return view('paste.novo')->with("name","Gabriel");
});


Route::get('/dados', function () {
  $nomePai='Klemer';
  return view('paste.dados',['name'=>'Fulano', 'idade'=>12, 'time'=>'Nova Iguaçu', 'pai'=>$nomePai
  ]);
});

Route::get('/lista', function () {
	$lista=['Estudar','Assistir Netflix','Ir na academia',
	];
    return view('paste.lista')->with('tarefas',$lista);
});


Route::get('/string', function(){
    return "Olá EJCM!!!";
});

Route::get('/servicos', function () {
    return "O serviço do Fulano é muito bom.<br><br> Gostou?<a href='".url('/contato')."'> Esse é o contato dele.</a>";
});

Route::get('identidade/{id}', function ($id) {
    return "O serviço do ".$id." é muito bom.<br><br> Gostou?<a href='".url('/contato')."'> Esse é o contato dele.</a>";
});

Route::get('identidade-telefone/{id}/{telefone}', function ($id,$telefone) {
    return "O serviço do ".$id." é muito bom.<br><br> Gostou?<a href='".url('/contato')."'> Esse é o telefone dele: ".$telefone.".</a>";
});

Route::get('quatro-parametros/{nome}/{cpf}/{rg}/{cep}', function ($nome,$cpf,$rg,$cep) {
    return "O sujeito chamado: ".$nome.", tem o cpf de numero ".$cpf." completamente sujo, esqueceu de renovar o rg de número: ".$rg.", além disso o seu cep é: ".$cep.", um lugar merda.
    <br><br> Gostou mesmo assim?<a href='".url('/contato')."'></a>";
});
Route:: get('quatro-parametros/{nome}', function ($nome) {
    return "O sujeito chamado: ".$nome.".";
});
Route:: get('quatro-parametros/{nome}/{cpf}', function ($nome,$cpf) {
    return "O sujeito chamado: ".$nome.", tem o cpf de numero ".$cpf." completamente sujo.";
});
Route:: get('quatro-parametros/{nome}/{cpf}/{rg}', function ($nome,$cpf,$rg) {
    return "O sujeito chamado: ".$nome.", tem o cpf de numero ".$cpf." completamente sujo, esqueceu de renovar o rg de número: ".$rg.".";
});
