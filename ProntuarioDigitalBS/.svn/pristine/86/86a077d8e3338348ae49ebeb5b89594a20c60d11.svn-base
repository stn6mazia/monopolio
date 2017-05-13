<?php

class OperacoesController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Operações";
        $model = $this->loadModel('Operacoes');
        $lista = $model->listar();
        if(!empty($_POST)){
            $operacao = $_POST;
            $busca = '';
            if($operacao['id_operacao_sistema']!= '')
                $busca['id_operacao_sistema'] = $operacao['id_operacao_sistema'];
            else
                $busca['id_operacao_sistema'] = NULL;
                    
            if($operacao['desc_operacao_sistema']!= '')
                $busca['desc_operacao_sistema'] = $operacao['desc_operacao_sistema'];
            else
                $busca['desc_operacao_sistema'] = NULL;
            
            $id = $busca['id_operacao_sistema'];
            $desc = $busca['desc_operacao_sistema'];
            $busca = $this->loadModel('Operacoes');
            $lista = $busca->buscar($id, $desc);
        }
        $this->loadView('operacoes.index', array('operacoes' => $lista));
    }
    
    
    public function incluir() 
    {
        $this->title = "titulo incluir";
        
        $this->loadView('operacoes.incluir');
    }
    
     public function editar() 
    {
        $id = $_GET['id'];
        $model = $this->loadModel('Operacoes');
        $lista = $model->listar($id);

        $this->title = "titulo editar";
        $lista = $lista[0];
        if(!empty($_POST)){
            $operacao = $_POST;
            $operacao['operacao_id'] = $id;
            header("Location: http://".$_SERVER['HTTP_HOST']."/operacoes");
        }
        $this->loadView('operacoes.editar', array('operacoes' => $lista));
    }
    
    public function pesquisar()
    {
        $this->title="titulo pesquisar";
        $this->loadView('operacoes.pesquisar');
    }

    public function delete()
    {
        
        $this->title = "Prontuário Digital | Deletar Operacoes";
        
        $id = $_GET['id'];
        $model = $this->loadModel('Operacoes');
        $model->delete($id);
        header("Location: http://".$_SERVER['HTTP_HOST']."/operacoes");
    }

}