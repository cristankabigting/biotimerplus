<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adjustments extends CI_Controller {

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