<?php

class Cadastros_model extends CI_Model {

	public function listar() {
   
      $results = $this->db->get('cadastros')->result_array();
      return $results;

	}

    public function getById($Id) {
       $data = $this->db->get_where('cadastros', array('Id' => $Id))->result_array();
       if (count($data)>0){
         return $data[0];
       }  else{
         return false;
       }
    }


    public function adicionar(array $data) {
    	if(empty($data['nome']) ){
    		$success = false;
    		$message = 'O campo nome deve ser preenchido';
    		$redirect = null;
    	} else{
    		$insert = $this->db->insert('cadastros', $data);

    		if ($insert == true) {
    			$success = true;
    			$message = 'Cadastro realizado com sucesso';
    			$redirect = base_url('index.php/cadastros');
    		} else {
    			$success = false;
    			$message = 'Ocorreu um erro ao cadastrar';
    			$redirect = null;

    		}
    	}    	
    	return array(
    		'success' => $success,
    		'message' => $message,
    		'redirect' => $redirect

    	);

    }

    public function editar($data, $Id) {
         $update = $this->db->update('cadastros', $data, "Id={$Id}");

    	if ($update == true) {
    		$success = true;
    		$message = 'Editado com sucesso';
    		$redirect = base_url('index.php/cadastros');
    	} else {
    		$success = false;
    		$message = 'Ocorreu um erro ao editar';
    		$redirect = null;

    	}
    	return array(
    		'success' => $success,
    		'message' => $message,
    		'redirect' => $redirect

    	);


    }

    public function excluir($Id) {
         $delete = $this->db->delete('cadastros', "Id={$Id}");

    	if ($delete == true) {
    		$success = true;
    		$message = 'Cadastro excluido com sucesso';
    		$redirect = base_url();
    	} else {
    		$success = false;
    		$message = 'Ocorreu um erro ao excluir';
    		$redirect = null;

    	}
    	return array(
    		'success' => $success,
    		'message' => $message,
    		'redirect' => $redirect

    	);


    }

}

