<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";
$sql = "select *from usuarios where profissao like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao, $sql);
$registro = mysqli_num_rows($consulta);  #quantas linhas existem no banco de dados



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Sistema de cadastro</title>
</head>

<body>
  <div class="conteiner">
    <nav>
      <ul class="menu">
        <a href="index.php">
          <li>
            Cadastro
          </li>
        </a>
        <a href="consultas.php">
          <li>
            Consultas
          </li>
        </a>
      </ul>
    </nav>
    <section>
      <h1>Consultas</h1>
      <hr><br><br>

      <form action="" method="get">
        Filtrar por profissao:<input type="text" name="filtro" class="campo" required autofocus>
        <input type="submit" value="pesquisar" class="botao">
      </form>

      <?php

      echo "Resultado da pesquisa com a palavra <strong>$filtro</strong> ";
      echo "$registro registro encontrados";
      echo "<br><br>";
      while ($exibir = mysqli_fetch_array($consulta)) {
        $codigo = $exibir[0];
        $nome = $exibir[1];
        $email = $exibir[2];
        $profissao = $exibir[3];

        echo "<article>";

        echo "$codigo<br>";
        echo "$nome<br>";
        echo "$email<br>";
        echo "$profissao<br><br>";

        echo "</article>";
      }

      mysqli_close($conexao);
      ?>

    </section><br>
  </div>
</body>

</html>
