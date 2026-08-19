<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Pratos</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <h1>Gerenciador de Pratos</h1>
        <a href="public/cadastrar_pratos">Novo Prato</a>
        <a href="public/cadastrar_usuarios">Novo Usuário</a>
        <br>
        <br>

        <form method ="POST">
            <label for="usuario">Filtro por Usuário</label>
            <SELECT id="usuario" name = "usuario">
                <option value="">Todos</option>

