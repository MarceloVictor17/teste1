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
    <title>Document</title>
</head>
<body>

    <audio preload src="..\Midia\Music\aplausos.mp3" id="somAplauso"></audio>
    <h1>O jogo foi finalizado!!</h1>
    <p>
        <?php
        $query_id_pont = mysqli_query($mysqli, "SELECT MAX(id_pont) as id_pont FROM pontuacao");
        $row_id_pont = mysqli_fetch_assoc($query_id_pont);
        $query_pontos = "SELECT * FROM pontuacao WHERE id_pont = ". $row_id_pont['id_pont'];
        $result_pontos = mysqli_query($mysqli, $query_pontos);
        $row_pontos = mysqli_fetch_assoc($result_pontos);
        
        echo "Parabéns: ". $_SESSION['usuario'];
        echo "<br><br>Sua pontuação foi de: ". $row_pontos['Pontuacao'];

        
        
        
        
        
        ?>
    </p>

    <script src="..\JS\aplausos.js"></script>
</body>
</html>