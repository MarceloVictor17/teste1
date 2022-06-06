<?php
include("conexao.php");
include("verific_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/stylegeral.css">

  <style>
    .active{
      background-color: yellow !important;
    }

    label, input[type="radio"]:checked{
  background-color: #ff4040 !important;
}
  </style>
</head>
<body class="bg-fundosite p-5 vh-100 font-sigmar ">
  <div class="container mt-5">
    <h1 class="text-light text-center my-4">Puzzle Brain</h1>
    <form action="gameteste.php" method="POST">
    <div class="text-light card border-0 bg-transparent">
      <div class="card-body borda-azul bg-azulclaro p-5">
        <p class="lead">
          <?php
            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


            if(empty($dados['valresposta'])){ //IF das pontuação não funciona

            $query_validarpontuacao = "INSERT into pontuacao (Pontuacao, nome_usu) VALUE (0, '$_SESSION[usuario]')";
            mysqli_query($mysqli, $query_validarpontuacao);
          }

            $query_validarpontuacao2 = "SELECT MAX(id_pont) as id_pont FROM pontuacao";
            $result_validar_pontuacao2 = mysqli_query($mysqli, $query_validarpontuacao2);
            $row_validar_pontuacao2 = mysqli_fetch_assoc($result_validar_pontuacao2);

            var_dump($dados);

            $i= 1;

            if(!empty($dados['valresposta'])){
              $verific_pergunta = $_POST['id_pergunta'];
              $verific_resposta = $_POST['resp'];
              $i = (int)$_POST['valresposta'] + 1;
              echo $i;
              $pontos = 0;
              
              $query_val_pergunta = "SELECT idPerguntas, Alternativa_certa FROM perguntas WHERE idPerguntas = ". $verific_pergunta;
              $result_val_pergunta = mysqli_query($mysqli, $query_val_pergunta);
              $row_val_pergunta = mysqli_fetch_assoc($result_val_pergunta);
                if($row_val_pergunta['Alternativa_certa'] == $verific_resposta){
                  echo "Resposta certa <br><br>";
                  $query_pontos = ("SELECT Pontuacao, id_pont FROM pontuacao WHERE id_pont = '$row_validar_pontuacao2[id_pont]'");
                  $result_pontos = mysqli_query($mysqli, $query_pontos);
                  $row_pontos = mysqli_fetch_assoc($result_pontos);

                  $row_pontos['Pontuacao'] = $row_pontos['Pontuacao'] + 10;

                  $pontos_att = "UPDATE pontuacao set Pontuacao = '$row_pontos[Pontuacao]' WHERE id_pont = '$row_validar_pontuacao2[id_pont]'";
                  $query_pontos_att = mysqli_query($mysqli, $pontos_att);
                    if($query_pontos_att){
                      echo "sucesso pontos";
                    }else{
                      echo "erro pontos";
                    }
                }else{
                  echo "Resposta errada <br><br>";
                }}

            /*if(!empty($dados['valresposta'])){
              $query_val_pergunta = "SELECT Alternativa_certa FROM perguntas WHERE Perguntas LIKE '%$Perguntas%'";
              $result_val_pergunta = mysqli_query($mysqli, $query_val_pergunta);
              $row_val_pergunta = mysqli_fetch_assoc($result_val_pergunta);

              if($row_val_pergunta['Alternativa_certa'] == $dados['resp1']){
                $pontos = $pontos + 10; // $pontos += 10;
                echo 'entrei na resposta';
              }else{
                echo 'não entrei na resposta';
              }
            }*/

            $query_pergunta = ("SELECT idPerguntas, Perguntas FROM perguntas ORDER BY RAND() LIMIT 1");
            $resultado_pergunta = mysqli_query($mysqli, $query_pergunta);
            $row_pergunta = mysqli_fetch_assoc($resultado_pergunta);
            echo $row_pergunta['Perguntas'];
            echo "<input type='hidden' name='id_pergunta' value='$row_pergunta[idPerguntas]'>";
          ?>
        </p>
      </div>
        <div class="btn-group my-5 d-flex align-content-center justify-content-center gap-1" data-toggle="buttons">
          <label class="btn btn-primary bg-azulclaro borda-azul btn-outline-light btn-lg">
            <input type="radio" name="resp" value="Alternativa1" onclick="ativaOpcao()" id="option1" autocomplete="off" checked>
              <?php
                $query_resposta1 = ("SELECT Alternativa1 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta1 = mysqli_query($mysqli, $query_resposta1);
                $row_resposta1 = mysqli_fetch_assoc($resultado_resposta1);
                echo $row_resposta1['Alternativa1'];
              ?>
          </label>
          <label class="btn btn-primary bg-azulclaro borda-azul btn btn-outline-light btn-lg">
            <input type="radio" name="resp" value="Alternativa2" onClick="ativaOpcao()" id="option2" autocomplete="off">
              <?php
                $query_resposta2 = ("SELECT Alternativa2 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta2 = mysqli_query($mysqli, $query_resposta2);
                $row_resposta2 = mysqli_fetch_assoc($resultado_resposta2);
                echo $row_resposta2['Alternativa2'];
              ?>
          </label>
          <label class="btn btn-primary bg-azulclaro borda-azul btn btn-outline-light btn-lg">
            <input type="radio" name="resp" value="Alternativa3" onClick="ativaOpcao()" id="option3" autocomplete="off">
              <?php
                $query_resposta3 = ("SELECT Alternativa3 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta3 = mysqli_query($mysqli, $query_resposta3);
                $row_resposta3 = mysqli_fetch_assoc($resultado_resposta3);
                echo $row_resposta3['Alternativa3'];
              ?>
          </label>  
          <label class="btn btn-primary bg-azulclaro borda-azul btn btn-outline-light btn-lg">
            <input type="radio" name="resp" value="Alternativa4" onClick="ativaOpcao()" id="option4" autocomplete="off">
              <?php
                $query_resposta4 = ("SELECT Alternativa4 FROM perguntas WHERE idPerguntas = ". $row_pergunta['idPerguntas']);
                $resultado_resposta4 = mysqli_query($mysqli, $query_resposta4);
                $row_resposta4 = mysqli_fetch_assoc($resultado_resposta4);
                echo $row_resposta4['Alternativa4'];
              ?>
          </label>      
        </div> 
        <div class="my-5 d-flex align-content-center justify-content-end gap-1">
          <button type="submit" value="<?php echo $i; ?>" name="valresposta" class="btn btn-outline-light btn-lg">Responder</button>

        
          <button class="btn btn-outline-light btn-lg"><a href="start.html">Menu</a></button>
          <button class="btn btn-outline-light btn-lg"><a href="logout.php">Sair</a></button>
        </div>
      </form>
    </div>
  </div>
</body>

<?php 

if($i >= 5){
  header("location:fimdegame.php");
}

  ?>

<script>
  function ativaOpcao(){
    var n1 = document.querySelector("resp");
    if(n1.checked == true){
    n1.className("active");
    console.log("deu certo");
  }}

  const btn = document.querySelector('#btn');        
        const radioButtons = document.querySelectorAll('input[name="resp"]');
        btn.addEventListener("click"), () => {
            let selectedSize;
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
                    selectedSize = radioButton.value;
                    break;
                }
            }}

</script>
</html>