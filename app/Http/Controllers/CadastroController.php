<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Candidato;

class CadastroController extends Controller
{
        function cadastrar(Request $request){

            $candidato=[
                'nome' =>$request->nome,
                'telefone' =>$request-> telefone
            ];
            Candidato:: create($candidato);

            echo "Candidato criado com sucesso!!";
        }

        function show_form(){
            return view('formulario-cadastro');
        }



        function listar(){
            $properties= Candidato::all();
            return view('inscritos')->with('properties', $properties);
        }


        function exibir($id_do_candidato){
           $candidato = Candidato::findOrFail ($id_do_candidato);
            echo $candidato->nome;
            echo "<br/>";
            echo $candidato->telefone;
        }



        function editar(Candidato $candidato){
           // $candidato = Candidato::findOrFail ($id_do_candidato);
            return view('editar_candidato',['candidato' => $candidato]);
        }



        function update(Request $informacoes,  $id_do_candidato){
            $candidato = Candidato::findOrFail ($id_do_candidato);
            $candidato->nome = $informacoes->nome_candidato;
            $candidato->telefone =$informacoes->telefone_candidato;
            $candidato->save();
            echo "Candidato atualizado com sucesso!";
        }


        function delete($id_do_candidato){
            $candidato= Candidato::findOrFail($id_do_candidato);
            $candidato->delete();
            return redirect()->route('listar-inscritos');

        }




}
