<?php
Class Users extends CI_Model
{

        private $_username;
        private $_password;

        function __construct()
        {
        parent::__construct();
    }
    public function setUsername($value)
    {
        $this->_username = $value;
    }
    
    public function setPassword($value)
    {
        $this->_password = $value;
    }
   public function login()
   { 
        $this->load->database();
        $username = $this->_username;
        $password = $this->_password;
        $this -> db -> select('id, username, password');
        $this -> db -> from('users');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', $password);
        $query = $this -> db -> get();
         if($query -> num_rows() == 1)
       {
           return "username and password matched";
       }
       else
       {
         return "username and password not matched";
       }
    }   
}

Class Formulario extends CI_Model {
 
    public $area;
    public $cep;
    public $indicador;
    public $indicado;
    public $cpf;
    public $cnpj;
    public $rg;
    public $estadocivil;
    public $nomemae;
    public $endereco;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $uf;
    public $telefone1;
    public $telefone2;
    public $email;
 
    public function __construct() {
        parent::__construct();
    }
 
    public function incluir(){
        return $this->db->insert('formulario', $this);
    }
}

Class Produto_model extends CI_Model {
 
    public $nome;
    public $valor;
 
    public function __construct() {
        parent::__construct();
    }
 
    public function inserir(){
        return $this->db->insert('produto', $this);
    }
}