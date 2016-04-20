<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $con = mysqli_connect("localhost","root","","teste");
            if(!$con){
                    exit('Erro de Conexão! ('. mysqli_connect_errno(). ')'. mysqli_connect_error());
            }
            
            $user=$_POST['usuarioAtt'];
            $newnome=$_POST['newNome'];
            $newidade=$_POST['newIdade'];
            $newrg=$_POST['newRg'];
            $newendereco=$_POST['newEndereco'];
            $newcep=$_POST['newCep'];
            $newsenha=$_POST['newPass'];
            
            $query="UPDATE conta SET nome='$newnome', idade='$newidade', rg='$newrg', endereco='$newendereco', cep='$newcep', senha='$newsenha' WHERE usuario='$user'";
            if(mysqli_query($con, $query))
                echo 'Conta alterada com sucesso!';
            else
                echo 'Erro na atualização'.  mysqli_connect_error($con);
                  
        ?>
        <a href="index.php">Voltar ao indíce</a>
    </body>
</html>
