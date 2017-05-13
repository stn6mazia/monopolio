<?php

class OperacoesModel extends Model
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
     
    public function listar($id = NULL)
    {      
        if($id != NULL)
            $pdo=$this->db->query("SELECT * FROM tb_operacao_sistema WHERE id_operacao_sistema = ".$id); 
        else
            $pdo=$this->db->query("SELECT * FROM tb_operacao_sistema");
        return $pdo->fetchAll();
    }

    public function delete($id = NULL){
        $sql = 'DELETE FROM tb_operacao_sistema WHERE id_operacao_sistema ="'.$id.'"';
        $pdo=$this->db->query($sql);
    }
    /*public function update($id = NULL,$desc = NULL,$status = NULL){
         if($id != NULL && $desc != NULL && $status != NULL){
            $cont = 0;
            if(isset($desc) && $cont == 0){
                $desc = 'nom_operacao_sistema = "'.$desc.'" ';
                $cont++;
            }
              if(isset($status) && $cont == 0){
                $status = 'flg_status_operacao_sistema = "'.$status.'" ';
                $cont++;
            }
            else if(isset($status) && $cont > 0){
                $status = 'flg_status_operacao_sistema = "'.$status.'" ';
                $cont++;
            }
        $sql = 'UPDATE tb_operacao_sistema SET'.$desc.$status.',dt_alteracao ="'.date('Y-m-d').'" WHERE id_operacao_sistema ="'.$id.'"';
        $pdo=$this->db->query($sql);
    }
    }*/
    
    public function obterUsuario($id)
    {
        $query = "SELECT * FROM tb_operacao_sistema where id_operacao_sistema = " . $id;
        $pdo = $this->db->query($query);
        $operacao = $pdo->fetchObject();
        
        return $operacao;
    }
    public function buscar($id = NULL, $desc = NULL)
    {     
        $cont = 0;
        if(isset($id) && $cont == 0 && $id != NULL){
            $id = 'id_operacao_sistema ='.$id;
            $cont++;
        }
          if(isset($desc) && $cont == 0 && $desc != NULL){
            $desc = "desc_operacao_sistema like '%".$desc."%'";
            $cont++;
        }
        else if(isset($desc) && $cont > 0 && $desc != NULL){
            $desc = "AND desc_operacao_sistema like '%".$desc."%'" ;
            $cont++;
        }
        $sql = 'select * from tb_operacao_sistema WHERE '.$id.$desc;
        //echo '<center>'.$sql.'<center>';
        if($cont!= 0){
            $pdo=$this->db->query($sql);
            return $pdo->fetchAll();
        }else{
              return '';
        }
    }
    
}
