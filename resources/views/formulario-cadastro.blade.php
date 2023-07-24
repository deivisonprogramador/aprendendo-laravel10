
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/css/sweetalert.css')}}" rel="stylesheet" type="text/css"/>

    <title>Formulário de Cadastro</title>
</head>

<body>

<div class="container py-4">

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-6">

            <form id="excluirForm" name="" action="{{'cadastrar-candidato'}}" method="POST">
                        @csrf

                <fieldset>

                    <legend>Formulário de Cadastro</legend>
                <label for="nome">Nome</label>
                    <input class="form-control border-black" type="text" id="nome" name="nome" placeholder="Digite seu nome...">

                <label for="telefone">Telefone</label>
                    <input class="form-control border-black" type="text" id="telefone" name="telefone" placeholder="Digite o telefone...">


                <input class="btn btn-primary my-3" type="submit" value="Cadastrar">

                </fieldset>
            </form>
        </div>
    </div>

</div>

<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.jr')}}" ></script>

</script>

</body>

</html>


