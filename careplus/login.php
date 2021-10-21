<?php

include_once('conexao.php');

$usuario= $_POST['txt_user'];
$senha= $_POST['txt_senha'];

$sql_logar=mysqli_query($conexao, " SELECT *FROM `tb_usuarios` WHERE `nome de usuario`='$usuario' and `senha`='$senha' " );

if(mysqli_num_rows($sql_logar)!=0){

    header('location:cover/index.html');

}

else {


    echo " <script>


    alert('Usuário não registrado no sistema ou senha incorreta');
    window.location.href='login.html';


    </script> ";


}

?>