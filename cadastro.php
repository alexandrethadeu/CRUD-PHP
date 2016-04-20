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
        <form action="cadastrores.php" method="post" onsubmit="return testaSenha()">
            <h3><b> Insira seus Dados!</b></h3><hr>
            <p>
             <p>
                 Nome:<br>
                <input type="text" name="nome"/>    
            </p>
             <p>
                 Idade:<br>
                <input type="text" name="idade"/>
  
            </p>
             <p>
                 RG:<br>
                <input type="text" name="rg"/>    
            </p>
             <p>
                 Endereco:<br>
                <input type="text" name="endereco"/>    
            </p>
            CEP:<br>
                <input type="text" name="cep"/>    
            </p>
            <hr>
            <p>
                Usuario:<br>
                <input type="text" name="user"/>    
            </p>
            <p>
                Senha:<br>
                <input type="password" name="pass" id="s1" required="requiered"/>
            </p>
            <p>
                Confirme sua senha<br>
                <input type="password" name="txtpasstmp" id="s2" required="required"/>
            </p>
            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </p>
            <h3 id="msg"></h3>
        </form>
        
        <script>
            function testaSenha(){
                if(document.getElementyById("s1").value !== document.getElementById("s2").value){
                    document.getElementyByID("msg").innerHTML= "Senhas Distintas";
                    return false;
                }
            }
        </script>
    </body>
</html>
