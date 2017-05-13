<?php

class DelegacoesModel extends Model
{
            
    public function __construct( $db = false, $controller = null ) 
    {
        // Configura o DB (PDO)
        $this->db = $db;

        // Configura o controlador
        $this->controller = $controller;
 
        // Configura os parâmetros
        $this->parametros = $this->controller->parametros;
 
        // Configura os dados do usuário
        $this->userdata = $this->controller->userdata;
    } 
     
    public function listar()
    {
        $sql = "SELECT tb_delega_poder.id_usu_delega, tb_delega_poder.flg_status_delega, tb_permissoes_concedidas.des_motivo, tb_usuario.nom_usuario, tb_permissoes.nom_permissao FROM tb_delega_poder "
                . "JOIN tb_usuario ON(tb_delega_poder.id_usu_delega = tb_usuario.id_usuario) "
                . "JOIN tb_permissoes ON(tb_delega_poder.id_permissao = tb_permissoes.id_permissao) "
                . "JOIN tb_permissoes_concedidas ON(tb_permissoes.id_permissao = tb_permissoes_concedidas.id_permissao)";
        $pdo = $this->db->query($sql); //ATENÇÂO TABELA DE ACESSO DEVE SER MODIFICADA   
        return $pdo->fetchAll();
    }  
     
     
    
      public function delete($id = NULL){
        $sql = 'DELETE FROM tb_delega_poder WHERE id_usu_delega ="'.$id.'"';
        //echo '<center>'.$sql.'<center>';
        $pdo=$this->db->query($sql);
     }
     
     public function getUsuarios()
     {
         $sql = "SELECT id_usuario, nom_usuario FROM tb_usuario";
         $pdo = $this->db->query($sql);
         return $pdo->fetchAll();
     }
     
     public function insert($delegacao = NULL, $motivo = NULL, $operacao = NULL, $status = NULL)
     {
         $sql = "INSERT INTO tb_permissoes_concedidas(id_usu_recebe, id_usu_delega, id_permissao, des_motivo, dt_inicio, dt_fim) VALUES ('".$data['recebe']."', '".$data['delega']."', '".$data['permissao']."', '".$data['motivo']."', '".date('Y-m-d')."', '".date('Y-m-d')."')";
         $pdo = $this->db->query($sql);
     }
     
     public function getOperacoes()
     {
         $sql = "SELECT id_operacao_sistema, nom_operacao_sistema, desc_operacao_sistema FROM tb_operacao_sistema";
         $pdo = $this->db->query($sql);
         return $pdo->fetchAll();
     }
    

}