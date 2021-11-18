<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php'); // inportando arquivo com a conexão como banco de dados
require_once(dirname(__FILE__, 2) . '/src/models/User.php'); 

// Database::getConnection(); // importando o método da clase database para fazer a conexão

//$sql = 'select * from users'; // Query de consulta no banco de dados
//$result = Database::getResultfromQuery($sql); // importando o método para executrar a query e colocando na variável $result

/* while($row = $result->fetch_assoc()) { // Estrutura de repetição para mostar o resultado da query
    print_r($row);
    echo '<br>';
} */

$user = new User(['name' => 'Lucas', 'email' => 'lucas@cod3r.com.br']);
print_r($user);
$user->email = 'lucas_alterado@cod3er.com.br';
echo '<br>';
print_r($user->email);