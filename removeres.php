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
        
        $nome=$_POST['txtusuarioRemove'];
        $pass=$_POST['txtpassRemove'];
        
        $sql="DELETE FROM conta WHERE usuario='$nome' AND senha='$pass'";
        
        $res= mysqli_query($con, $sql);
        if($res)
            echo 'Conta deletada com Sucesso!';
        else
            echo 'Conta não Encontrada.';
        mysqli_close($con);
        ?>
        <br>
        <a href="index.php">Voltar</a>
    </body>
</html>
