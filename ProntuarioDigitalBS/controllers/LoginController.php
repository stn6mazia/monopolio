<?php
/**
 * LoginController 
 *
 * Manipula os dados de login do usuário
 */

class  LoginController extends Controller
{
    /**
     * Carrega o layout do login
     */
    public function index()
    {
        $this->title = "Prontuário Digital | Login";
        $params = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        if(!isset($this->logged_in) || $this->logged_in === false ){
            $this->loadView('login');
        }
        else{
            $this->loadView('principal');
        }
    }
    
    public function atualizarSenha($login)
    {
        /* ESTE MÉTODO SÓ FUNCIONA EM AMBIENTE DE PRODUÇÃO, APÓS 
         * TER SIDO PUBLICADO. */
        
        $userLogin = $login[0];
        if( !isset($userLogin) ){
            $message = "Não foram encaminhados parâmetros";
            echo $message;
        }
        else {
            $model = $this->loadModel('Usuarios');
            $email = $model->obterEmailPorLoginUsuario($userLogin);
            if($email != null){
                $model->ResetarSenhaUsuario($userLogin, true);
            }
            
        }
    }
}