<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PayrollAdjustments extends CI_Model 
{
    public function __construct()
    {
         parent::__construct();
    }

    public function savePayrollInput($payrollInput)
    {
    	if(empty($payrollInput['payroll_input_id'])) {
    		$this->db->insert('payroll_input', $payrollInput);	
    	} else{
    		$this->db->where('payroll_input_id',$payrollInput['payroll_input_id']);
    		$this->db->update('payroll_input',$payrollInput);
    	}
    	
    	return "OK";
    }

    public function getPayrollInputs()
    {    	
		$sql 	= "SELECT `payroll_input`.*,`employee`.employeefirst,`employee`.employeelast,`employee`.project FROM payroll_input,employee WHERE `payroll_input`.employeecode = `employee`.employeecode ORDER BY `payroll_input`.payroll_input_id DESC";
		$query	= $this->db->query($sql);
		return $query->result_array();		
    }

    public function getPayrollInput($payroll_input_id)
    {    	
		$sql 	= "SELECT * FROM payroll_input WHERE payroll_input_id = ?";
		$query	= $this->db->query($sql,array($payroll_input_id));
		return $query->row_array();		
    }

    public function updateAllowanceType($allowanceData) {
    	$this->db->set('allowance_type',$allowanceData['allowance_type']);
    	$this->db->where('employeecode',$allowanceData['employeecode']);
    	$this->db->update('employee');
    }
}