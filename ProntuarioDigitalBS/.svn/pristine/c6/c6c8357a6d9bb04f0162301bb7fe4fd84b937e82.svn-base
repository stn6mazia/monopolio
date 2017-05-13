<?php

class PacientesController extends Controller {

    public function index() {
        $this->title = "Prontuário Digital | Pacientes";

        $model = $this->loadModel('Pacientes');
        $pacientes = $model->listar();

        $this->loadView('pacientes.index', array('pacientes' => $pacientes));
    }

    public function incluir() {
        $this->title = "Prontuário Digital | Pacientes";

        $model = $this->loadModel('Pacientes');
        $lista = $model->listar();

        if (!empty($_POST)) {
            $msg = '';
            //var_dump($_POST);
            $model = $this->loadModel('Pacientes');
            $model->insert($_POST);
            // print_r($_POST);
        }

        $this->loadView('pacientes.incluir', array(
            'usuarios' => $lista,
            'nome' => "Administrador"
                )
        );
    }
    
    static public function obterNumeroProntuario() {
        $model = PacientesController::loadModel('Pacientes');
        $numeroProntuario = $model->obterNumeroProntuario();
    }

    public function editar() {
        $this->title = "Prontuário Digital | Pacientes";
        if(!isset($_GET['id'])) {
           header("Location: http://" . $_SERVER['HTTP_HOST'] . "/pacientes");
        }
        $id = $_GET['id'];
        $model = $this->loadModel('Pacientes');
        $paciente = $model->obterUsuarioPorId($id);

        $this->loadView('pacientes.editar', array(
            'paciente' => $paciente,
            'nome' => "Administrador"
                )
        );
    }

    public function pesquisar() {
        $this->title = "Prontuário Digital | Pesquisar";
        
        $id = strip_tags(addslashes($_POST['id']));
        $nome = strip_tags(addslashes($_POST['nome']));
        $cpf = strip_tags(addslashes($_POST['cpf']));
        
        $model = $this->loadModel('Pacientes');
        $pacientes = $model->pesquisar($id, $nome, $cpf);
        
        $this->loadView('pacientes.index', array('pacientes' => $pacientes));
    }

    /* public function editar($id) 
      {
      $this->title = "Página de Usuarios";

      $model = $this->loadModel('Usuarios');

      $pacientesID = $id[0];
      $pacientes = $model->obterUsuario($pacientesID);

      $this->loadView('pacientes.editar');

      if(!empty($_POST)){
      $msg = '';
      if($_POST['desc_paciente']== ''){
      $msg .= 'Descrição';
      if($msg != ''){
      echo $msg;
      }
      }

      else{
      $data = $_POST;
      $id = $_GET['id'];
      //var_dump($_POST);
      $model = $this->loadModel('Pacientes');
      $model->update($id, $_POST['desc_paciente'], $_POST['flg_status_paciente_usuario']);
      header("Location: http://".$_SERVER['HTTP_HOST']."/pacientes");
      }
      }

      $this->loadView('pacientes.editar',
      array(
      'paciente' => $lista,
      'nome' => "Administrador"
      )
      );
      }


     * 
     */

    public function delete() {

        $this->title = "Prontuário Digital | Deletar pacientes";

        $id = $_GET['id'];
        $model = $this->loadModel('pacientes');
        $model->delete($id);
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/pacientes");
    }

    public function visualizar() {
        
        $this->title = "Prontuário Digital | Pacientes";
        $id = $_GET['id'];
        $model = $this->loadModel('Pacientes');
        $paciente = $model->obterUsuarioPorId($id);

        $this->loadView('pacientes.visualizar', array('paciente' => $paciente));
    }
    
    public function visualizarPrint() {
        
        $this->title = "Prontuário Digital | Pacientes - Print";
        $id = $_GET['id'];
        $model = $this->loadModel('Pacientes');
        $paciente = $model->obterUsuarioPorId($id);

        $this->loadView('pacientes.visualizar-print', array('paciente' => $paciente));
    }
}
