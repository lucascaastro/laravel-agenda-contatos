<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contatos</title>
</head>
<body>
  <a href="/logout"> Sair</a><br><br>
  <h1>Crie um contato</h1>
  <form action="/contacts/store" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome do Item">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Telefone">
    <button type="submit">Adicionar</button>
  </form>
  <hr>
</body>
</html>
