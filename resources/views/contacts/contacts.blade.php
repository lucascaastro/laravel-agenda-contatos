<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contatos</title>
</head>
<body>
  <h1>Meus Contatos</h1>
  @foreach($contacts as $contact)
  <p>{{ $contact->name }}</p>
  <p>{{ $contact->email }}</p>
  <p>{{ $contact->phone }}</p>
  @endforeach

  <a href="contacts/create">Crie um usuário</a>
</body>
</html>
