<?php

class UsuariosModel extends Model {

    /**
     * Construtor para essa classe
     *
     * Configura o DB, o controlador, os parâmetros e dados do usuário.
     *
     * @since 0.1
     * @access public
     * @param PDO $db Objeto de conexão do PDO
     * @param Controller $controller Co
     */
    public function __construct($db = false, $controller = null) {
        // Configura o DB (PDO)
        $this->db = $db;
        // Configura o controlador
        $this->controller = $controller;

        // Configura os parâmetros
        $this->parametros = $this->controller->parametros;

        // Configura os dados do usuário
        $this->userdata = $this->controller->userdata;
    }

    public function listar() {
        /*  $pdo = $this->db->query("SELECT A.Login, "
          . "B.`SituacaoSistema`, "
          . "A.Nome_Pessoa, "
          . "A.Papel, "
          . "null as Grupo,"
          . " null as Incluido_em, "
          . "null as Alterado_em, "
          . "null, "
          . "null "
          . "FROM `pessoa_dbv`A "
          . "LEFT JOIN `usuario` B on A.`id_pessoa` = B.`id_pessoa`");
         */
        // select da tela usuario
        //$pdo = $this->db->query('SELECT * FROM usuario');
        $pdo = $this->db->query('SELECT usuario.id_pessoa,usuario.Login, usuario.Senha,usuario.PrimeiroAcesso,usuario.DataUltimoLogin,usuario.SituacaoSistema,pessoa_dbv.Nome_Pessoa FROM usuario inner join pessoa_dbv on pessoa_dbv.id_pessoa=usuario.id_pessoa');
        return $pdo->fetchAll();
    }


    public function insert() {

        if (!empty($_POST)) {

            //$stmt = $db->prepare("INSERT INTO usuario (id_pessoa, Login, Senha, SituacaoSistema) VALUES (:id, :ra, :pass, :sit)");
           
           // $stmt->execute(array(':id' => $_POST['ConfirmaSenha'], ':ra' => $_POST['Num_matricula_RA'], ':pass' => $_POST['Senha'], ':sit' => (int)$_POST['Situacao']));
            
           // exit;
            
            //$pdo = $this->db->query($sql);
            
            /////////
            //$sql = 'INSERT INTO usuario (Login, Senha, SituacaoSistema) VALUES ('.$_POST['Num_matricula_RA'].'  ,   '.$_POST['Senha'].'  ,   '.$_POST['Situacao'].' )';
           // $stmt = $db->prepare("INSERT INTO usuario (id_pessoa,    Login, Senha, SituacaoSistema) VALUES (?, ?, ?)");
           // $stmt->bind_param("issi", $_POST['ConfirmaSenha'], $_POST['Num_matricula_RA'], $_POST['Senha'], $_POST['Situacao']);


            //$stmt->execute();
           //$pdo = $this->db->query($sql); 
           // exit;
            $sql= 'INSERT INTO usuario (id_pessoa, Login, Senha, SituacaoSistema) VALUES ( ' .$_POST['ConfirmaSenha']. '  , ' .$_POST['Num_matricula_RA']. ' , '.$_POST['Senha'].' , '.$_POST['Situacao'].  ' )'  ;
            //$sql = 'DELETE FROM usuario WHERE id_pessoa ="' . $id . '"';
             //echo '<center>'.$sql.'<center>';
             $pdo = $this->db->query($sql); 
            
            
             
        }



//        $sql =
//        "INSERT INTO usuario(login, senha, PrimeiroAcesso, DataUltimoLogin, SituacaoSistema) VALUES (
//        'joao', '1234', '1', '25/03/2017', '1')";
//        
//        $pdo=$this->db->query($sql);
//    

        /*
          $sql =
          "INSERT INTO pessoa_dbv(Nome_Pessoa, RG, Endereço, Telefone, Estado_Civil, Genero, Escolaridade, Nacionalidade, Nome_Mae, Responsavel,  Num_Prontuario) VALUES (
          'joao', '123456', 'end', '123456789', 'solteiro', 'm', 'ensino medio', 'brasileiro', 'maria', 'maria', '123456')";

          $pdo=$this->db->query($sql);


          INSERT INTO pessoa_dbv ('id_pessoa', 'Nome_Pessoa', 'Nome_Social', 'CPF', 'RG', 'Passaporte', 'CNS', 'Papel', 'Data_Nascimento', 'Endereço', 'Telefone', 'Telefone_Comercial', 'Tel_Cel', 'Email', 'Estado_Civil', 'Genero', 'Etnia', 'Escolaridade', 'Nacionalidade', 'Profissao', 'Nome_Mae', 'Nome_Pai', 'Responsavel', 'Quantidade_Filhos', 'Religiao', 'Renda_Familiar', 'Num_Prontuario', 'Num_Matricula_RA', 'Campus', 'DataCriacao', 'DataAlteracao') VALUES ( Nome_Pessoa,

          Campos Obrigatorios
          nome
          rg
          end
          fone
          estado civil
          genero
          escolaridade
          nacionalidade
          nome mae
          responsavel
          num prontuario

          INSERT INTO pessoa_dbv(Nome_Pessoa, RG, Endereço, Telefone, Estado_Civil, Genero, Escolaridade, Nacionalidade, Nome_Mae, Responsavel,  Num_Prontuario) VALUES (
          'joao', '123456', 'end', '123456789', 'solteiro', 'm', 'ensino medio', 'brasileiro', 'maria', 'maria', '123456');

          -------------------------------------------------------

          Campos que são obrigatórios no tabela mas não existem no formulário:
          endereço
          estado civil
          genero
          ..
         */
    }

    public function delete($id = NULL) {
        $sql = 'DELETE FROM usuario WHERE id_pessoa ="' . $id . '"';
        //echo '<center>'.$sql.'<center>';
        $pdo = $this->db->query($sql);
    }

    public function obterUsuarioPorId($id = NULL) {
        if (isset($id) && !empty($id)) {
            //$query = "SELECT * FROM usuario WHERE id_pessoa = " . $id;
            $query = "SELECT usuario.id_pessoa,usuario.Login, usuario.Senha,usuario.PrimeiroAcesso,usuario.DataUltimoLogin,usuario.SituacaoSistema,pessoa_dbv.id_pessoa, pessoa_dbv.Nome_Pessoa,pessoa_dbv.Nome_Social,pessoa_dbv.CPF,pessoa_dbv.RG,pessoa_dbv.Passaporte,pessoa_dbv.CNS,pessoa_dbv.Papel,pessoa_dbv.Data_Nascimento, pessoa_dbv.Endereço,pessoa_dbv.Telefone,pessoa_dbv.Telefone_Comercial,pessoa_dbv.Tel_Cel,pessoa_dbv.Email,pessoa_dbv.Estado_Civil,pessoa_dbv.Genero,pessoa_dbv.Etnia,pessoa_dbv.Escolaridade,pessoa_dbv.Nacionalidade,pessoa_dbv.Profissao,pessoa_dbv.Nome_Mae,pessoa_dbv.Nome_Pai,pessoa_dbv.Responsavel,pessoa_dbv.Quantidade_Filhos,pessoa_dbv.Religiao,pessoa_dbv.Renda_Familiar,pessoa_dbv.Num_Prontuario,pessoa_dbv.Num_Matricula_RA,pessoa_dbv.Campus,pessoa_dbv.DataCriacao,pessoa_dbv.DataAlteracao FROM usuario inner join pessoa_dbv on pessoa_dbv.id_pessoa=usuario.id_pessoa where pessoa_dbv.id_pessoa= " . $id;
            $pdo = $this->db->query($query);
            $usuario = $pdo->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } else {
            return NULL;
        }
    }

    public function obterObjetoUsuarioPorPessoaId($id) {
        if ($id == null) {
            return null;
        }

        $query = "SELECT usuario.id_pessoa,usuario.Login, usuario.Senha,usuario.PrimeiroAcesso,usuario.DataUltimoLogin,usuario.SituacaoSistema,pessoa_dbv.Nome_Pessoa FROM usuario inner join pessoa_dbv on pessoa_dbv.id_pessoa=usuario.id_pessoa where usuario.id_pessoa = " . $id;
        $pdo = $this->db->query($query);
        $usuario = $pdo->fetchObject();

        return $usuario;
    }

    public function obterObjetoUsuarioPorLogin($login) {
        if ($login == null) {
            return null;
        }

        $query = "SELECT * FROM usuario where Login = " . $login . " LIMIT 1";
        $pdo = $this->db->query($query);
        $usuario = $pdo->fetchObject();

        return $usuario;
    }

    public function obterUsuarioPorLogin($login) {
        if ($login == null) {
            return null;
        }

        $queryString = "SELECT * FROM usuario where Login = '" . $login . "' LIMIT 1";
        $query = $this->db->query($queryString);
        $fetch = $query->fetch(PDO::FETCH_ASSOC);

        return $fetch;
    }

    public function obterEmailPorLoginUsuario($login) {
        if ($login == null) {
            return null;
        }

        $queryString = "SELECT B.`Email` FROM `usuario` A 
                        INNER JOIN `pessoa_dbv` B on B.`id_pessoa` = A.`id_pessoa` 
                        WHERE A.`Login` = '" . $login . "'";
        $query = $this->db->query($queryString);
        $fetch = $query->fetch(PDO::FETCH_ASSOC);
        $email = $fetch["Email"];

        return $email;
    }

    public function ResetarSenhaUsuario($login, $enviarEmail) {
        /* ESTE MÉTODO SÓ FUNCIONA EM AMBIENTE DE PRODUÇÃO, APÓS 
         * TER SIDO PUBLICADO. */


        if ($login == null) {
            return null;
        }

        $phpass = new PasswordHash(1);
        $novaSenha = $phpass->generateNewPassword();
        $senhaCriptografada = $phpass->EncryptPassword($novaSenha);

        if ($enviarEmail == true) {
            require UTILITARIOS_PATH . 'PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'rooxdevelopment@gmail.com';
            $mail->Password = 'development@123';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('rooxdevelopment@gmail.com', 'Prontuário Digital');
            $mail->addAddress('neillontecnic@hotmail.com');

            $mail->isHTML(true);  // Set email format to HTML

            $bodyContent = "alteração de Senha - Prontuário Digital";
            $bodyContent .= "Senha: " . $novaSenha . " / " . "Senha Criptografada: " . $senhaCriptografada;

            $mail->Subject = 'Email teste';
            $mail->Body = $bodyContent;

            if (!$mail->send()) {
                $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
                echo $mgm;
            } else {
                $mgm = "ERRO AO ENVIAR E-MAIL!";
                echo $mgm;
            }
        }
    }

}
