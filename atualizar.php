<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD - Shopper.com.br</title>
    </head>
    <body>
        <h3>Atualizando Cadastro - Digite seu Usuário para alteras seus dados.</h3><hr>
        <form action="atualizarres.php" method="post">
             <p>
                Usuario
                <input type="text" name="usuarioAtt" required="required">
             </p><hr>
            <p>
                Nome:<br>
                <input type="text" name="newNome">
            </p>
            <p>
                Idade:<br>
                <input type="text" name="newIdade">
            </p>
            <p>
                RG:<br>
                <input type="text" name="newRg">
            </p>
            <p>
                Endereço:<br>
                <input type="text" name="newEndereco">
            </p>
            <p>
                CEP:<br>
                <input type="text" name="newCep">
            </p>
            <p>
                Nova Senha:<br>
                <input type="password" name="newPass" >
            </p>
            <br>
            <input type="submit" value="Atualizar">
            <input type="reset" value="Limpar">
        </form>
    </body>
</html>
