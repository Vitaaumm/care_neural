<?php


require_once('conexao.php');

$primeironome2 = $_POST['txt_pnome2'];
$segundonome2 = $_POST['txt_snome2'];
$usuario2 = $_POST['txt_user2'];
$senha2 = $_POST['txt_senha2'];
$email2 = $_POST['txt_email2'];
$endereco2 = $_POST['txt_endereco2'];
$complemento2 = $_POST['txt_complemento2'];
$cpf2 = $_POST['txt_cpf2'];
$rg2 = $_POST['txt_rg2'];
$cep2 = $_POST['txt_cep2'];
$numero2 = $_POST['txt_numero2'];
$bairro2 = $_POST['txt_bairro2'];
$cidade2 = $_POST['txt_cidade2'];


$sql_cadastro2=mysqli_query( $conexao , " INSERT INTO `tb_usuarios` (`nome`, `sobrenome`, `usuario`, `senha`, `email`, `endereço`, `lote`, `cpf`, `rg`, `cep`, `numero`, `bairro`, `cidade`) VALUES ('$primeironome2', '$segundonome2', '$usuario2', '$senha2', '$email2', '$endereco2', '$complemento2', '$cpf2', '$rg2', '$cep2', '$numero2', '$bairro2', '$cidade2') " );

if($sql_cadastro2==true){

    echo " <script>


    alert('Usuário cadastrado com sucesso!');
    window.location.href='auth_careacc.html';


    </script> ";



}

else{


    echo " <script>


    alert('Falha no cadastro');
    window.location.href='cad_careacc.html';


    </script> ";



}

?>