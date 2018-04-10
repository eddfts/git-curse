<?php
$link = mysqli_connect("localhost", "root", "carcass", "estoque");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging erro: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
/*$db = mysqli_select_db($cx, "estoque");*/

$sql = mysqli_query($link, "SELECT * FROM produto") or die(
	mysqli_error($link) //caso haja um erro na consulta
);

while($campo = mysqli_fetch_assoc($sql)) { echo "-----------------------------------------"; 
   echo "id:".$campo["id"].""; 
   echo "nome:".$campo["nome"]."";
   echo "</br>";
}


mysqli_close($link);

?>