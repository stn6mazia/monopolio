<?php

class UsuariosController extends Controller {

    public function index() {
        $this->title = "Página de Usuarios";

        $model = $this->loadModel('Usuarios');
        $usuarios = $model->listar();

        $this->loadView('usuarios.index', array('usuarios' => $usuarios));
    }

    public function incluir($id) {
        $this->title = "Prontuário Digital | Usuarios";
        //$usuarioID = $id[0];
        $model = $this->loadModel('Usuarios');
        //$usuario = $model->obterUsuario($usuarioID);
        $usuario = $model->insert();
        $this->loadView('usuarios.incluir', array('usuarioInfo' => $usuario));


        if (isset($id) || $id != null) {
            $usuarioID = $id[0];
            $model = $this->loadModel('Usuarios');
            $usuario = $model->obterUsuarioPorLogin($usuarioID);

            $this->loadView('usuarios.incluir', array('usuarioInfo' => $usuario));
        } else {
            $this->loadView('usuarios.incluir');
        }
    }

    public function delete() {
        $this->title = "Prontuário Digital | Deletar Usuarios";

        $id = $_GET['id'];
        $model = $this->loadModel('Usuarios');
        $model->delete($id);
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/usuarios");
    }

    public function editar($id) {
        $this->title = "Prontuário Digital | Usuarios";
        if (!isset($_GET['id'])) {
            header("Location: http://" . $_SERVER['HTTP_HOST'] . "/usuarios");
        }
        $id = $_GET['id'];
        $model = $this->loadModel('Usuarios');
        $usuario = $model->obterUsuarioPorId($id);

        $this->loadView('usuarios.editar', array(
            'usuario' => $usuario,
            'nome' => "Administrador"
                )
        );
    }

    public function update() {
        $this->title = "Prontuário Digital | Usuarios";
    }

}
