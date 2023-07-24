<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/css/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>
<body>


<button class="btn btn-primary my-3" type="submit" onclick="alert()">Alerta</button>
<br>
<br>

<input class="btn btn-primary my-3" type="submit" onclick="return alert()" value="Cadastrar">

<script>

    function alert(){
        Swal.fire({
            title: 'Tem certeza que deseja excluir?',
            text: "Você não será capaz de reverter isso!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText:'Cancelar',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, exclua!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Excluído!',
                    'Usuário excluído com sucesso!',
                    'success'
                )
            }
        })
    }
</script>

<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.js')}}" ></script>
<script src="{{ asset('assets/js/sweetalert1.js') }}"></script>
</body>
</html>
