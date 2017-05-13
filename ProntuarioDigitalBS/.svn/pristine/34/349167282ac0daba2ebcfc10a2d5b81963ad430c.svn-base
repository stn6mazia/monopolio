<?php

class PacientesModel extends Model
{
            
    public function __construct( $db = false, $controller = null ) {
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
      $pdo=$this->db->query("SELECT * FROM pessoa_dbv");   
      return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function pesquisar($id, $nome, $cpf) {
        $sql = "SELECT * FROM pessoa_dbv ";
        $contadorDeParametrosValido = 0;
        if(isset($id) && !empty($id)) {
            if( $contadorDeParametrosValido == 0) {
                $sql .= "WHERE ";
            }
            $sql .= "id_pessoa = {$id} ";
            $contadorDeParametrosValido++;
        }
        if(isset($nome) && !empty($nome)) {
            if( $contadorDeParametrosValido > 0) {
                $sql .= "AND ";
            }
            else {
                $sql .= "WHERE ";
            }
            $sql .= "Nome_Pessoa LIKE '%{$nome}%' ";
            $contadorDeParametrosValido++;
        }
        if(isset($cpf) && !empty($cpf)) {
            if( $contadorDeParametrosValido > 0) {
                $sql .= "AND ";
            }
            else {
                $sql .= "WHERE ";
            }
            $sql .= "CPF LIKE '%{$cpf}%' ";
            $contadorDeParametrosValido++;
        }
	$pdo=$this->db->query($sql);   
	return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function obterUsuarioPorId($id = NULL) {
        if(isset($id) && !empty($id)) {
            $query = "SELECT * FROM pessoa_dbv WHERE id_pessoa = " . $id;
            $pdo = $this->db->query($query);
            $usuario = $pdo->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        }
        else {
            return NULL;
        }
    }
    
    public function delete($id = NULL) {
        $sql = 'DELETE FROM  usuario WHERE id_pessoa ="'.$id.'"';
        $pdo=$this->db->query($sql);
        
        $sql = 'DELETE FROM  pessoa_dbv WHERE id_pessoa ="'.$id.'"';
        $pdo=$this->db->query($sql);
     }

    public function obterNumeroProntuario( ) {
        $query = "SELECT count(*) FROM pessoa_dbv";
        $pdo = $this->db->query($query);
        return $pdo->fetchAll();
    }
     
    public function insert( $dados ) {
        $sql = "
            INSERT INTO pessoa_dbv (
                Nome_Pessoa
                , Nome_Social
                , CPF
                , RG
                , Passaporte
                , CNS
                , Data_Nascimento
                , Endereço
                , Telefone
                , Telefone_Comercial
                , Tel_Cel
                , Email
                , Estado_Civil
                , Genero
                , Etnia
                , Escolaridade
                , Nacionalidade
                , Profissao
                , Nome_Mae
                , Nome_Pai
                , Responsavel
                , Quantidade_Filhos
                , Religiao
                , Renda_Familiar
                , Num_Prontuario
                , DataCriacao
            ) VALUES (
                '" . $dados['nome_paciente'] . "'
                , '" . $dados['apelido_paciente'] . "'
                , '" . $dados['cpf'] . "'
                , '" . $dados['rg'] . "'
                , '" . $dados['acomp_rne'] . "'
                , '" . $dados['cartao_saude'] . "'
                , '" . $dados['data_nascimento'] . "'
                , '" . $dados['tp_endereco'] . " " . $dados['nome_endereco'] . ", " . $dados['no_endereco'] . " - " . $dados['bairro'] . "'
                , '" . $dados['telefone_residencial'] . "'
                , '" . $dados['telefone_recado'] . "'
                , '" . $dados['telefone_celular'] . "'
                , '" . $dados['email'] . "'
                , '" . $dados['estado_civil'] . "'
                , '" . $dados['genero'] . "'
                , '" . $dados['origem_etnica'] . "'
                , '" . $dados['escolaridade'] . "'
                , '" . $dados['nacionalidade'] . "'
                , '" . $dados['profissao'] . "'
                , '" . $dados['nome_mae'] . "'
                , '" . $dados['nome_pai'] . "'
                , '" . $dados['nome_acompanhante'] . "'
                , '" . $dados['qtd_filhos'] . "'
                , '" . $dados['religiao'] . "'
                , '" . $dados['renda_familiar'] . "'
                , '" . $dados['numero_prontuario'] . "'
                , '" . date("Y-m-d") . "'
            )";
        $pdo=$this->db->query($sql);
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/pacientes");
    }
     
}
