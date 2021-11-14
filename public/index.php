<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php'); // inportando arquivo com a conexão como banco de dados

Database::getConnection(); // importando o método da clasa database para fazer a conexão