<?php
//abre conexão
/*$conn = mysql_connect('localhost', 'root','carcass');

//seleciona banco de dados ativos
mysql_select_db('estoque', $conn);

//define a consulta que será realizada
$query = 'select id,nome  from produto';

//envia consulta ao banco de dados
$result = mysql_query($query, $conn);

if($result){
    while ($row = mysql_fetch_assoc($result)){
        print  $row['id'].'-'.$row['nome']."<br>";
    }
}*/

//mysql_close($conn);

$username = 'root';
$password = 'carcass';

$parametro_id = 1;
try {
  $conn = new PDO('mysql:host=localhost;dbname=estoque', $username, $password);
  $stmt = $conn->prepare('SELECT * FROM produto WHERE id = :$parametro_id);
  $stmt->execute(array('id' => $id));
 
  $result = $stmt->fetchAll();
 
  if ( count($result) ) { 
    foreach($result as $row) {
      print_r($row);
    }   
  } else {
    echo "Nenhum resultado retornado.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

 

?>