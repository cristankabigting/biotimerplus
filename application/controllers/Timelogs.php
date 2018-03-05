<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timelogs extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('timelogs');
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

	public function getEmployeeLogs2() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$employeecode 	= $this->input->get('employeecode');
		$periodstart 	= $this->input->get('periodstart');
		$periodend 		= $this->input->get('periodend');
		echo json_encode($this->dropdown->getEmployeeLogs2($employeecode,$periodstart,$periodend));			
	}
	
}