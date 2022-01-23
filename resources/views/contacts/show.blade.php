<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <h1>Detalhes do Contato</h1>

    <h2>Nome: {{ $contacts->name }}</h2>
    <h4>Email: {{ $contacts->email }}</h4>
    <p>Endereço: {{ $contacts->phone }}</p>

    <a href="/contacts/edit/{{ $contacts->id }}">Editar</a><br><br>

    <a href="/contacts/destroy/{{ $contacts->id }}">Deletar</a> <br><br>
</body>
</html>
