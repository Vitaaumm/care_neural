<?php

include_once('conexao.php');

$email= $_POST['txt_email'];
$senha= $_POST['txt_senha'];

$sql_logar=mysqli_query($conexao, " SELECT *FROM `tb_usuarios` WHERE `email`='$email' and `senha`='$senha' " );

if(mysqli_num_rows($sql_logar)!=0){

    header('location:care+/index.html');

}

else {


    header('location:auth_careacc_erro.html');



}

?>