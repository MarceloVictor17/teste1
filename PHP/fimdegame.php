<?php
include("conexao.php");
include("verific_login.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final - Puzzle Brain</title>
    <link rel="stylesheet" href="..\CSS\stylegeral.css">
    <link rel="icon" type="image/png" href="..\Midia\Img\puzzle-removebg-preview.png"/>
</head>
<body>

    <audio preload src="..\Midia\Music\aplausos.mp3" id="somAplauso"></audio>
    <body>
    <h1>
        Você chegou ao fim dessa partida! Para tentar novamente, clique no botão abaixo:
    </h1>
     <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-6"> <a href="index2.html" class="btn btn-sm animated-button thar-one">Tentar Novamente</a> </div>
        </h1>
    <!--<p>
        <?php
        $query_id_pont = mysqli_query($mysqli, "SELECT MAX(id_pont) as id_pont FROM pontuacao");
        $row_id_pont = mysqli_fetch_assoc($query_id_pont);
        $query_pontos = "SELECT * FROM pontuacao WHERE id_pont = ". $row_id_pont['id_pont'];
        $result_pontos = mysqli_query($mysqli, $query_pontos);
        $row_pontos = mysqli_fetch_assoc($result_pontos);
        
        echo "Parabéns: ". $_SESSION['usuario'];
        echo "<br><br>Sua pontuação foi de: ". $row_pontos['Pontuacao'];
        
        ?>
    </p>-->

    <script src="..\JS\aplausos.js"></script>
</body>
</html>