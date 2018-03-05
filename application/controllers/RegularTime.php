<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegularTime extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->view('dtr_regular_time');
	}

	public function logtime() 
	{
		$this->load->database('default');
		$scancode 	= $this->input->post('scancode');
		$image 		= $this->input->post('image'); 
		$this->load->model('regular_time');
		$result = $this->regular_time->process($scancode,$image);
		echo json_encode($result);
	}

	public function messagestatus() 
	{
		$this->load->database('default');
		$this->load->model('messagestatus');
		$result = $this->messagestatus->getmessages();
		echo $result;
	}

}