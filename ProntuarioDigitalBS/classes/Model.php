<?php
/**
 * Model - Todas as models DEVERÃO estender essa classe.
 * @link https://www.todoespacoonline.com/w/2014/09/mvc-em-php-parte-3/
 *
 * Model para criar e/ou configurar objetos (classes) da aplicação.
 * Servirá para manter os métodos que poderão ser utilizados em todos os models, ou seja,
 * ela ajudará a manter a reutilização de código (DRY) sempre ativa.
 */

class Model
{
    /**
     * Os dados de formulários de envio.
     *
     * @var array $form_data
     * @access public
     */ 
    public $form_data;
 
    /**
     * As mensagens de retorno (feedback) para formulários.
     *
     * @var string $form_msg
     * @access public
     */ 
    public $form_msg;
 
    /**
     * Mensagem de confirmação para apagar dados de formulários
     *
     * @var string $form_confirma
     * @access public
     */
    public $form_confirma;
 
    /**
     * O objeto da nossa conexão PDO
     *
     * @var PDO $db
     * @access public
     */
    public $db;
 
    /**
     * O controller que gerou esse modelo
     *
     * @var Controller $controller
     * @access public
     */
    public $controller;
 
    /**
     * Parâmetros da URL
     *
     * @var string $parametros
     * @access public
     */
    public $parametros;
 
    /**
     * Dados do usuário
     *
     * @var array $userdata
     * @access public
     */
    public $userdata;
    
    /**
     * Inverte datas 
     *
     * Obtém a data e inverte seu valor.
     * De: d-m-Y H:i:s para Y-m-d H:i:s ou vice-versa.
     *
     * @since 0.1
     * @access public
     * @param string $data A data
     */
    public function inverte_data( $data = null ) {
    
        // Configura uma variável para receber a nova data
        $nova_data = null;
        
        // Se a data for enviada
        if ( $data ) {
        
            // Explode a data por -, /, : ou espaço
            $data = preg_split('/-|/|s|:/', $data);
            
            // Remove os espaços do começo e do fim dos valores
            $data = array_map( 'trim', $data );
            
            // Cria a data invertida
            $nova_data .= chk_array( $data, 2 ) . '-';
            $nova_data .= chk_array( $data, 1 ) . '-';
            $nova_data .= chk_array( $data, 0 );
            
            // Configura a hora
            if ( chk_array( $data, 3 ) ) {
                $nova_data .= ' ' . chk_array( $data, 3 );
            }
            
            // Configura os minutos
            if ( chk_array( $data, 4 ) ) {
                $nova_data .= ':' . chk_array( $data, 4 );
            }
            
            // Configura os segundos
            if ( chk_array( $data, 5 ) ) {
                $nova_data .= ':' . chk_array( $data, 5 );
            }
        }
        
        // Retorna a nova data
        return $nova_data;
    
    }
    
}