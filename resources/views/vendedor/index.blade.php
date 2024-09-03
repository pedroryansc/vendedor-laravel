<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Vendedores</title>
</head>
<body>
    @include("nav")

    <h1>Vendedores</h1>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            @foreach($vendedores as $vendedor)
                <tr>
                    <td>{{$vendedor->id}}</td>
                    <td>{{$vendedor->nome}}</td>
                    <td>{{$vendedor->email}}</td>
                    <td><a href="{{route('vendedor.show', $vendedor->id)}}">Detalhes</a></td>
                    <td><a href="{{route('vendedor.edit', $vendedor->id)}}">Editar</a></td>
                    <td>
                        <form name="form_delete_{{$vendedor->id}}" action="{{route('vendedor.destroy', $vendedor->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <a href="#" onclick="confirmDelete('form_delete_{{$vendedor->id}}');">Excluir</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
<script>
    function confirmDelete(formName){
        if(confirm("Tem certeza que deseja excluir este registro?"))
            document.forms[formName].submit();
    }
</script>