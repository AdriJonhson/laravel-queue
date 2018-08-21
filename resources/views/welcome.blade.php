<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        @if(session()->has('success'))
            <b>{{ session()->get('success') }}</b>
        @endif
        <form action="{{ route('email') }}" method="POST">
            @csrf
            <h3>Enviar E-mail</h3>
            <div class="form-group">
                <label>De: </label>
                <input type="email" name="from">
            </div>
            <br>

            <div class="form-group">
                <labe>Para: </labe>
                <input type="email" name="to">
            </div>
            <br>

            <div class="form-group">
                <label>Conteúdo: </label>
                <textarea name="content" cols="30" rows="10"></textarea>
            </div>
            <br>

            <button>Enviar</button>

            <a href="{{ route('write') }}">Gerar Arquivos</a>
            <a href="{{ route('user.create') }}">Cadastrar Usuário</a>
        </form>
    </body>
</html>
