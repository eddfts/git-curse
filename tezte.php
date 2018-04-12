<?php

$conn = mysqli_connect("localhost","root","carcass","estoque");

if(!$conn){
   print "Erro ao conectar ao Banco de dados";
   print  mysqli_connect_error();
}
else{
    print "Sucesso na conexão";
}

$sql = "Select * from Produto";

$query =mysqli_query($conn,$sql) or die(mysqli_error($conn));

while($campo = mysqli_fetch_assoc($query)){
     print $campo['id'].$campo["descricao"];

}

mysqli_close($conn);




?>