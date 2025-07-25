<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/stylesCadastro.css">
</head>
<body>
    <main>
        <div class="container">
            <h1>Cadastro do cliente</h1>
            <form method="post" id="form">
                <div class="formulario">
                    <label for="nome">Nome</label>
                    <input type="text" placeholder="Digite seu nome" id="nome" name="nomeCliente">

                    <label for="email">Email</label>
                    <input type="email" name="emailCliente" id="email" placeholder="Digite seu email">

                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefoneCliente" id="telefone" placeholder="Digite seu telefone">

                    <label for="senha">Senha </label>
                     <input type="password" placeholder="Digite sua senha" name="senha">
                </div>
            </form>
            <button type="submit" id="cadastro">Cadastrar</button>
        </div>
    </main>
</body>
</html>