<?php

include_once('conexao.php');

$email= $_POST['txt_email'];
$senha= $_POST['txt_senha'];

$sql_logar=mysqli_query($conexao, " SELECT *FROM `tb_usuarios` WHERE `email`='$email' and `senha`='$senha' " );

if(mysqli_num_rows($sql_logar)!=0){

    header('location:cover/index.html');

}

else {


    echo " <script>


    alert('Ih, meteu essa? (SENHA INCORRETA)');
    window.location.href='login.html';


    </script> ";


}

?>