<?php


require_once('conexao.php');

$primeironome = $_POST['txt_pnome'];
$segundonome = $_POST['txt_snome'];
$usuario = $_POST['txt_user'];
$senha = $_POST['txt_senha'];
$email = $_POST['txt_email'];
$endereco = $_POST['txt_endereco'];
$complemento = $_POST['txt_complemento'];
$cpf = $_POST['txt_cpf'];
$rg = $_POST['txt_rg'];
$cep = $_POST['txt_cep'];
$numero = $_POST['txt_numero'];
$bairro = $_POST['txt_bairro'];
$cidade = $_POST['txt_cidade'];


$sql_cadastro=mysqli_query( $conexao , " INSERT INTO `tb_usuarios` (`nome`, `sobrenome`, `usuario`, `senha`, `email`, `endereço`, `lote`, `cpf`, `rg`, `cep`, `numero`, `bairro`, `cidade`) VALUES ('$primeironome', '$segundonome', '$usuario', '$senha', '$email', '$endereco', '$complemento', '$cpf', '$rg', '$cep', '$numero', '$bairro', '$cidade') " );

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