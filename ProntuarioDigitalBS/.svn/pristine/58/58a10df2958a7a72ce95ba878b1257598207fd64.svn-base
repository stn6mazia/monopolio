<?php
/**
 * Controller - Todos os controllers DEVERÃO estender esta classe
 * @link https://www.todoespacoonline.com/w/2014/09/mvc-em-php-parte-2/
 *
 * Uma classe relativamente pequena, porém muito importante. 
 * Ela carrega o controlador e executa a ação que irá incluir o model e view, formando assim a estrutura MVC. 
 * Se ela não funcionar corretamente, toda nossa aplicação irá ter problemas, por isso é muito importante que você saiba como ela funciona.
 */
class Controller extends UserLogin
{
    /**
     * $db
     *
     * Nossa conexão com a base de dados. Manterá o objeto PDO
     *
     * @access public
     */
    public $db;
 
    /**
     * $phpass
     *
     * Classe phpass 
     *
     * @see http://www.openwall.com/phpass/
     * @access public
     */
    public $phpass;
 
    /**
     * $title
     *
     * Título das páginas 
     *
     * @access public
     */
    public $title;
 
    /**
     * $login_required
     *
     * Se a página precisa de login
     *
     * @access public
     */
    public $login_required = false;
 
    /**
     * $permission_required
     *
     * Permissão necessária
     *
     * @access public
     */
    public $permission_required = 'any';
 
    /**
     * $parametros
     *
     * @access public
     */
    public $parametros = array();
    
    /**
     * Construtor da classe
     *
     * Configura as propriedades e métodos da classe.
     *
     * @since 0.1
     * @access public
     */
    public function __construct( $parametros = array() ) {
    
        // Instancia do DB
        $this->db = new Database();
        
        // Phpass
        $this->phpass = new PasswordHash(8, false);
        
        // Parâmetros
        $this->parametros = $parametros;
        
        // Verifica o login
        $this->check_userlogin();
        
    } // __construct
    
    /**
     * Load model
     *
     * Carrega os models presentes na pasta /models/.
     * @access public
     */
    public function loadModel( $model_name = false ) {
        
        // Um arquivo deverá ser enviado
        if ( ! $model_name ) return;
        
        // Constrói o nome do arquivo dinamicamente para o padrão NomeModel
        $model_name .= "Model";

        // Cria o caminho para a model
        $model_path = MODELS_PATH . $model_name . '.php';

        if ( file_exists( $model_path ) ) {
        
            // Inclui o arquivo
            require_once $model_path;
            
            // Remove os caminhos do arquivo (se tiver algum)
            $model_name = explode('/', $model_name);
            
            // Pega só o nome final do caminho
            $model_name = end( $model_name );
            
            // Remove caracteres inválidos do nome do arquivo
            $model_name = preg_replace( '/[^a-zA-Z0-9]/is', '', $model_name );
            
            // Verifica se a classe existe
            if ( class_exists( $model_name ) ) {
            
                // Retorna um objeto da classe
                return new $model_name( $this->db, $this );
            
            }

            return;
        } else {
            die("Model $model_name n&atilde;o encontrada");
        }
    }

    /**
     * Load view
     *
     * Carrega a view presente na pasta /views/.
     * @access public
     * @param string $view A view que será carregada
     * @param array $view_vars Um array contendo as 'variáveis' (índices do array) que ficará disponível na view
     */
    public function loadView($view, array $view_vars = array())
    {
        // Extrai o array e cria variáveis para a view a partir dos índices
        if (!empty($view_vars) && is_array($view_vars)) {
            extract($view_vars);
        }

        $view_path = VIEWS_PATH . str_replace('.', DS, strtolower($view)) . '.php';
        if (file_exists($view_path)) {
            require_once $view_path;    
        } else {
            die("View $view n&atilde;o encontrada");
        }
    }
    
    public function getControllerAction($controller, $action) {
        
        $controllerPath = CONTROLLERS_PATH . $controller . 'Controller' . '.php';
        
        if (file_exists($controllerPath)) {
            // Remove caracteres inválidos do nome do controller para gerar o nome
            $controllerName = preg_replace('/[^a-zA-Z]/i', '', $controller);

            // Se a classe do controller indicado não existir nada será feito
            if (! class_exists($controllerName . 'Controller') ) {
                return "";
            }

            // Cria o objeto da classe do controller e envia os parâmetros
            $item = new ReflectionClass($controllerName . 'Controller');
            $controllerInstance = $item->newInstance();
            //$newController = new $this->controller( $this->parametros );

            // Se o método indicado existir, executa o método e envia os parâmetros
            if (method_exists($controllerInstance, $action)) {
                return $controllerPath . "/" . $action;
            }
            else {
                return $controller;
            }
        }
        else
            return "";
    }

}
