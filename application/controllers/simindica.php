<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simindica extends CI_Controller {

  public function __construct() {
            parent::__construct();
        }

    
	   public function index(){
            $dados = array();
            $this->load->model('Users', '', TRUE);
            
 
             if($this->input->post('enviar') == 'simindica'){
                $this->Formulario->area = $this->input->post('area');
                $this->Formulario->cep = $this->input->post('cep');
                $this->Formulario->indicador = $this->input->post('indicador');
                $this->Formulario->indicado = $this->input->post('indicado');
                $this->Formulario->cpf = $this->input->post('cpf');
                $this->Formulario->cnpj = $this->input->post('cnpj');
                $this->Formulario->rg = $this->input->post('rg');
                $this->Formulario->estadocivil = $this->input->post('estadocivil');
                $this->Formulario->nomemae = $this->input->post('nomemae');
                $this->Formulario->endereco = $this->input->post('endereco');
                $this->Formulario->numero = $this->input->post('numero');
                $this->Formulario->complemento = $this->input->post('complemento');
                $this->Formulario->bairro = $this->input->post('bairro');
                $this->Formulario->cidade = $this->input->post('cidade');
                $this->Formulario->uf = $this->input->post('uf');
                $this->Formulario->telefone1 = $this->input->post('telefone1');
                $this->Formulario->telefone2 = $this->input->post('telefone2');
                $this->Formulario->email = $this->input->post('email');

                if($this->Formulario->incluir()){
                    $dados['msg'] = 'Formulário cadastrado com sucesso!';
                }
                else{
                    $dados['msg'] = 'Erro ao Cadastrar.';
                }
     }
    $this->load->view('simindica', $dados);
 
}
	
	
	//function _validar_cpf($cpf) {
  //	$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
  
  	// Valida tamanho
  //	if (strlen($cpf) != 11)
  	//	return false;
  
  	// Calcula e confere primeiro dígito verificador
 // 	for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
 // 		$soma += $cpf{$i} * $j;
  
  //	$resto = $soma % 11;
  
  	//if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto))
  //		return false;
  
  	// Calcula e confere segundo dígito verificador
 // 	for ($i = 0, $j = 11, $soma = 0; $i < 10; $i++, $j--)
  //		$soma += $cpf{$i} * $j;
  
  //	$resto = $soma % 11;
  
 // 	return $cpf{10} == ($resto < 2 ? 0 : 11 - $resto);
//  }
  
}

?>