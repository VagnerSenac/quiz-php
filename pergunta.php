<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 01</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main>
    <?php
        include "conexao.php";
        $sqlBusca = "select * from t_quiz";
        $todosOsQuiz = mysqli_query($conexao, $sqlBusca);

        $total = "SELECT COUNT(*) as total FROM t_quiz";
        $resultado = mysqli_query($conexao, $total);
        $row = mysqli_fetch_assoc($resultado);
        $total = $row['total'];

        $umQuiz = mysqli_fetch_assoc($todosOsQuiz);
        if (mysqli_num_rows($todosOsQuiz) > 0) {
            // Inicializa a posição do registro
            $posicao = 1;
           
        }

        //while ($umQuiz = mysqli_fetch_assoc($todosOsQuiz)){

            ?>
        <header class="titulo">
            <h1 class="quisp">QuisP</h1>
            <h2 class="numero"> <?php echo $posicao; ?>/<?php echo $total; ?></h2>
        </header>

        <div class="corpo">
            <p class="pergunta"><?php echo $umQuiz['pergunta']; ?></p>
            <img src="<?php echo $umQuiz['imagem']; ?>" class="imagem-capa">
            <div class="alternativas">
                <button>
                <?php echo $umQuiz['alternativa1']; ?>
                </button>
                <button>
                <?php echo $umQuiz['alternativa2']; ?>
                </button>
                <button>
                <?php echo $umQuiz['alternativa3']; ?>
                </button>
                <button>
                <?php echo $umQuiz['alternativa4']; ?>
                </button>
            </div>
        </div>

        <?php
        //}
        ?>
        <div class="rodapePrincipal">
            
        </div>

    </main>
    
</body>
</html>