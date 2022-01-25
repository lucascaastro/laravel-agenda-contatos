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

    <h2>Nome: {{ $contact->name }}</h2>
    <h4>Email: {{ $contact->email }}</h4>
    <p>Endereço: {{ $contact->phone }}</p>

    <a href="/contacts/edit/{{ $contact->id }}">Editar</a><br><br>

    <a href="/contacts/delete/{{ $contact->id }}">Deletar</a> <br><br>
</body>
</html>
