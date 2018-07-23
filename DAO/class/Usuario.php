<?php

class Usuario {
    private $id_usuario;
    private $des_login;
    private $des_senha;
    private $dt_cadastro;
    
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getDes_login() {
        return $this->des_login;
    }

    public function getDes_senha() {
        return $this->des_senha;
    }

    public function getDt_cadastro() {
        return $this->dt_cadastro;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setDes_login($des_login) {
        $this->des_login = $des_login;
    }

    public function setDes_senha($des_senha) {
        $this->des_senha = $des_senha;
    }

    public function setDt_cadastro($dt_cadastro) {
        $this->dt_cadastro = $dt_cadastro;
    }

    public function loadById($id) {
        
        $sql = new Sql();
        
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(
            ":ID"=>$id
        ));
        
        if (count($result) > 0) {
            
            $row = $result[0];
            
            $this->setId_usuario($row['id_usuario']);
            $this->setDes_login($row['des_login']);
            $this->setDes_senha($row['des_senha']);
            $this->setDt_cadastro(new DateTime($row['dt_cadastro']));
            
        }
        
    }
    
    public static function getList() {
        
        $sql = new Sql();
        
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY des_login;");
        
    }
 
    public static function search($login) {
        
        $sql = new Sql();
        
        return $sql->select("SELECT * FROM tb_usuarios WHERE des_login LIKE :SEARCH ORDER BY des_login", array(
            ':SEARCH'=>"%".$login."%"
        ));
        
    }    
    
    public function login($Login, $password) {
        
        $sql = new Sql();
        
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE des_login = :LOGIN AND des_senha = :PASSWORD", array(
            ":LOGIN"=>$Login,
            ":PASSWORD"=>$password
        ));
        
        if (count($result) > 0) {
            
            $row = $result[0];
            
            $this->setId_usuario($row['id_usuario']);
            $this->setDes_login($row['des_login']);
            $this->setDes_senha($row['des_senha']);
            $this->setDt_cadastro(new DateTime($row['dt_cadastro']));
            
        } else {
            
            throw new Exception("Login e/ou senha inválidos.");
            
        }     
        
    }
    
    public function __toString() {
        
        return json_encode(array(
            "id_usuario"=>$this->getId_usuario(),
            "des_login"=>$this->getDes_login(),
            "des_senha"=>$this->getDes_senha(),
            "dt_cadastro"=>$this->getDt_cadastro()->format("d/m/Y H:i:s")
        ));
    }
}
