<?php
print $POST['descricao'];
$descricao = $_POST['descricao'];
$conn = mysqli_connect('localhost','root','carcass','estoque');
if(!$conn){
    echo 'Erro na conexao';
    echo mysqli_connect_error();
}else{
     echo 'Sucesso na conexao!';
}

$sql = "insert into categoria(nome) values('$descricao')";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

mysqli_close($conn);

?>