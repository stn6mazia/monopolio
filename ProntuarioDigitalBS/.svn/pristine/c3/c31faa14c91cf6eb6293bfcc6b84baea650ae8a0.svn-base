<?php
/**
 * Application - Gerencia Models, Controllers e Views
 *
 * @package Application
 */
class Application
{
 
    
    
    
    
    /**
     * $controller
     *
     * Receberá o valor do controller (Vindo da URL).
     * exemplo.com/controller/
     *
     * @access private
     */
    private $controller;
    
    /**
     * $acao
     *
     * Receberá o valor da ação (Também vem da URL):
     * exemplo.com/controller/acao
     *
     * @access private
     */
    private $acao;
    
    /**
     * $parametros
     *
     * Receberá um array dos parâmetros (Também vem da URL):
     * exemplo.com/controller/acao/param1/param2/param50
     *
     * @access private
     */
    private $parametros;
    
    /**
     * Construtor para essa classe
     *
     * Obtém os valores do controller, ação e parâmetros. 
     * Configura o controlado e a ação (método).
     */
    public function __construct () 
    {
        // Obtém os valores do controller, ação e parâmetros da URL.
        // E configura as propriedades da classe.
        $this->get_url_data();

        /**
         * Verifica se o controller existe. Caso contrário, adiciona o
         * controller padrão (controllers/HomeController.php) e chama o método index().
         */
        if (! $this->controller) {
            
            // Adiciona o controller padrão
            require_once CONTROLLERS_PATH . 'HomeController.php';
            
            // Este controller deverá ter uma classe chamada HomeController
            $this->controller = new HomeController();
            
            // Executa o método index()
            $this->controller->index();
            
            return;
        }

        // Se o arquivo do controller não existir nada será feito
        if (! file_exists(CONTROLLERS_PATH . $this->controller . '.php' ) ) {
            // Arquivo não encontrado
            die("File $this->controller.php not found");
            return;
        }
        
        // Inclui o arquivo do controller
        require_once CONTROLLERS_PATH . $this->controller . '.php';
        
        // Remove caracteres inválidos do nome do controller para gerar o nome
        $this->controller = preg_replace('/[^a-zA-Z]/i', '', $this->controller);
        
        // Se a classe do controller indicado não existir nada será feito
        if (! class_exists( $this->controller ) ) {
            // Controller não encontrado
            $this->controller->loadView('errors.404');
            return;
        }
        
        // Cria o objeto da classe do controller e envia os parâmetros
        $this->controller = new $this->controller( $this->parametros );
 
        // Se o método indicado existir, executa o método e envia os parâmetros
        if (method_exists($this->controller, $this->acao)) {
            $this->controller->{$this->acao}( $this->parametros );
            return;
        }
        
        // Se a ação não for informada, executa o método index por padrão
        if (! $this->acao && method_exists( $this->controller, 'index')) {
            $this->controller->index( $this->parametros );
            return;
        }
        
        // Página não encontrada
        $this->controller->loadView('errors.404');
        
        // FIM :)
        return;
    } // __construct
    
    /**
     * Obtém parâmetros de $_GET['path']
     *
     * Obtém os parâmetros de $_GET['path'] e configura as propriedades 
     * $this->controller, $this->acao e $this->parametros
     *
     * A URL deverá ter o seguinte formato:
     * http://www.example.com/controller/acao/parametro1/parametro2/etc...
     */
    public function get_url_data() {
       
        // Verifica se o parâmetro path foi enviado
        $path_param = filter_input(INPUT_GET, 'path');
        
        if ( ! empty($path_param) ) {
    
            // Captura o valor do parâmetro $_GET['path'] e capitaliza a primeira letra
            $path = ucfirst(strtolower($path_param));
            // Limpa os dados
            $path = rtrim($path, '/');
            $path = filter_var($path, FILTER_SANITIZE_URL);
            
            // Cria um array de parâmetros
            $path = explode('/', $path);
            // Configura as propriedades
            $this->controller  = chk_array( $path, 0 );
            $this->controller .= 'Controller';
            $this->acao        = chk_array( $path, 1 );
            
            // Configura os parâmetros
            if ( chk_array( $path, 2 ) ) {
                unset( $path[0] );
                unset( $path[1] );
                
                // Os parâmetros sempre virão após a ação
                $this->parametros = array_values( $path );
            }
        }
    }
}