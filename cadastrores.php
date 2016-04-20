<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD- Shopper.com.br</title>
    </head>
    <body>
        <?php
        $con = mysqli_connect("localhost","root","","teste");
        if(!$con){
                exit('Erro de Conexão! ('. mysqli_connect_errno(). ')'. mysqli_connect_error());
        }
        $nome=$_POST['nome'];
        $idade=$_POST['idade'];
        $rg=$_POST['rg'];
        $endereco=$_POST['endereco'];
        $cep=$_POST['cep'];
        $usuario= $_POST['user'];
        $senha= $_POST['pass'];
        $sql = "INSERT INTO conta (usuario, senha, nome, idade, rg, endereco, cep) VALUES ('$usuario', '$senha', '$nome', '$idade', '$rg', '$endereco', '$cep')";
            
            if(!mysqli_query($con, $sql)) {
                die("Falha na criacao de nova conta".  mysqli_error($con));                
                
            }
        echo 'Conta Criada com sucesso!';
        mysqli_close($con);
        
        ?>
        <p><a href="index.php">Voltar ao Indíce</a>
    </body>
</html>
