<?php

class DelegacoesController extends Controller
{
    /**
     * Carrega o layout da home
     */
    public function index()
    {
        $this->title = "Prontuário Digital | Delegações";

        $model = $this->loadModel('Delegacoes');
        $lista = $model->listar();
        
         $this->loadView('delegacoes.index', array('delegacoes' => $lista));
         
         
        
    }

    public function incluir()
    {
        $this->title = "Prontuário Digital | Delegações";
        
        $model = $this->loadModel('Delegacoes');
        $usuarios = $model->getUsuarios();
        $operacoes = $model->getOperacoes();
       if(!empty($_POST)){
           $data= array(
               'recebe' => $_POST['delegado'],
               'delega' => '1', //atualmente sem sistema de logins, então o usuario que delegará será o id 0. Qndo tiver login, pegar id do usuario da sessão 
               'permissao' => $_POST['operacao'],
               'motivo' => $_POST['motivo'],
           );
           $model->insert($data);
           header("Location: http://".$_SERVER['HTTP_HOST']."/delegacoes");
       }
        
        $this->loadView('delegacoes.incluir', array(
            'usuarios' => $usuarios,
            'operacoes' => $operacoes
        ));

    }
    
    public function delete()
    {
        $this->title = "Prontuário Digital | Deletar Delegacoes";
        
        $id = $_GET['id'];
        $model = $this->loadModel('Delegacoes');
        $model->delete($id);
        header("Location: http://".$_SERVER['HTTP_HOST']."/delegacoes");
    }
    
    public function editar($id)
    {
        $this->loadView('delegacoes.editar', array('delegacoes'=>$id));
    }
}