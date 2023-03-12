<?php
include "conexao.php";
$pergunta = $_POST['pergunta'];
$alternativa1 = $_POST['alternativa1']; 
$alternativa2 = $_POST['alternativa2'];
$alternativa3 = $_POST['alternativa3'];
$alternativa4 = $_POST['alternativa4'];
$foto = $_POST['fundo'];

$sqlGravar = "insert into t_quiz(pergunta, alternativa1, alternativa2, alternativa3, alternativa4, imagem) values('$pergunta', '$alternativa1', '$alternativa2', '$alternativa3', '$alternativa4', '$foto')";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
header("location: quiz-novo.php?msg=Cadastro realizado com sucesso!");




?>

