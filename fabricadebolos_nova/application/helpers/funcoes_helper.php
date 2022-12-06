<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('buscaInfocep')) {

    function buscaDadosCep($cep) {   
        $resultado = @file_get_contents('https://api.postmon.com.br/v1/cep/'.$cep.'');

        $resultado = json_decode($resultado, true);

        if($resultado) {
            return $resultado;
        } else {
            return false;
        }
    }
}

if(!function_exists('formata_string')){
    function formata_string($value, $tipo)
    {
        $CI =& get_instance();
        $CI->load->library('sanitizer');

        switch ($tipo){
            case 'email':
                $retorno = $CI->sanitizer->email($value);
                $retorno = mb_strtolower($retorno);
                break;
            case 'nome':
                $retorno = $CI->sanitizer->alfabetico($value, true, true);
                $retorno = mb_strtolower($retorno);
                $retorno = ucwords($retorno);
                break;
            case 'string':
                $retorno = $CI->sanitizer->alfanumerico($value, true, true);
                $retorno = mb_strtolower($retorno);
                $retorno = ucwords($retorno);
                break;
            case 'sanitize':
                $retorno = $CI->sanitizer->alfanumerico($value, true, true);
                break;
            case 'string_semacento':
                $retorno = $CI->sanitizer->alfanumerico($value, false, true);
                break;
            case 'integer':
                $retorno = $CI->sanitizer->integer($value);
                break;
            case 'numeric':
                $retorno = $CI->sanitizer->numerico($value);
                break;
            case 'float':
                $retorno = $CI->sanitizer->float($value);
                break;
            case 'money':
                $retorno = $CI->sanitizer->money($value);
                break;
            case 'url':
                $retorno = $CI->sanitizer->url($value);
                break;
            case 'protect':
                $retorno = $CI->sanitizer->protect($value);
                break;
        }

        return $retorno;
    }
}

if( ! function_exists('envia_email')){
    function envia_email($email, $mensagem, $copia = '', $titulo = 'Projeto Bayer', $sponsor = false, $attach = '') {

        $CI =& get_instance();
        $CI->load->library('email');

        $CI->email->clear(true);

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'br966.hostgator.com.br',
            'smtp_pass' => 'mat12345',
            'smtp_user' => 'contato@infinitywebdesign.com.br',
            'smtp_port' => 587,
            'charset'   => 'utf-8',
            'mailtype'  => 'html',
            'newline'   => '\r\n',
        ];

        $CI->email->initialize($config);

        $CI->email->from('contato@infinitywebdesign.com.br', 'Projeto Bayer');
        $CI->email->to($email);

        
        if( $copia ) {
            $CI->email->bcc(explode(",", $copia));
        }

        if( !empty($attach) ) {
            $CI->email->attach($attach);
        }

        $conteudo = $CI->load->view('email/template_email', [ 'mensagem' => $mensagem, 'sponsor' => $sponsor ], true);
 
        $CI->email->subject($titulo);
        $CI->email->message($conteudo);

        if( $CI->email->send() ){

            

            return true;
        } else {
            print_r($CI->email->print_debugger());exit;
        }
        return false;
    }
}


if (!function_exists('Data_to_Mysql')) {

    function Data_to_Mysql($data) {
        $data_banco = explode('/', $data);
        $retorno = $data_banco[2] . '-' . $data_banco[1] . '-' . $data_banco[0];
        return $retorno;
    }

}

if (!function_exists('formata_moeda_banco')) {

    function formata_moeda_banco($moeda) {
        $aux = str_replace('.', '', $moeda);
        $retorno = str_replace(',', '.', $aux);
        return $retorno;
    }

}

if (!function_exists('Mysql_to_Data')) {

    function Mysql_to_Data($data) {
        if (!empty($data)) {
            list ($y, $m, $d) = explode('-', $data);
            if ($y <= 1970) {
                $retorno = sprintf("%02d/%02d/%04d", $d, $m, $y);
                //$retorno = sprintf("%04d-%02d-%02d", $y, $m, $d);
            } else {
                $retorno = date('d/m/Y', strtotime($data));
            }

            return $retorno;
        } else
            return '';
    }

}

if (!function_exists('formatCnpjCpf')) {
    function formatCnpjCpf($value){
        $cnpj_cpf = preg_replace("/\D/", '', $value);
        
        if (strlen($cnpj_cpf) === 11) {
            return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
        } 
        
        return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }
}

if (!function_exists('Mask1')) {
    function Mask1($mask,$str){

        $str = str_replace(" ","",$str);
    
        for($i=0;$i<strlen($str);$i++){
            $mask[strpos($mask,"#")] = $str[$i];
        }
    
        return $mask;
    
    }
}







if (!function_exists('Mysql_to_DataHora')) {

    function Mysql_to_DataHora($data) {
        $retorno = date('d/m/Y H:i', strtotime($data));
        return $retorno;
    }

}

if (!function_exists('clean_string')) {
    function clean_string($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }
}

if (!function_exists('formata_moeda')) {

    function formata_moeda($moeda) {
        return number_format($moeda, 2, ',', '.');
    }

}

