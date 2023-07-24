<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <title>Candidatos Inscritos</title>
</head>
<body>

<div class="container py-4">

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-8">

<a href="{{ route('formulario-cadastro') }}" class="btn btn-success">Cadastrar Novo</a>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col" class="text-center">Ação</th>
        </tr>
    </thead>


    @foreach ($properties as $dados)

        <tbody>
            <tr>
                <th scope="row">{{$dados->id}}</th>
                <td>{{$dados->nome}}</td>
                <td>{{$dados->telefone}}</td>
                <td>
          <div class="row">
              <div class="col col-6">
                    <a href="{{ route('editar-candidato',['id_do_candidato'=>$dados->id])}}" class="btn btn-primary">Editar</a>
              </div>

              <div class="col col-6">
                  <input type="button" id="btnExcluir" value="Excluir Usuário" data-url="{{ route('excluir-candidato', $usuario->id) }}">
              </div>


           </div>

                </td>
            </tr>
        </tbody>
    @endforeach
</table>

        </div>
    </div>

</div>

<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
