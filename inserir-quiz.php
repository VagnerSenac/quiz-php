<?php
include "conexao.php";
$pergunta = $_POST['pergunta'];
$alternativa1 = $_POST['alternativa1']; 
$alternativa2 = $_POST['alternativa2'];
$alternativa3 = $_POST['alternativa3'];
$alternativa4 = $_POST['alternativa4'];
$foto = $_FILES['foto'];
$conteudo = file_get_contents($foto['tmp_name']);

$sqlGravar = "insert into t_quiz(pergunta, alternativa1, alternativa2, alternativa3, alternativa4, imagem) values('$pergunta', '$alternativa1', '$alternativa2', '$alternativa3', '$alternativa4', $conteudo)";
mysqli_query($conexao, $sqlGravar);
mysqli_close($conexao);
header("location: quiz-novo.php?msg=Cadastro realizado com sucesso!");



/*
if(isset($_FILES['imagem_up']))
 {
    $ext = strtolower(substr($_FILES['imagem_up']['name'],-4)); //Pegando extensão do arquivo
    $new_name = 'imagem'.$ext; //Definindo um novo nome para o arquivo
    $dir = './imagens/'; //Diretório para uploads 
    move_uploaded_file($_FILES['imagem_up']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    $sqlGravar = "insert into t_quiz(pergunta, alternativa1, alternativa2, alternativa3, alternativa4) values('$pergunta', '$alternativa1', '$alternativa2', '$alternativa3', '$alternativa4')";
        mysqli_query($conexao, $sqlGravar);
        mysqli_close($conexao);
        header("location: quiz-novo.php?msg=Cadastro realizado com sucesso!");
 } 
else {
    mysqli_close($conexao);
	header("location: quiz-novo.php?msg=Você não realizou o upload da imagem.");
}

*/

?>

