<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft-8', 'portuguese');

// Constantes gerais
define('DAILY_TIME', 60 * 60 * 8);

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));

// Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php')); // inportando arquivo de banco de dados