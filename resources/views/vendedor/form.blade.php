@csrf
Nome: <input type="text" size="30" name="nome" value="@if(isset($vendedor->nome)){{$vendedor->nome}}@endif"><br>
<br>
E-mail: <input type="text" size="30" name="email" value="@if(isset($vendedor->email)){{$vendedor->email}}@endif"><br>
<br>
Senha: <input type="text" size="30" name="senha" value="@if(isset($vendedor->senha)){{$vendedor->senha}}@endif"><br>
<br>
Data de Nascimento:
<input type="date" name="dataNascimento" value="@if(isset($vendedor->dataNascimento)){{$vendedor->dataNascimento}}@endif"><br>
<br>
<button type="submit" name="acao" value="salvar">@if(isset($vendedor->id)) Atualizar @else Salvar @endif</button>