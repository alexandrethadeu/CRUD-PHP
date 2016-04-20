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
        
        $user= $_POST ['txtuser'];
        $pass= $_POST ['txtpass'];
        $sql="SELECT nome, cep, endereco, rg, idade FROM conta WHERE usuario=? AND senha=?";
        
         $stm = $con -> prepare ($sql);
         $stm ->bind_param('ss', $user, $pass);
         $stm -> execute();
         $stm-> bind_result ($nome, $cep, $endereco, $rg, $idade);
         
         print '<table border="1">';
         
                while($stm->fetch()){
                    print '<tr> Nome - CEP - Endereço - RG - Idade';
                        print '<td>'.$nome.'</td>';
                        print '<td>'.$cep.'</td>';
                        print '<td>'.$endereco.'</td>';
                        print '<td>'.$rg.'</td>';
                        print '<td>'.$idade.'</td>';
                    print '</tr>';
                }
        print '</table>';        
            
            $stm->close();
                
        ?>
        <br>
        <a href="index.php">Voltar</a>
    </body>
</html>
