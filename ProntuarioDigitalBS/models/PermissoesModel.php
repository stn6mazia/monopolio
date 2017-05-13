<?php

class PermissoesModel extends Model
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
    
    public function insert($nom_permissao){
        $sql = 'INSERT INTO tb_permissoes (nom_permissao) VALUES ("'.$nom_permissao.'")';
        $pdo=$this->db->query($sql);
    }
    
    public function delete($id = NULL){
        $sql = 'DELETE FROM tb_permissoes WHERE id_permissao ="'.$id.'"';
        $pdo=$this->db->query($sql);
    }
    
    public function listar()
    {      
        $pdo=$this->db->query("SELECT * FROM tb_permissoes");   
        return $pdo->fetchAll();
    }  
  public function getById($id= NULL)
    {
        if($id != NULL){
            $pdo=$this->db->query("SELECT * FROM tb_permissoes where id_permissao = ".$id);   
            return $pdo->fetchAll();
        }
     }
public function update($id= NULL, $desc = NULL, $status = NULL){
         if($id != NULL && $desc != NULL && $status != NULL){
            $cont = 0;
            if(isset($desc) && $cont == 0){
                $desc = 'nom_permissao = "'.$desc.'" ';
                $cont++;
            }
              if(isset($status) && $cont == 0){
                $status = 'id_permissao = "'.$status.'" ';
                $cont++;
            }
            else if(isset($status) && $cont > 0){
                $status = ',id_permissao = "'.$status.'" ';
                $cont++;
            }

            $sql = 'UPDATE tb_permissoes_acesso SET '.$desc.$status.', dt_alteracao = "'.date('Y-m-d').'" WHERE id_permissao = "'.$id.'"';
           // echo '<center>'.$sql.'<center>';
            $pdo=$this->db->query($sql);
        }
}}