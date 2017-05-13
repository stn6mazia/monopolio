<?php

class PapeisController extends Controller {

    public function index() {
        $this->title = "Prontuário Digital | Papéis";

        $model = $this->loadModel('Papel');
        $lista = $model->listar();

        $this->loadView('papeis.index', array(
            'papeis' => $lista
        ));
    }

    public function delete() {

        $this->title = "Prontuário Digital | Deletar Papel";

        $id = $_GET['id'];
        $model = $this->loadModel('Papel');
        $model->delete($id);
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/papeis");
    }

    public function incluir() {
        $this->title = "Prontuário Digital | Papéis";
        $this->loadView('papeis.incluir');

        // Incluido trecho abaixo para que apenas ao realizar o POST 
        // na página de papéis, seja realizada as funções de cadastramento
        // do papel.
        if (isset($_POST) && count($_POST) > 0) {
            $papel = $_POST["papel"];
            //$flagStatus = $_POST["flg_status_manter_papeis"];
            $flagStatus = 0; //teste para nova inclusão
            //if($flagStatus >= 0){
            $papelModel = $this->loadModel('Papel');
            $papelModel->cadastrar($papel/* , $flagStatus */);
            //}
        }
    }

    public function editar() {
        //Função feita com base na função editar localizada em controllers\PermissoesController.php
        $this->title = "Prontuário Digital | Papéis"; //define o titulo
        $id = $_GET['id']; //recebe o id enviado em papeis\index.php
        //$this->loadView('papeis.editar');//carrega a view editar no caminho view\papeis\editar.php
        $model = $this->loadModel('Papel');

        $linha = $model->getById($id); //joga os dados no array lista

        if (!empty($_POST)) {
            $msg = '';

            if ($_POST['papel'] == '') {
                $msg.='Descrição';

                if ($msg != '') {
                    echo $msg;
                }
            } else {
                $data = $_POST;
                $id = $_GET['id'];
                //var_dump($_POST);
                $model = $this->loadModel('papel');
                $model->update($id, $_POST['papel']/* ,$_POST['flag_status_papel'] */);
                header("Location: http://" . $_SERVER['HTTP_HOST'] . "/papeis");
            }
        }
        $this->loadView('papeis.editar', array(
            'papeis' => $linha,
            'nome' => "Administrador"
                )
        );
    }

}
