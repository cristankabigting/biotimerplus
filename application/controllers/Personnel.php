<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personnel extends CI_Controller {

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
		$this->load->view('personnel');
	}

	public function getProjects()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->model('dropdown');
		$result = $this->dropdown->dropdownProject();
		echo $result;
	}

	public function getDepartment()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->model('dropdown');
		$result = $this->dropdown->dropdownDepartment();
		echo $result;
	}

	public function getEmploymentCategory()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->model('dropdown');
		$result = $this->dropdown->dropdownEmploymentCategory();
		echo $result;
	}

	public function getDesignation()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->model('dropdown');
		$result = $this->dropdown->dropdownDesignation();
		echo $result;
	}

	public function getEmployees()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->model('dropdown');
		$result = $this->dropdown->dropdownEmployees();
		echo $result;
	}

	public function getEmployeeData()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->model('dropdown');
		$employeecode 	= $this->input->post('employeecode');
		$employeedata 	= $this->dropdown->getEmployeeData($employeecode);
		echo json_encode($employeedata);
	}

	public function saveEmployeeData()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$this->load->model('dropdown');
		parse_str($this->input->post('data'), $employeeData);
		$this->dropdown->saveEmployeeData($employeeData);
	}

	public function calculate()
	{
		$this->load->database('default');
		$this->load->helper('url');
		$salarytype = $this->input->post('salarytype');
		$basicsalary = $this->input->post('basicsalary');
		$params = array('salarytype' =>$salarytype, 'basicsalary' =>$basicsalary);
		$this->load->library('payrollcalculation', $params);
		//$monthlyrate = $this->payrollcalculation->monthlyrate;
		$data = array(
			'monthlyrate'=>number_format($this->payrollcalculation->monthlyrate,2,".",","),
			'semimonthlyrate'=>number_format($this->payrollcalculation->semimonthlyrate,2,".",","),
			'weeklyrate'=>number_format($this->payrollcalculation->weeklyrate,2,".",","),
			'dailyrate'=>number_format($this->payrollcalculation->dailyrate,2,".",","),
			'hourlyrate'=>number_format($this->payrollcalculation->hourlyrate,2,".",","),
			'minuterate'=>number_format($this->payrollcalculation->minuterate,2,".",","),
			'regular_pay_rate'=>number_format($this->payrollcalculation->regular_pay_rate,2,".",","),
			'restday_pay_rate'=>number_format($this->payrollcalculation->restday_pay_rate,2,".",","),
			'legal_holiday_pay_rate'=>number_format($this->payrollcalculation->legal_holiday_pay_rate,2,".",","),
			'special_holiday_pay_rate'=>number_format($this->payrollcalculation->special_holiday_pay_rate,2,".",","),
			'legal_holiday_restday_pay_rate'=>number_format($this->payrollcalculation->legal_holiday_restday_pay_rate,2,".",","),
			'special_holiday_restday_pay_rate'=>number_format($this->payrollcalculation->special_holiday_restday_pay_rate,2,".",","),
			'regular_ot_rate'=>number_format($this->payrollcalculation->regular_ot_rate,2,".",","),
			'restday_ot_rate'=>number_format($this->payrollcalculation->restday_ot_rate,2,".",","),
			'legal_holiday_ot_rate'=>number_format($this->payrollcalculation->legal_holiday_ot_rate,2,".",","),
			'special_holiday_ot_rate'=>number_format($this->payrollcalculation->special_holiday_ot_rate,2,".",","),
			'legal_holiday_restday_ot_rate'=>number_format($this->payrollcalculation->legal_holiday_restday_ot_rate,2,".",","),
			'special_holiday_restday_ot_rate'=>number_format($this->payrollcalculation->special_holiday_restday_ot_rate,2,".",",")			
		);

		echo json_encode($data);

		//$this->load->model('dropdown');
		//$result = $this->dropdown->dropdownDesignation();
		//echo $result;
	}

	public function ProcessIncomeUsingHours() 
	{
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$incomeData = $this->input->post('data');
		echo $this->dropdown->processIncomeUsingHours($incomeData);
	}

	public function ProcessIncomeUsingAmount() 
	{
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$incomeData = $this->input->post('data');
		echo $this->dropdown->processIncomeUsingAmount($incomeData);
	}

	public function ProcessDeductionUsingHours() 
	{
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$deductionData = $this->input->post('data');
		echo $this->dropdown->processDeductionUsingHours($deductionData);
	}

	public function ProcessDeductionUsingAmount() 
	{
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$deductionData = $this->input->post('data');
		echo $this->dropdown->processDeductionUsingAmount($deductionData);
	}

	public function getManualAdjustments() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		echo json_encode($this->dropdown->getManualAdjustments());			
	}

	public function getEmployeeAdjustments() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$employeecode = $this->input->get('employeecode');
		echo json_encode($this->dropdown->getEmployeeAdjustments($employeecode));			
	}

	public function removeAdjustment() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$ids = $this->input->post('data');
		foreach ($ids as $adjustmentid) {
		   $this->dropdown->removeAdjustment($adjustmentid);
		}		
	}

	public function summarizeAdjustment() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$ids = $this->input->post('data');
		foreach ($ids as $adjustmentid) {
		   $this->dropdown->summarizeAdjustment($adjustmentid);
		}		
	}

	public function getPayrollSummary() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		echo json_encode($this->dropdown->getPayrollSummary());			
	}

	public function getEmployeeLogs() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$employeecode = $this->input->get('employeecode');
		echo json_encode($this->dropdown->getEmployeeLogs($employeecode));			
	}

	public function logTimeRecord() 
	{
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$logData = $this->input->post('data');
		echo $this->dropdown->logTimeRecord($logData);
	}

	public function removeLog() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$ids = $this->input->post('data');
		foreach ($ids as $logid) {
		   $this->dropdown->removeLog($logid);
		}		
	}

	public function processLogs() {
		$this->load->database('default');
		$this->load->helper('url');		
		$this->load->model('dropdown');
		$logData = $this->input->post('data');
		$this->dropdown->processLogs($logData);
	}

}