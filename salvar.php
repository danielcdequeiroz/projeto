<?php
include_once("banco.php");

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data = $_POST['data'];
$cidade = $_POST['cidade'];


$result_msg_contato = "INSERT INTO cadastro(nome,sexo,data,cidade)VALUES('$nome','$sexo','$data','$cidade')";
$resultado_msg_contato= mysqli_query($con,$result_msg_contato)or die(mysqli_error($con));
if($resultado_msg_contato == 1){
   echo "<script>   
alert('Cadastro feito com sucesso!');
window.location.href='cadastro.php';
</script>";
}

?>