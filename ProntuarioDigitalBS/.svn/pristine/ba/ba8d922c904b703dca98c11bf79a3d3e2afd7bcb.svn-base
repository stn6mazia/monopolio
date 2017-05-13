<?php
/**
 * Arquivo contendo as configuração básicas da aplicação.
 */

// Evitar acesso direto a este arquivo
if (! defined('ROOT_PATH')) {
    require './views/errors/403.php';
    exit;
}

// Exibir erros e warnings para debugar a aplicação em modo de desenvolvimento.
define('DEBUG', true); // Mude para false quando estiver em modo de produção.

/**
 * Constante para informar a aplicação utiliza um banco de dados ou não.
 * @constant USE_DATABASE Se <code>true</code> tenta realizar a conexão.  
 */
define('USE_DATABASE', true);

if (USE_DATABASE) {
    // Configura os dados do banco de dados
    define('DB_HOST', "localhost");
    define('DB_USER', "root");
    define('DB_PASS', "");
    //define('DB_NAME', "pd_digital_teste");
    define('DB_NAME', "pd_digital_novast"); //NOVA BASE
    define('DB_CHARSET', "utf8");
    define('DB_DEBUG', true);
}

// Configura o modo do ambiente da aplicação
if (defined('DEBUG') && (DEBUG === true)) {
    // Modo de desenvolvimento exibe todos os erros e warnings
    error_reporting(E_ALL);
    ini_set('display_errors', true);
} else {
    // Modo de produção não mostra nada
    error_reporting(0);
    ini_set('display_errors', false);
}

// Iniciar a sessão
if (session_id() === '') {
    session_start();
}

/**
 * Função para carregar automaticamente todas as classes necessárias da aplicação, ou seja,
 * qualquer classe (objeto) que estiver na pasta classes não será necessário dar require/include para instanciá-la.
 * 
 * Link: http://php.net/manual/pt_BR/function.spl-autoload-register.php
 */
spl_autoload_register(function ($class_name) {
    $file = CLASSES_PATH . $class_name . '.php';
    if ( ! file_exists( $file ) ) {
        require_once './views/errors/404.php';
        return;
    }   
    // Inclui o arquivo da classe
    require_once $file;
});
