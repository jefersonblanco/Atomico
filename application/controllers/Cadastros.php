<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastros extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('cadastros_model');
	}

	public function index() {

		$list = $this->cadastros_model->listar();
		$data = array(
			'results' => $list
		);
		$this->load->view('listar', $data);

	}

	public function adicionar() {

		$this->load->view('adicionar');
	}

	public function editar() {
	   $Id = filter_input(INPUT_GET, 'Id', FILTER_VALIDATE_INT);
	   $data = $this->cadastros_model->getById($Id);
	   if ($data){
	   	 $this->load->view('editar', $data);
	   } else {
          header("location: " . base_url("index.php/cadastros")); 

	   }

    }

    public function execute() {
    	$acao = $this->uri->segment("3");
    	header('Content-Type: application/json');

    	$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    	if ($acao == 'adicionar'){
    		$json = $this->cadastros_model->adicionar($data);
    	} elseif($acao == 'editar'){
    		$Id = filter_input(INPUT_GET, "Id", FILTER_VALIDATE_INT);
    		$json = $this->cadastros_model->editar($data, $Id);
    	} elseif($acao == 'excluir'){
    		$Id = filter_input(INPUT_GET, "Id", FILTER_VALIDATE_INT);
    		$json = $this->cadastros_model->excluir($Id);
    	}

    	echo json_encode($json);

    }
}

