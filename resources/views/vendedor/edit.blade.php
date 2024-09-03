<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Vendedores</title>
</head>
<body>
    @include("nav")

    <h1>Edição de Vendedor</h1>
    
    <form action="{{route('vendedor.update', $vendedor->id)}}" method="post">
        @method("PUT")
        @include("vendedor.form")
    </form>
</body>
</html>