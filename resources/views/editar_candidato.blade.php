
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <title>Editar Candidato</title>

</head>

<body>


<div class="container py-4">

    <div class="d-flex justify-content-center align-items-center">
            <div class="col-6">
                <form name="" action="/atualizar-candidato/{{$candidato->id}}" method="POST">
                        @csrf
                        @method("PUT") <!-- Aqui usamos uma ferramenta do Laravel, que permite mudar o método.-->

                    <fieldset>

                        <legend>Editar Candidato</legend>

                    <label for="nome">Nome</label>
                        <input class="form-control border-black" type="text" id="nome_candidato" name="nome_candidato"
                               placeholder="Digite seu nome..." value="{{$candidato-> nome}}">

                    <label for="telefone">Telefone</label>
                        <input class="form-control border-black" type="text" id="telefone_candidato" name="telefone_candidato"
                               placeholder="Digite o telefone..." value = "{{$candidato->telefone}}">

                        <input class="btn btn-primary my-3" type="submit" value="Alterar">

                    </fieldset>
                </form>
            </div>
    </div>

</div>


<script src="{{asset('assets/js/bootstrap.js')}}"></script>
</body>

</html>


