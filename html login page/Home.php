<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('search1');
	}

	public function search()
	{
		if ($this->input->post()){
			$keyword =$this->input->post('search');
			$credentials = array 
			(
				'keyword' => $keyword
			);
			
			$this->load->model('Home_model');
			$data['result'] = $this->Home_model->getuser($credentials);
			$this->load->view('search', $data);
		} else{
			$this->load->view('search1');
		}
	}
}
