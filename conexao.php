<?php
//abre conexão
$conn = mysql_connect('localhost', 'root','carcass');

//seleciona banco de dados ativos
mysql_select_db('estoque', $conn);

//define a consulta que será realizada
$query = 'Select From produto';



?>