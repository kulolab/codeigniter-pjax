<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['content'] = $this->load->view('beranda', [] ,true);
		$this->load->view('welcome_message', $data);
	}
	public function artikel()
	{
		$data['content'] = $this->load->view('artikel', [] ,true);
		$this->load->view('welcome_message', $data);
	}
	public function tentang()
	{
		$data['content'] = $this->load->view('tentang', [] ,true);
		$this->load->view('welcome_message', $data);
	}
}
