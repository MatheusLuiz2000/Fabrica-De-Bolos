<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller que manuseia o formulario interno.
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("funcoes_helper");
		$this->load->model('fabrica_model', 'fabrica_model');
	}

	public function index(){

		$dados['franquias'] = $this->fabrica_model->buscaFranquias();

		//View carrega a pagina inicial
		$this->load->view("inicio/entrar",$dados);
	}
	
	public function logar() {

		$dados = array(
			'login_usuario' => $this->input->post("login"),
			'senha_usuario' => hash_hmac("sha1", formata_string($this->input->post("senha"), 'protect'), KEY),
			'franquia_usuario' => $this->input->post("franquia")
		);

		//Se não estiver vazio
		if(!empty($dados['login_usuario']) && !empty($dados['senha_usuario'] && !empty($dados['franquia_usuario']))) {

			//Busca os dados do candidato com email ou senha;
			$login = $this->fabrica_model->realizaLogin($dados);

			//Verifica se o candidato está ativo ou não.
			if($login) {
				if($login[0]->ativo_usuario == 0) {
					echo json_encode(['retorno' => false, 'msg' => "Sua conta está inativa!"]);exit;
				} else {
						$dados = array(
							'codigo_usuario' => $login[0]->codigo_usuario,
						);
						$this->session->set_userdata('usuario_sess', $dados);
	
						echo json_encode(['retorno' => true, 'validado' => true, 'msg' => "Login efetuado com sucesso!"]);exit;
				}
			} else {
				echo json_encode(['retorno' => false, 'msg' => "Email ou senha incorretos!"]);exit;
			}
		} else {
			//Usuario ou senha não existentes ou diferentes no banco!
			echo json_encode(['retorno' => false, 'msg' => "Preencha todos os dados!"]);exit;
		}
	}
}
