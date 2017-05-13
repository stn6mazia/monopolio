<?php

class ExemploController extends Controller
{
    public function index()
    {
        $this->title = "Página de exemplo";

        $model = $this->loadModel('Exemplo');
        $lista = $model->listar();

        $this->loadView('exemplo.index', $lista);
    }

    public function cadastro()
    {
        $this->title = "Cadastro";
        
        if ( ! empty($_POST) ) {
            $inserir = $this->db->insert('tb_exemplo', array(
                'exemplo' => $_POST['exemplo']
            ));
        }

        $this->loadView('exemplo.cadastro');
    }
    
    public function editar($id)
    {
        var_dump($id);
    }
}