<?php

class Fabrica_model extends CI_Model {

    public function buscaFranquias() {
        $this->db->select("*");
        $this->db->from("franquias");
        $this->db->where("ativo_franquias",1);

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function buscaBolos() {
        $this->db->select("*");
        $this->db->from("tipo_bolos");

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function buscaVendedores() {
        $this->db->select("*");
        $this->db->from("vendedores");

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function realizaLogin($dados) {
        $this->db->select("*");
        $this->db->from("usuarios");
        $this->db->where("login_usuario",$dados['login_usuario']);
        $this->db->where("senha_usuario",$dados['senha_usuario']);
        $this->db->where("franquia_usuario",$dados['franquia_usuario']);
        $query = $this->db->get();

        if($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getCliente($dado) {
        $this->db->select("*");
        $this->db->from("clientes");
        $this->db->or_like("cpf_cliente",$dado);
        $this->db->or_like("nome_cliente",$dado);

        $query = $this->db->get();

        return $query->result();
    }

    public function getDadosCliente($id) {
        $this->db->select("*");
        $this->db->from("clientes");
        $this->db->where("codigo_cliente",$id);

        $query = $this->db->get();

        return $query->result();
    }

    public function getDadosBolos($id) {
        $this->db->select("
        COUNT(IF(codigo_tipo_bolos = 1, 20, NULL)) as 'bolo_pote',
        COUNT(IF(codigo_tipo_bolos = 2, 20, NULL)) as 'bolo_festa',
        COUNT(IF(codigo_tipo_bolos = 3, 20, NULL)) as 'bolo_pequeno',
        COUNT(IF(codigo_tipo_bolos = 4, 20, NULL)) as 'bolo_grande',
        COUNT(IF(codigo_tipo_bolos = 5, 20, NULL)) as 'bolo_recheado'");
        $this->db->from("cartao_fidelidade");
        $this->db->where("codigo_clientes",$id);
        $this->db->where("status_fidelidade",1);

        $query = $this->db->get();

        // print_r($this->db->last_query());exit;

        return $query->result();
    }

    public function fidelidadePendente($id,$tipo) {
        $this->db->select("*");
        $this->db->from("resgate");
        $this->db->where("codigo_clientes",$id);
        $this->db->join("tipo_bolos","tipo_bolos.codigo_tipo_bolos = resgate.codigo_tipo_bolos",'left');

        if($tipo == "pendente") {
            $this->db->where("status_resgate",0);
        } else {
            $this->db->where("status_resgate",1);
        }

        $query = $this->db->get();
        // print_r($this->db->last_query());exit;

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function fidelidadeHistorico($id) {
        $this->db->select("*");
        $this->db->from("cartao_fidelidade");
        $this->db->where("codigo_clientes",$id);
        $this->db->where("status_fidelidade",2);
        $this->db->join("tipo_bolos","tipo_bolos.codigo_tipo_bolos = cartao_fidelidade.codigo_tipo_bolos");
        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function resgatarPromo($id) {

        setlocale(LC_ALL, "pt-BR");
        date_default_timezone_set('America/Araguaina');

        $this->db->set("status_resgate",1);
        $this->db->set("dataefetivado_resgate",date("Y-m-d H:m:s"));
        $this->db->where("codigo_resgate",$id);

        if($this->db->update("resgate")) {
            return true;
        } else {
            return false;
        }
    }

    

    public function getClienteDados($cod) {
        $this->db->select("
        COUNT(case when cartao_fidelidade.codigo_tipo_bolos = 1 then cartao_fidelidade.codigo_tipo_bolos end) AS bolo_pote,
        COUNT(case when cartao_fidelidade.codigo_tipo_bolos = 2 then cartao_fidelidade.codigo_tipo_bolos end) AS bolo,
        ");
        $this->db->from("cartao_fidelidade");
        $this->db->where("codigo_clientes",$cod);
        $this->db->where("cartao_fidelidade.status_fidelidade",1);
        $this->db->join("tipo_fidelidade","tipo_fidelidade.codigo_tipo_bolos = cartao_fidelidade.codigo_tipo_bolos");
        $this->db->order_by("cartao_fidelidade.status_fidelidade","DESC");

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            // print_r($this->db->last_query());exit;
            return $query->result();
        } else {
            return false;
        }
    }

    public function getClienteDados3($cod) {
        $this->db->select("*,
        ");
        $this->db->from("cartao_fidelidade");
        $this->db->where("codigo_clientes",$cod);
        $this->db->join("tipo_fidelidade","tipo_fidelidade.codigo_tipo_bolos = cartao_fidelidade.codigo_tipo_bolos");

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getClienteDados2($cod) {
        $this->db->select("*");
        $this->db->from("clientes");
        $this->db->where("codigo_cliente",$cod);

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function checkCPF($cpf) {
        $this->db->select("*");
        $this->db->from("clientes");
        $this->db->where("cpf_cliente",$cpf);

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return false;
        } else {
            return true;
        }
    }

    public function cadastrarCliente($dados) {

        if($this->db->insert("clientes",$dados)) {
            // print_r($this->db->last_query());exit;
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function cadastraFidelidade($dados) {
        if($this->db->insert("cartao_fidelidade",$dados)) {
            return true;
        } else {
            return false;
        }
    }

    public function ativaPromocao($dados) {
        $this->db->set("status_fidelidade",2);
        $this->db->where("codigo_clientes",$dados['codigo_clientes']);
        $this->db->where("codigo_tipo_bolos",$dados['codigo_tipo_bolos']);

        if($this->db->update("cartao_fidelidade")) {
            return true;
        } else {
            return false;
        }
    }

    public function cadastraResgate($dados) {
        if($this->db->insert("resgate",$dados)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function updateResgate($id) {

        setlocale(LC_ALL, "pt-BR");
        date_default_timezone_set('America/Araguaina');

        $this->db->set("status_resgate",1);
        $this->db->set("dataefetivado_resgate",date("Y-m-d H:m:s"));
        $this->db->where("codigo_resgate",$id);

        if($this->db->update("resgate")) {
            return true;
        } else {
            return false;
        }
    }

    public function buscaClientes() {
        $this->db->select("*");
        $this->db->from("clientes");

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function removerFidelidade($cod) {
        $this->db->where('codigo_cartao', $cod);
        if($this->db->delete('cartao_fidelidade')) {
            return true;
        } else {
            return false;
        }
    }

    public function buscaCupons() {
        $this->db->select("COUNT(codigo_cartao) as 'Total_Vendidos'");
        $this->db->from("cartao_fidelidade");
        
        $query = $this->db->get();
        // print_r($this->db->last_query());exit;

        return $query->row();
    }

    public function buscaTotalClientes() {
        $this->db->select("COUNT(codigo_cliente) as 'Total_Clientes'");
        $this->db->from("clientes");
        
        $query = $this->db->get();
        // print_r($this->db->last_query());exit;

        return $query->row();
    }

    public function buscaTotalVendido() {
        return 0;
    }

    public function buscaClienteEditar($id) {
        $this->db->select("*");
        $this->db->from("clientes");
        $this->db->where("codigo_cliente",$id);

        $query = $this->db->get();

        if($query->num_rows() >= 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function editarCliente($dados,$cod) {
        $this->db->where("codigo_cliente",$cod);

        if($this->db->update('clientes', $dados)) {
            // print_r($this->db->last_query());exit;
            return true;
        } else {
            return false;
        }
    }

    public function removerCliente($id) {
        $this->db->where("codigo_cliente",$id);

        if($this->db->delete("clientes")) {
            return true;
        } else {
            return false;
        }
    }
}
?>