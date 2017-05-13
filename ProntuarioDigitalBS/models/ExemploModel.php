<?php

class ExemploModel extends Model
{
    /**
     * Construtor para essa classe
     *
     * Configura o DB, o controlador, os parâmetros e dados do usuário.
     *
     * @since 0.1
     * @access public
     * @param PDO $db Objeto de conexão do PDO
     * @param Controller $controller Co
     */
    public function __construct( $db = false, $controller = null ) {
        // Configura o DB (PDO)
        $this->db = $db;

        // Configura o controlador
        $this->controller = $controller;
 
        // Configura os parâmetros
        $this->parametros = $this->controller->parametros;
 
        // Configura os dados do usuário
        $this->userdata = $this->controller->userdata;
    }
    
    public function listar()
    {
        return array(
            'teste' => "Olá Mundo",
            'hello' => "Hello World"
        );
    }

    public function inserir(array $data = array())
    {
        $db->insert('tb_exemplo', $data);
    }
}