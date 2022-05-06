<?php



include("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
  
<body class="bg-fundosite p-5 vh-100 font-sigmar ">
  <div class="container mt-5">
    <h1 class="text-light text-center my-4">Puzzle Brain</h1>
    <div class="text-light card border-0 bg-transparent">
      <div class="card-body borda-azul bg-azulclaro p-5">
        <p class="lead">
          <?php

            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            var_dump($dados);

            $query_pergunta = ("SELECT idPerguntas, Perguntas FROM perguntas ORDER BY RAND() LIMIT 1");
            $resultado_pergunta = mysqli_query($mysqli, $query_pergunta);
            $row_pergunta = mysqli_fetch_assoc($resultado_pergunta);
            echo $row_pergunta['Perguntas'];     
          ?>
        </p>
      </div>
      <form action="" method="POST">
      <div class="btn-group my-5 d-flex align-content-center justify-content-center gap-1" data-toggle="buttons">
          <label class="btn btn-primary bg-azulclaro borda-azul btn btn-outline-light btn-lg">
            <input type="radio" name="resp1" value="Alternativa1" onClick="ativaOpcao()" id="option1" autocomplete="off">
              <?php
                $query_resposta1 = ("SELECT Alternativa1 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta1 = mysqli_query($mysqli, $query_resposta1);
                $row_resposta1 = mysqli_fetch_assoc($resultado_resposta1);
                echo $row_resposta1['Alternativa1'];
              ?>
          </label>
          <label class="btn btn-primary bg-azulclaro borda-azul btn btn-outline-light btn-lg">
            <input type="radio" name="resp2" value="Alternativa2" onClick="ativaOpcao()" id="option2" autocomplete="off">
              <?php
                $query_resposta2 = ("SELECT Alternativa2 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta2 = mysqli_query($mysqli, $query_resposta2);
                $row_resposta2 = mysqli_fetch_assoc($resultado_resposta2);
                echo $row_resposta2['Alternativa2'];
              ?>
          </label>
          <label class="btn btn-primary bg-azulclaro borda-azul btn btn-outline-light btn-lg">
            <input type="radio" name="resp3" value="Alternativa3" onClick="ativaOpcao()" id="option3" autocomplete="off">
              <?php
                $query_resposta3 = ("SELECT Alternativa3 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta3 = mysqli_query($mysqli, $query_resposta3);
                $row_resposta3 = mysqli_fetch_assoc($resultado_resposta3);
                echo $row_resposta3['Alternativa3'];
              ?>
          </label>  
          <label class="btn btn-primary bg-azulclaro borda-azul btn btn-outline-light btn-lg">
            <input type="radio" name="resp4" value="Alternativa4" onClick="ativaOpcao()" id="option4" autocomplete="off">
              <?php
                $query_resposta4 = ("SELECT Alternativa4 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta4 = mysqli_query($mysqli, $query_resposta4);
                $row_resposta4 = mysqli_fetch_assoc($resultado_resposta4);
                echo $row_resposta4['Alternativa4'];
              ?>
          </label>      
        </div> 
        <div class="my-5 d-flex align-content-center justify-content-end gap-1">
          <button type="submit" value="enviar" name="valresposta" class="btn btn-outline-light btn-lg">Responder</button>

        
          <button class="btn btn-outline-light btn-lg"><a href="start.html">Menu</a></button>
          <button class="btn btn-outline-light btn-lg"><a href="logout.php">Sair</a></button>
        </div>
        <div class="my-5 d-flex align-content-center justify-content-end gap-1">
        </div>
      </form>
    </div>
  </div>
</body>
</html>