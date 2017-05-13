<?php

class GruposController extends Controller
{
    /**
     * Carrega o layout da home
     */
    public function index()
    {
        $this->title = "Prontuário Digital | Grupos";
        
        $model = $this->loadModel('Grupos');
        $lista = $model->listar();
     
     /* Lista a tabela Grupos da tela Grupos index */
     
        $this->loadView('grupos.index', array('grupos' => $lista));
    }
     public function delete()
    {
        
        $this->title = "Prontuário Digital | Deletar Grupo";
        
        $id = $_GET['id'];
        $model = $this->loadModel('Grupos');
        $model->delete($id);
        header("Location: http://".$_SERVER['HTTP_HOST']."/grupos");
    }
    
     public function incluir()
     {
        $this->title = "Prontuário Digital | Grupos";
        
        $model = $this->loadModel('Grupos');
        $lista = $model->listar();
        
         if(!empty($_POST)){
            $msg = '';
            
                //var_dump($_POST);
                $model = $this->loadModel('Grupos');
                $model->insert($_POST['desc_grupo_usuario'], $_POST['flg_status_grupo_usuario']);
               // print_r($_POST);
               header("Location: http://".$_SERVER['HTTP_HOST']."/grupos");
            
        }
        
        $this->loadView('grupos.incluir', 
                array(
                    'usuarios' => $lista,
                    'nome' => "Administrador"
                    )
                );

     }
     
     public function editar()
    {
        $this->title = "Prontuário Digital | Grupos";
        $id = $_GET['id'];
        $model = $this->loadModel('Grupos');
        $lista = $model->getById($id);
        
        if(!empty($_POST)){
            $msg = '';
            if($_POST['desc_grupo']== ''){
                $msg .= 'Descrição';
                if($msg != ''){
                    echo $msg;                
                }
            }
            else{
                $data = $_POST;
                $id = $_GET['id'];
                //var_dump($_POST);
                $model = $this->loadModel('Grupos');
                $model->update($id, $_POST['desc_grupo'], $_POST['flg_status_grupo_usuario']);
                header("Location: http://".$_SERVER['HTTP_HOST']."/grupos");
            }
        }
       
        $this->loadView('grupos.editar',
                array(
                    'grupo' => $lista,
                    'nome' => "Administrador"
                    )
                );
    }
}
