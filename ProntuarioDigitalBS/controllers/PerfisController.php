<?php

class PerfisController extends Controller {

    /**
     * Carrega o layout da home
     */
    public function index() {
        $this->title = "Prontuário Digital | Perfis";

        $model = $this->loadModel('Perfil');
        $perfis = $model->listar();

        $this->loadView('perfis.index', array("perfis" => $perfis[0]));
    }

    public function incluir() {
        $this->title = "Prontuário Digital | Perfis";
        $model = $this->loadModel('Perfil');
        $retorno = array(
            'status' => 'erro',
            'mensagem' => '',
            'dados' => array(
                'nome' => '',
                'desc' => ''
            )
        );        
        if (!empty($_POST)) {
            $retorno['dados']['nome'] = $_POST['nome_perfil'];
            $retorno['dados']['desc'] = $_POST['desc_perfil'];
            if (empty($retorno['dados']['nome'])) {
                $retorno['mensagem'] = 'Informe o nome';
            } else if (empty($retorno['dados']['desc'])) {
                $retorno['mensagem'] = 'Informe a descrição';
            } else {
                $model = $this->loadModel('Perfil');
                $result = $model->insert($retorno['dados']['nome'], $retorno['dados']['desc']);
                if($result !== false) {
                    $retorno['status'] = "sucesso";
                    $retorno['mensagem'] = 'Salvo com Sucesso';
                } else {
                    $retorno['mensagem'] = 'Erro inesperado, tente novamente';
                }
            }
        }
        $this->loadView('perfis.incluir', array(
            'retorno' => $retorno
        ));
    }

    public function editar() {
        $id = $_GET['id'];
        $this->title = "Prontuário Digital | Perfil";

        $model = $this->loadModel('Perfil');
        $lista = $model->getById($id);
        if (!empty($_POST)) {
            $msg = '';
            if ($_POST['desc_perfil'] == '') {
                $msg .= 'Descrição';
                if ($msg != '') {
                    echo $msg;
                }
            } else {
                $data = $_POST;
                $id = $_GET['id'];
                $model = $this->loadModel('Perfil');
                $model->update($id, $_POST['desc_perfil'], $_POST['flg_status_perfil_acesso']);
                header("Location: http://" . $_SERVER['HTTP_HOST'] . "/perfis");
            }
        }

        $this->loadView('perfis.editar', array(
            'perfis' => $lista[0],
            'nome' => "Administrador"
                )
        );
    }

    public function delete() {

        $this->title = "Prontuário Digital | Deletar Grupo";

        $id = $_GET['id'];
        $model = $this->loadModel('perfil');
        $model->delete($id);
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/perfis");
    }

}
