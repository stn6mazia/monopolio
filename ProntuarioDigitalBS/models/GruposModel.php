<?php

class GruposModel extends Model
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
        $pdo=$this->db->query("SELECT * FROM tb_grupo_acesso");   
        return $pdo->fetchAll();
     }
     
     public function getById($id= NULL)
    {
        if($id != NULL){
            $pdo=$this->db->query("SELECT * FROM tb_grupo_acesso where id_grupo = ".$id);   
            return $pdo->fetchAll();
        }
     }
     /* public function editar($table = NULL, $id= NULL, $data = NULL)
    {
        if($id != NULL && $table != NULL && $data != NULL){
            $db = new Database(); 
            $db->update($table ,'id_grupo ='.$id, $data );
        }
     }*/
     public function update($id= NULL, $desc = NULL, $status = NULL){
         if($id != NULL && $desc != NULL && $status != NULL){
            $cont = 0;
            if(isset($desc) && $cont == 0){
                $desc = 'desc_grupo = "'.$desc.'" ';
                $cont++;
            }
              if(isset($status) && $cont == 0){
                $status = 'flg_status_grupo = "'.$status.'" ';
                $cont++;
            }
            else if(isset($status) && $cont > 0){
                $status = ',flg_status_grupo = "'.$status.'" ';
                $cont++;
            }

            $sql = 'UPDATE tb_grupo_acesso SET '.$desc.$status.', dt_alteracao = "'.date('Y-m-d').'" WHERE id_grupo = "'.$id.'"';
           // echo '<center>'.$sql.'<center>';
            $pdo=$this->db->query($sql);
        }
     }
     
    public function insert($grupo = NULL, $status = NULL){
        $sql = 'INSERT INTO tb_grupo_acesso (desc_grupo, flg_status_grupo,dt_inclusao, dt_alteracao ) VALUES ("'.$grupo.'", "'.$status.'", "'.date('Y-m-d').'", "'.date('Y-m-d').'")';
        
        //echo '<center>'.$sql.'<center>';
        $pdo=$this->db->query($sql);
     }
      public function delete($id = NULL){
        $sql = 'DELETE FROM tb_grupo_acesso WHERE id_grupo ="'.$id.'"';
        //echo '<center>'.$sql.'<center>';
        $pdo=$this->db->query($sql);
     }
    
    /*public function cadastrar( $grupo, $flagStatus ){
        $db = new Database(); 
        
        if(isset($grupo) && isset($flagStatus) && $grupo != null && ($flagStatus >= 0)){
            //Obtem a data atual e realiza a formatação para atribuir a data de inclusão.
            $data = getdate();
            $dataInclusao = $data[year].'-'.$data[mon].'-'.$data[mday];
          
            // Insere os dados de fato.
            $db->insert('tb_grupo_acesso',
                array('desc_grupo'  => $grupo, 'dt_inclusao' => $dataInclusao, 'dt_alteracao'=>  $dataInclusao, 'flg_status_'=> $flagStatus, )
            );
        }
    }*/
}
