<?php


require_once('conexao.php');

$primeironome2 = $_POST['txt_pnome2'];


$sql_cadastro=mysqli_query( $conexao , " INSERT INTO `tb_cuidador` (`primeiro nome`) VALUES ('$primeironome2') " );

if($sql_cadastro==true){

    echo " <script>


    alert('Usuário cadastrado com sucesso!');
    window.location.href='login.html';


    </script> ";



}

else{


    echo " <script>


    alert('Falha no cadastro');
    window.location.href='cadastro_parceiro.html';


    </script> ";



}

?>