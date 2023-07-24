<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CadastroController;
use App\Models\Candidato;


Route::get('/', function () {
    return view('formulario-cadastro');
});

Route::get('formulario-cadastro',[CadastroController::class,'show_form'])->name('formulario-cadastro');


//Essa rota chama o método que faz o cadastro no banco de dados.
Route::post('/cadastrar-candidato', [CadastroController::class,'cadastrar'])->name('cadastrar-candidato');

//Essa rota chama o método que exibe o candidato na página.
Route::get('/exibir-candidato/{id_do_candidato}', [CadastroController::class,'exibir'])->name('exibir-candidato');




//Essa rota chama o método que edita(alterar) as informações do candidato.
Route::get('/editar-candidato/{id_do_candidato}', [CadastroController::class,'editar'])->name('editar-candidato');


//Essa rota além de enviar as informações do formulário ela também vai atualizar as informações do candidato.
//Por isso usamos o método put.
Route::put('/atualizar-candidato/{id_do_candidato}',[CadastroController::class,'update'])->name('atualizar-candidato');

//Essa rota servirá para deletar candidato cadastrado.
Route::get('/excluir-candidato/{id_do_candidato}',[CadastroController::class,'delete'])->name('excluir-candidato');



Route::get('/listagem-inscritos',[CadastroController::class,'listar'])->name('listar-inscritos');


Route::get('/teste',function () {
    return view('teste');
});
