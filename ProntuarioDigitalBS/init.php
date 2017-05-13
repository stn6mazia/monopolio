<?php
/**
 * Arquivo de inicialização da aplicação.
 */

// Evitar acesso direto a este arquivo
if (! defined('ROOT_PATH')) {
    require './views/errors/403.php';
    exit;
}

// Carregar as configurações da aplicação
require_once 'config.php';

require ROOT_PATH . 'functions' . DS . 'global_functions.php';

$app = new Application();