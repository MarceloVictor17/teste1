<?php
include("conexao.php");
include("verific_login.php");
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ranking - Puzzle Brain</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- 
  1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="..\CSS\stylegeral.css">
  <link rel="icon" type="image/png" href="..\Midia\Img\puzzle-removebg-preview.png"/>

</head>

<body class="bg-fundosite font-sigmar">
  <div class="my-3 container tabela-ranking">
    <h1 class="my-3 pb-10 text-center text-light">Puzzle Brain</h1>
      <table class= "mt-4 text-center table table-bordered border-primary text-light">

        <thead>
          <tr style="font-size: 20px;">
            <th scope="col">Colocação</th>
            <th scope="col">Nome</th>
            <th scope="col">Pontuação</th>
          </tr>
          
        </thead>

        <tbody style="font-size: 19px;">
            <?php
                $rank = mysqli_query($mysqli, "SELECT nome_usu, Pontuacao FROM pontuacao ORDER BY Pontuacao DESC");
                $i = 1;
                while($row_rank = mysqli_fetch_assoc($rank) AND $i < 11){
                    echo "<tr><th scope='row'>".$i."º<td>".$row_rank['nome_usu']."</td><td>".$row_rank['Pontuacao']."</td>";
                    $i++;
                }
            ?>
        </tbody>
      </table>

        <div class="mt-4 d-flex align-content-center justify-content-end gap-1">
          <button type="button" onclick="return confirm('Quer voltar para o menu?')" id="menuButton" class="btn btn-outline-light btn-lg bg-azulclaro borda-azul"><a href="..\HTML\start.html">Menu</a></button>
          <button type="button" onclick="return confirm('Quer deslogar de sua conta?')" id="sairButton" class="btn btn-outline-light btn-lg bg-azulclaro borda-azul"><a href="..\PHP\logout.php">Sair</a></button>
        </div>
  </div>

  <script src="..\JS\teste.js"></script>
</body>
</html>