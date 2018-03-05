<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adjustments extends CI_Controller {

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
		$this->load->view('adjustments');
	}

	public function savePayrollInput() 
	{
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('payrolladjustments');
		$payrollInput = $this->input->post('data');
		echo $this->payrolladjustments->savePayrollInput($payrollInput);
	}

	public function getPayrollInputs() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('payrolladjustments');
		echo json_encode($this->payrolladjustments->getPayrollInputs());			
	}

	public function getPayrollInput() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('payrolladjustments');
		$id = $this->input->post('id');
		echo json_encode($this->payrolladjustments->getPayrollInput($id));			
	}

	public function updateAllowanceType(){
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('payrolladjustments');
		$allowanceData = $this->input->post('data');
		echo $this->payrolladjustments->updateAllowanceType($allowanceData);					
	}
}