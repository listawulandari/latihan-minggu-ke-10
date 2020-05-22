<?php 

class kategori extends CI_Controller{

	public function makanan()
	{
		$data['makanan'] = $this->model_kategori->
			data_makanan()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('makanan',$data);
			$this->load->view('templates/footer');

	}

	public function rumah()
	{
		$data['rumah'] = $this->model_kategori->
			data_rumah()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('rumah',$data);
			$this->load->view('templates/footer');

	}

}
 