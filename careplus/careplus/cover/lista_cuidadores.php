<?php

include_once('conexao.php');

$sql_consulta=mysqli_query( $conexao , "SELECT *FROM tb_usuarios " );

while( $dados=mysqli_fetch_array($sql_consulta) ) { ?>

<td> <?= $dados[1] ?> </td>

<?php } ?>

