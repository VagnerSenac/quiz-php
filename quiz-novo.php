<?php include_once "mensagens.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>Cadastro de Quiz</title>
</head>

<body>
  <main class="menu container-fluid">

    <div class="titulo">
      <h1>CADASTRO DE QUIZ</h1><br>
    </div>
    <form class="align-items-center" action="inserir-quiz.php" method="POST" enctype="multipart/form-data">

      <div class="container text-left">
        <div class="row align-items-start">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"><b>Inserir a Pergunta:</b></label>
            <textarea class="form-control" name="pergunta" rows="3"></textarea>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Alternativa 1:</b></label>
                <input type="text" name="alternativa1"  class="form-control">
              </div>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Alternativa 2:</b></label>
                <input type="text" name="alternativa2"  class="form-control">
              </div>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Alternativa 3:</b></label>
                <input type="text" name="alternativa3" class="form-control">
              </div>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Alternativa 4:</b></label>
                <input type="text" name="alternativa4" class="form-control">
              </div>
            </div>
          </div>
          <div class="row align-items-start">
            <div class="col">
              <div class="mb-3">
                <label class="form-label"><b>Imagem:</b></label>
                <input type="file" name="foto" />

                <div class="container text-center">
                </div>

              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
    </form>
</body>

</html>