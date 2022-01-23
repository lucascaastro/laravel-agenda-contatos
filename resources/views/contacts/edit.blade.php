<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contatos</title>
</head>

<body>
  <h1>Editar Contato</h1>

    <a href="/contacts/destroy/{{ $contacts->id }}">Deletar</a> <br><br>

  <form action="/contacts/update/{{ $contacts->id }}" method="POST">
    @csrf
    <input name="name" placeholder="Nome" value="{{ $contacts->name }}"> <br> <br>

    <input name="email" placeholder="email" value="{{ $contacts->email }}"> <br> <br>

    <input name="phone" placeholder="Preço" value="{{ $contacts->phone }}"> <br> <br>

    <button type="submit">Enviar</button> <br>
  </form>
</body>

</html>
