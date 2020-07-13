<?php
session_start();
include_once("banco.php");

$codcontato = filter_input(INPUT_POST, 'codcontato', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_NUMBER_INT);


$result_usuario = "UPDATE cadastro SET nome='$nome', sexo='$sexo', cidade='$cidade', data='$data' WHERE codcontato='$codcontato'";
$resultado_usuario = mysqli_query($con, $result_usuario);

if(mysqli_affected_rows($con)){
    $_SESSION['msg'] =  "<script>
            alert('Usuário atualizado com sucesso!');
            </script>";
    header("Location: editar.php");
}else{
    $_SESSION['msg'] = "<script>
            alert('Usuário não atualizado!');
            </script>";
    header("Location: editar.php");
}
