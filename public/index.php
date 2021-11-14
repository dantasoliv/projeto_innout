<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php'); // inportando arquivo com a conexão como banco de dados

// Database::getConnection(); // importando o método da clase database para fazer a conexão

$sql = 'select * from users'; // Query de consulta no banco de dados
$result = Database::getResultfromQuery($sql); // importando o método para executrar a query e colocando na variável $result

while($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
}