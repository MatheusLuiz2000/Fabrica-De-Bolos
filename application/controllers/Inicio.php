<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller que manuseia o formulario interno.
class Inicio extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("funcoes_helper");
		$this->load->model('fabrica_model', 'fabrica_model');
	}

	public function index(){

        //CSS
        $topo['css'] = array(
            'assets/plugins/morris/morris.css',
            'assets/css/bootstrap.min.css',
            'assets/css/icons.css',
            'assets/css/style.css',
        );
        
        //JS
        $rodape['js'] = array(
            "assets/js/jquery.min.js",
            "assets/js/bootstrap.bundle.min.js",
            "assets/js/modernizr.min.js",
            "assets/js/detect.js",
            "assets/js/fastclick.js",
            "assets/js/jquery.slimscroll.js",
            "assets/js/jquery.blockUI.js",
            "assets/js/waves.js",
            "assets/js/jquery.nicescroll.js",
            "assets/js/jquery.scrollTo.min.js",
            "assets/plugins/skycons/skycons.min.js",
            "assets/plugins/peity/jquery.peity.min.js",
            "assets/plugins/morris/morris.min.js",
            "assets/plugins/raphael/raphael-min.js",
            "assets/pages/dashboard.js",
            "assets/js/app.js",
		);

        //Dados para view
        $dados['franquias'] = $this->fabrica_model->buscaFranquias();
        $topo['titulo'] = "Fábrica de Bolos - Dashboard";
        $dados['bolos_vendidos'] = $this->fabrica_model->buscaCupons();
        $dados['clientes'] = $this->fabrica_model->buscaTotalClientes();

        //View carrega header
        $this->load->view("sistema/header",$topo);

		//View carrega a pagina inicial
        $this->load->view("sistema/dashboard",$dados);

        //View carrega o rodape
        $this->load->view("sistema/rodape",$rodape);
    }

    public function cadastrarCliente() {

            //CSS
            $topo['css'] = array(
                'assets/plugins/morris/morris.css',
                'assets/css/bootstrap.min.css',
                'assets/plugins/toast/toastr.min.css',
                'assets/css/icons.css',
                'assets/css/style.css',

            );
            
            //JS
            $rodape['js'] = array(
                "assets/js/jquery.min.js",
                "assets/js/bootstrap.bundle.min.js",
                "assets/js/modernizr.min.js",
                "assets/js/detect.js",
                "assets/js/fastclick.js",
                "assets/js/jquery.slimscroll.js",
                "assets/js/jquery.blockUI.js",
                "assets/js/waves.js",
                "assets/js/jquery.nicescroll.js",
                "assets/js/jquery.scrollTo.min.js",
                "assets/plugins/skycons/skycons.min.js",
                "assets/plugins/peity/jquery.peity.min.js",
                "assets/plugins/raphael/raphael-min.js",
                "assets/js/app.js",
                "assets/plugins/mask/jquery.mask.min.js",
                "assets/plugins/toast/toastr.min.js",
                "assets/js/funcoes.js",
                "assets/js/mascaras.js",
                "assets/js/cadastrarCliente.js",
            );
    
            //Dados para view
            $topo['titulo'] = "Fábrica de Bolos - Cadastrar Cliente";
            $dados['franquias'] = $this->fabrica_model->buscaFranquias();
            $dados['bolos'] = $this->fabrica_model->buscaBolos();

            //View carrega header
            $this->load->view("sistema/header",$topo);
    
            //View carrega a pagina inicial
            $this->load->view("sistema/cadastrarCliente",$dados);
    
            //View carrega o rodape
            $this->load->view("sistema/rodape",$rodape);
    }

    
    public function clientes() {
        //CSS
        $topo['css'] = array(
            "assets/plugins/datatables/dataTables.bootstrap4.min.css",
            "assets/plugins/datatables/buttons.bootstrap4.min.css",
            "assets/plugins/datatables/responsive.bootstrap4.min.css",
            'assets/css/bootstrap.min.css',
            'assets/plugins/toast/toastr.min.css',
            'assets/css/icons.css',
            'assets/css/style.css',

        );
        
        //JS
        $rodape['js'] = array(
            "assets/js/jquery.min.js",
            "assets/js/bootstrap.bundle.min.js",
            "assets/js/modernizr.min.js",
            "assets/js/detect.js",
            "assets/js/fastclick.js",
            "assets/js/jquery.slimscroll.js",
            "assets/js/jquery.blockUI.js",
            "assets/js/waves.js",
            "assets/js/jquery.nicescroll.js",
            "assets/js/jquery.scrollTo.min.js",
            "assets/plugins/skycons/skycons.min.js",
            "assets/plugins/peity/jquery.peity.min.js",
            "assets/plugins/raphael/raphael-min.js",
            "assets/plugins/datatables/jquery.dataTables.min.js",
            "assets/plugins/datatables/dataTables.bootstrap4.min.js",
            "assets/plugins/datatables/dataTables.buttons.min.js",
            "assets/plugins/datatables/buttons.bootstrap4.min.js",
            "assets/plugins/datatables/jszip.min.js",
            "assets/plugins/datatables/pdfmake.min.js",
            "assets/plugins/datatables/vfs_fonts.js",
            "assets/plugins/datatables/buttons.html5.min.js",
            "assets/plugins/datatables/buttons.print.min.js",
            "assets/plugins/datatables/buttons.colVis.min.js",
            "assets/plugins/datatables/dataTables.responsive.min.js",
            "assets/plugins/datatables/responsive.bootstrap4.min.js",
            "assets/pages/datatables.init.js",
            "assets/js/app.js",
            "assets/plugins/mask/jquery.mask.min.js",
            "assets/plugins/toast/toastr.min.js",
            "assets/js/funcoes.js",
            "assets/js/mascaras.js",
            "assets/js/cadastrarCliente.js",
        );

        //Dados para view
        $topo['titulo'] = "Fábrica de Bolos - Clientes";
        $dados['clientes'] = $this->fabrica_model->buscaClientes();

        //View carrega header
        $this->load->view("sistema/header",$topo);

        //View carrega a pagina inicial
        $this->load->view("sistema/clientes",$dados);

        //View carrega o rodape
        $this->load->view("sistema/rodape",$rodape);
    }

    public function buscaCliente() {

        //CSS
        $topo['css'] = array(
            'assets/css/bootstrap.min.css',
            'assets/plugins/toast/toastr.min.css',
            'assets/plugins/autocomplet/easy-autocomplete.min.css',
            'assets/css/icons.css',
            'assets/css/style.css',
        );
        
        //JS
        $rodape['js'] = array(
            "assets/js/jquery.min.js",
            "assets/js/bootstrap.bundle.min.js",
            "assets/js/modernizr.min.js",
            "assets/js/detect.js",
            "assets/js/fastclick.js",
            "assets/js/jquery.slimscroll.js",
            "assets/js/jquery.blockUI.js",
            "assets/js/waves.js",
            "assets/js/jquery.nicescroll.js",
            "assets/js/jquery.scrollTo.min.js",
            "assets/plugins/skycons/skycons.min.js",
            "assets/plugins/peity/jquery.peity.min.js",
            "assets/plugins/raphael/raphael-min.js",
            "assets/js/app.js",
            "assets/plugins/mask/jquery.mask.min.js",
            "assets/plugins/toast/toastr.min.js",
            "assets/js/funcoes.js",
            "assets/js/mascaras.js",
            "assets/plugins/autocomplet/jquery.easy-autocomplete.min.js",
            "assets/js/buscaCliente.js"
        );

        //Dados para view
        $topo['titulo'] = "Fábrica de Bolos - Buscar Cliente";

        //View carrega header
        $this->load->view("sistema/header",$topo);

        //View carrega a pagina inicial
        $this->load->view("sistema/buscaCliente");

        //View carrega o rodape
        $this->load->view("sistema/rodape",$rodape);
    }
    
    public function getCliente() {

        $cliente = $this->fabrica_model->getCliente($this->input->post("phrase"));

        echo json_encode($cliente,JSON_UNESCAPED_UNICODE);
    }

    public function dadosCliente() {

        $id = $this->input->get("id");
        
        if($id == "" || empty($id)) {
            echo "Cliente não encontrado";
        } else {

            //CSS
                $topo['css'] = array(
                'assets/css/bootstrap.min.css',
                'assets/plugins/toast/toastr.min.css',
                'assets/css/icons.css',
                'assets/css/style.css',
            );
            
            //JS
            $rodape['js'] = array(
                "assets/js/jquery.min.js",
                "assets/js/bootstrap.bundle.min.js",
                "assets/js/modernizr.min.js",
                "assets/js/detect.js",
                "assets/js/fastclick.js",
                "assets/js/jquery.slimscroll.js",
                "assets/js/jquery.blockUI.js",
                "assets/js/waves.js",
                "assets/js/jquery.nicescroll.js",
                "assets/js/jquery.scrollTo.min.js",
                "assets/plugins/skycons/skycons.min.js",
                "assets/plugins/peity/jquery.peity.min.js",
                "assets/plugins/raphael/raphael-min.js",
                "assets/js/app.js",
                "assets/plugins/mask/jquery.mask.min.js",
                "assets/plugins/toast/toastr.min.js",
                "assets/js/funcoes.js",
                "assets/js/mascaras.js",
                "assets/js/dadosCliente.js"
            );

            //Dados para view
            $topo['titulo'] = "Fábrica de Bolos - Cliente";
            $dados['cliente'] = $this->fabrica_model->getDadosCliente($id);
            $dados['tipos_bolos'] = $this->fabrica_model->buscaBolos();
            $dados['dados_bolos'] =  $this->fabrica_model->getDadosBolos($id);
            $dados['fidelidade_pendente'] = $this->fabrica_model->fidelidadePendente($id,'pendente');
            $dados['resgate_historico'] = $this->fabrica_model->fidelidadePendente($id,'historico');
            $dados['fidelidade_historico'] = $this->fabrica_model->fidelidadeHistorico($id);
            
            //View carrega header
            $this->load->view("sistema/header",$topo);

            //View carrega a pagina inicial
            $this->load->view("sistema/cliente",$dados);

            //View carrega o rodape
            $this->load->view("sistema/rodape",$rodape); 
        }
    }
    public function cadastrarClienteAction() {
        $dados = array(
            'nome_cliente' => $this->input->post("nome"),
            'cpf_cliente' => $this->input->post("cpf"),
            'franquia_derivadacliente' => $this->input->post("franquia"),
            'telefone_cliente' => $this->input->post("telefone"),
            'email_cliente' => $this->input->post("email"),
            'datanascimento_cliente' => Data_to_Mysql($this->input->post("data")),
        );

        $checkCPF = $this->fabrica_model->checkCPF($dados['cpf_cliente']);

        if($checkCPF) {

            $insert = $this->fabrica_model->cadastrarCliente($dados);

            if($insert) {
                echo json_encode(['retorno' => true, 'msg' => "Cadastrado com sucesso!"]);exit;
            } else {
                echo json_encode(['retorno' => false, 'msg' => "Erro ao cadastrar"]);exit;
            }
        } else {
            echo json_encode(['retorno' => false, 'msg' => "CPF já cadastrado na base."]);exit;
        }
    }

    public function cadastraFidelidade() {

        setlocale(LC_ALL, "pt-BR");
        date_default_timezone_set('America/Araguaina');

        $resgate = "";

        $data = $this->validateDate(Data_to_Mysql($this->input->post("data")));
        $premio = $this->input->post("premio");

        if(!$data) {
            echo json_encode(['retorno' => false, 'msg' => "Data incorreta!"]);exit;
        }

        $data_banco = Data_to_Mysql($this->input->post("data")) . " 09:00:00";

        if(Data_to_Mysql($this->input->post("data")) == date("Y-m-d")) {
            $data_banco = Data_to_Mysql($this->input->post("data")) . " " . date("H:i:s");
        }
        
        $dados = array(
            'codigo_clientes' =>  $this->input->post("codigo_cliente"),
            'codigo_tipo_bolos' => $this->input->post("tipo_bolo"),
            'datacadastro_fidelidade' => $data_banco
        );

        $insert = $this->fabrica_model->cadastraFidelidade($dados);

        $premio_response = false;

        if($premio != 0) {
            $premio_response = true;

            $dados = array(
            'codigo_clientes' =>  $this->input->post("codigo_cliente"),
            'codigo_tipo_bolos' => $premio
           );

           $dadosResgate = array(
            'codigo_clientes' => $this->input->post("codigo_cliente"),
            'codigo_tipo_bolos' => $premio,
            'status_resgate' => 0
           );

           $ativar = $this->fabrica_model->ativaPromocao($dados);
           $resgate = $this->fabrica_model->cadastraResgate($dadosResgate);
        }

        if($insert) {
            echo json_encode(['retorno' => true, 'msg' => "Fidelidade cadastrado com sucesso!" ,'premio' => $premio_response ,'codigo_resgate' => $resgate]);exit;
        } else {
            echo json_encode(['retorno' => false, 'msg' => "Erro ao cadastrar"]);exit;
        }
    }

    public function finalizaPromocao() {

        $cadastrarResgate = $this->fabrica_model->updateResgate($this->input->post("cod"));

        if($cadastrarResgate) {
            echo json_encode(['retorno' => true, 'msg' => "Promocao Resgatada com sucesso"]);exit;
        } else {
            echo json_encode(['retorno' => false, 'msg' => "Erro ao cadastrar2"]);exit;
        }
    }


    private function validateDate($date, $format = 'Y-m-d'){
        $d = DateTime::createFromFormat($format, $date);
        // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
        return $d && $d->format($format) === $date;
    }

    public function removeFidelidade() {
        $cod = $this->input->post("cod");
        $remover = $this->fabrica_model->removerFidelidade($cod);

        if($remover) {
            echo json_encode(['retorno' => true, 'msg' => "Fidelidade removido com sucesso!"]);exit;
        } else {
            echo json_encode(['retorno' => false, 'msg' => "Erro ao remover"]);exit;
        }

    }

    public function resgatarPromo() {
        $cod = $this->input->post("id");

        $resgatar = $this->fabrica_model->resgatarPromo($cod);

        if($resgatar) {
            echo json_encode(['retorno' => true, 'msg' => "Promoção Resgatada com sucesso"]);exit;
        } else {
            echo json_encode(['retorno' => false, 'msg' => "Erro ao resgatar"]);exit;
        }
    }
}

