<?php

class PerfilModel extends Model 
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
    public function listar(){
        $pdo = $this->db->query('SELECT * FROM tb_perfil_acesso');
        
        return array($pdo->fetchAll());
    }
    
      public function getById($id= NULL)
    {
        if($id != NULL){
            $pdo=$this->db->query("SELECT * FROM tb_perfil_acesso where id_perfil = ".$id);   
            return $pdo->fetchAll();
        }
    }
    
    
    
    
     public function insert($nome_perfil,$desc_perfil){
        $dataHj = date("Y-m-d");
        $sql = 'INSERT INTO tb_perfil_acesso (nom_perfil,desc_perfil, dt_inclusao) VALUES ("'.$nome_perfil.'","'.$desc_perfil.'", "'.$dataHj.'")';
        return $this->db->query($sql);
     }
      
      public function delete($id = NULL){
        $sql = 'DELETE FROM tb_perfil_acesso WHERE id_perfil ="'.$id.'"';
        //echo '<center>'.$sql.'<center>';
        $pdo=$this->db->query($sql);
     }
    
     public function update($id = NULL, $desc = NULL, $status = NULL){
         if($id != NULL && $desc != NULL && $status != NULL){
            $sql = 'UPDATE tb_perfil_acesso SET dt_alteracao = "'.date('Y-m-d').'", desc_perfil = "'.$desc.'", flg_status_perfil_acesso = "'.$status.'" WHERE id_perfil = "'.$id.'"';
           // echo '<center>'.$sql.'<center>';     
            $pdo=$this->db->query($sql);
        }
        //var_dump($sql);
}
}
