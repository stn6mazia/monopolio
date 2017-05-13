<?php

class PapelModel extends Model {

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
        $pdo = $this->db->query("SELECT id_pessoa, papel, DataCriacao, DataAlteracao FROM pessoa_dbv");
        return $pdo->fetchAll();
    }

    public function getById($id = NULL) {
        if ($id != NULL) {
            $pdo = $this->db->query("SELECT papel FROM pessoa_dbv where id_pessoa = " . $id);
            return $pdo->fetchAll();
        }
    }

    public function delete($id = NULL) {
        $sql = 'DELETE FROM pessoa_dbv WHERE id_pessoa ="' . $id . '"';
        //echo '<center>'.$sql.'<center>';
        $pdo = $this->db->query($sql);
    }

    public function cadastrar($papel/* , $flagStatus */) {
        $db = new Database();

        if (isset($papel) /* && isset($flagStatus) */ && $papel != null /* && ($flagStatus >= 0) */) {
            //Obtem a data atual e realiza a formatação para atribuir a data de inclusão.
            $data = getdate();
            $dataInclusao = $data['year'] . '-' . $data['mon'] . '-' . $data['mday'];

            // Insere os dados de fato.
            /* $db->insert('tb_papel',
              array('nom_papel'  => $papel, 'dt_inclusao' => $dataInclusao, 'dt_alteracao'=>  $dataInclusao, 'flg_status_papel'=> $flagStatus)
              ); */
            $db->insert('pessoa_dbv', array('papel' => $papel, 'DataCriacao' => $dataInclusao, 'DataAlteracao' => $dataInclusao));
        }
    }

    public function update($id = NULL, $desc = NULL/* , $status = NULL */) {
        if ($id != NULL && $desc != NULL /* && $status != NULL */) {
            $cont = 0;
            if (isset($desc) && $cont == 0) {
                $desc = 'papel = "' . $desc . '" ';
                $cont++;
            }/*
              if(isset($status) && $cont == 0){
              $status = 'flg_status_papel = "'.$status.'" ';
              $cont++;
              }
              else if(isset($status) && $cont > 0){
              $status = ',flg_status_papel = "'.$status.'" ';
              $cont++;
              } */

            //$sql = 'UPDATE tb_papel SET '.$desc.$status.', dt_alteracao = "'.date('Y-m-d').'" WHERE id_papel = "'.$id.'"'; //Função da tabela antiga
            $sql = 'UPDATE pessoa_dbv SET ' . $desc . ', DataAlteracao = "' . date('Y-m-d') . '" WHERE id_pessoa = "' . $id . '"';
            // echo '<center>'.$sql.'<center>';
            $pdo = $this->db->query($sql);
        }
    }

}
