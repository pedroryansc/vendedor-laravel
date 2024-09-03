<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Vendedores</title>
</head>
<body>
    @include("nav")

    <h1>Cadastro de Vendedor</h1>

    <form action="{{route('vendedor.store')}}" method="post">
        @include("vendedor.form")
    </form>
</body>
</html>