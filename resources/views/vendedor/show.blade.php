<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show - Vendedores</title>
</head>
<body>
    @include("nav")

    <h1>Vendedor {{$vendedor->id}} - {{$vendedor->nome}}</h1>
    <p><strong>ID:</strong> {{$vendedor->id}}</p>
    <p><strong>Nome:</strong> {{$vendedor->nome}}</p>
    <p><strong>E-mail:</strong> {{$vendedor->email}}</p>
    <p><strong>Senha:</strong> {{$vendedor->senha}}</p>
    <p><strong>Data de Nascimento:</strong> @php echo date_format(date_create($vendedor->dataNascimento), "d/m/Y") @endphp</p>
    <p>
        <strong>Data e hora do último login:</strong>
        @if(isset($vendedor->dataHoraUltimoLogin)){{$vendedor->dataHoraUltimoLogin}}@else Nenhum login realizado. @endif
    </p>
</body>
</html>