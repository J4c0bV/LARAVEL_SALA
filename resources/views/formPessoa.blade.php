<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/pessoa" method="post">
        {{ csrf_field() }} 
        <label for="nomePessoa">Nome:</label>
        <input type="text" id="nomePessoa" name="nome">
        <label for="senhaPessoa">Celular:</label>
        <input type="cel" id="senhaPessoa" name="cel">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>