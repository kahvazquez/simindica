<?php
class email_model extends CI_Model {
	public $system_email = 'nao-responda@simtv.com.br';
	public $system_name = 'Monitor de Eficiência Técnica';
	public $site_name = 'http://eng.simtv.com.br/';
	public $sysadmin;
	function __construct() {

	    parent::__construct();
	    $config = json_decode(file_get_contents('.xconfig/smtp.json'), true);
	    $this->load->library('email', $config);
	    $this->email->set_newline("\r\n");
		$this->sysadmin = $this->db->select('value')->where('name','sysadmin')->get('system_args')->row_array();
		$this->sysadmin = $this->sysadmin['value'];
	}
	

	function simindicamail($formulario) {

		$this->email->initialize(array('mailtype' => 'html'));
		$this->email->from($this->system_email, 'Sim Indica');

		$emails = $this->db->get('indica_mail')->result_array();
		$email_arr = array();

		foreach ($emails as $e) {
			$email_arr[] = $e['email'];
		}

		$this->email->to($email_arr);

		$tabela = "<table>";
		$tabela .= "<tbody>";

		$tabela .=
		"<tr>
			<td>Área de atuação: </td>
			<td>{$formulario['area']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>CEP: </td>
			<td>{$formulario['cep']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Colcaborador Indicador: </td>
			<td>{$formulario['indicador']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Nome do Indicado: </td>
			<td>{$formulario['indicado']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>CPF: </td>
			<td>{$formulario['cpf']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>CNPJ: </td>
			<td>{$formulario['cnpj']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>RG: </td>
			<td>{$formulario['rg']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Estado civil: </td>
			<td>{$formulario['estadocivil']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Nome da Mãe: </td>

			<td>{$formulario['nomemae']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Endereço: </td>
			<td>{$formulario['endereco']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Número: </td>
			<td>{$formulario['numero']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Complemento: </td>
			<td>{$formulario['complemento']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Bairro: </td>
			<td>{$formulario['bairro']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Cidade: </td>
			<td>{$formulario['cidade']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Telefone 1: </td>
			<td>{$formulario['telefone1']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>Telefone 2: </td>
			<td>{$formulario['telefone2']}</td>
		</tr>";

		$tabela .=
		"<tr>
			<td>E-mail: </td>
			<td>{$formulario['email']}</td>
		</tr>";

		$tabela .= "</tbody>";
		$tabela .= "</table>";

		$this->email->subject('Formulário de Indicação');
		$this->email->message("<h2>FORMULÁRIO DE INDICAÇÃO DE CLIENTES</h2>".
			$tabela);

    $this->email->send();
	}

	
}