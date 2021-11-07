<?php

include_once('conexao.php');


$sql = "SELECT *FROM tb_usuarios ORDER BY nome DESC";

$result = $conexao2->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <table class="table caption-top">
      <caption>Lista de cuidadores</caption>
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Endereço</th>
            <th scope="col">Numero</th>
          </tr>
        </thead>
      <tbody>
        
        <?php

            while($user_data = mysqli_fetch_assoc($result)){

                echo "<tr>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['endereço']."</td>";
                echo "<td>".$user_data['numero']."</td>";

            }

        ?>

      </tbody>
</table>
</body>
</html>