<?php

class PermissoesController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Permissões";

        $model = $this ->loadModel('Permissoes');
        $lista = $model -> listar();
                
        $this->loadView('permissoes.index', array('permissoes' => $lista));
    }
    
    
    public function incluir()
    {
        $this->title = "Prontuário Digital | Permissões";        
        $model = $this->loadModel('Permissoes');
        $lista = $model->listar();
        
        if(!empty($_POST)){
            $model = $this->loadModel('Permissoes');
            $model->insert($_POST['desc_permissao_usuario']);
            header("Location: http://".$_SERVER['HTTP_HOST']."/permissoes");            
        }
        
        $this->loadView('permissoes.incluir', 
                array(
                    'usuarios' => $lista,
                    'nome' => "Administrador"
                    )
                );
    }
    
    public function deletar()
    {        
        $this->title = "Prontuário Digital | Deletar Permissão";
        
        $id = $_GET['id'];
        $model = $this->loadModel('Permissoes');
        $model->delete($id);
        header("Location: http://".$_SERVER['HTTP_HOST']."/permissoes");
    }


    public function editar()
        {
            $this->title = "Prontuário Digital | Permissoes";
            $id = $_GET['id'];
            $model = $this->loadModel('permissoes');
            $lista = $model->getById($id);

            if(!empty($_POST)){
                $msg = '';
                if($_POST['nom_permissao']== ''){
                    $msg .= 'Descrição';
                    if($msg != ''){
                        echo $msg;                
                    }
                }
                else{
                    $data = $_POST;
                    $id = $_GET['id'];
                    //var_dump($_POST);
                    $model = $this->loadModel('permissoes');
                    $model->update($id, $_POST['nom_permissao'], $_POST['id_permissao']);
                    header("Location: http://".$_SERVER['HTTP_HOST']."/permissoes");
                }
            }

            $this->loadView('permissoes.editar',
                    array(
                        'permissoes' => $lista,
                        'nome' => "Administrador"
                        )
                    );
        }
    }
 
