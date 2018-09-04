<?php defined('BASEPATH') or exit('Acesso não permitido!');

class Pages extends CI_Controller
{
	public function __construct()
	{		
		parent::__construct();
	}
	
	public function view($page = 'home')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['title'] = ucfirst($page); 
		
		$data['data_atual'] = date('Ym');
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}