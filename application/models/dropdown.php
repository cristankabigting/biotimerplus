<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropdown extends CI_Model 
{
    public function __construct()
    {
         parent::__construct();
    }

    public function dropdownProject() 
    {
		$sql 	= "SELECT * FROM project WHERE active = 'Yes'";
		$query	= $this->db->query($sql);
		$numrow = $query->num_rows();
		$html 	= "<option></option>";
		if($numrow > 0) {
			foreach ($query->result_array() as $row)
			{
				$projecttitle 	= trim($row['projecttitle']);    
			    $html .= "<option value='$projecttitle'>$projecttitle</option>";
			}			
		}	
		return $html;
    }

    public function dropdownDepartment() 
    {
		$sql 	= "SELECT * FROM groupname WHERE active = 'Yes'";
		$query	= $this->db->query($sql);
		$numrow = $query->num_rows();
		$html 	= "<option></option>";
		if($numrow > 0) {
			foreach ($query->result_array() as $row)
			{
				$title 	= trim($row['grouptitle']);    
			    $html .= "<option value='$title'>$title</option>";			
			}			
		}	
		return $html;
    }

    public function dropdownEmploymentCategory() 
    {
		$sql 	= "SELECT * FROM employmentcategory";
		$query	= $this->db->query($sql);
		$numrow = $query->num_rows();
		$html 	= "<option></option>";
		if($numrow > 0) {
			foreach ($query->result_array() as $row)
			{
				$title 	= trim($row['categorytitle']);    
			    $html .= "<option value='$title'>$title</option>";			
			}			
		}	
		return $html;
    }

    public function dropdownDesignation() 
    {
		$sql 	= "SELECT * FROM designation";
		$query	= $this->db->query($sql);
		$numrow = $query->num_rows();
		$html 	= "<option></option>";
		if($numrow > 0) {
			foreach ($query->result_array() as $row)
			{
				$title 	= trim($row['designationtitle']);    
			    $html .= "<option value='$title'>$title</option>";			
			}			
		}	
		return $html;
    }

    public function dropdownEmployees() 
    {
		$sql 	= "SELECT employeecode,employeelast,employeefirst,employeemiddle,project FROM employee ORDER BY project ASC, employeelast ASC, employeefirst ASC";
		$query	= $this->db->query($sql);
		$numrow = $query->num_rows();
		$html 	= "<option></option>";
		if($numrow > 0) {
			foreach ($query->result_array() as $row)
			{
				$name 	= trim($row['employeefirst']) ." ".substr(trim($row['employeemiddle']),0,1).". ".trim($row['employeelast']);
				$code = trim($row['employeecode']);
				$project = trim($row['project']);     
			    $html .= "<option value='$code'>($project)   $name</option>";			
			}			
		}	
		return $html;
    }

    public function getEmployeeData($employeecode) 
    {
		$sql 	= "SELECT * FROM employee WHERE employeecode = ?";
		$query	= $this->db->query($sql, array($employeecode));
		$numrow = $query->num_rows();
		if($numrow > 0) {
			//$row = $query->row_array();
			//$data = $row;
			return $query->row_array();		
		}		
    }

    public function saveEmployeeData($employeeData) 
    {
    	$employeecode 		= $employeeData['employeecode'];
    	$employeefirst 		= $employeeData['employeefirst'];
    	$employeelast 		= $employeeData['employeelast'];
    	$salarytype 		= $employeeData['salarytype'];
		$calendartype 		= $employeeData['calendartype'];
		$payrollfrequency 	= $employeeData['payrollfrequency'];
		$employmentstatus 	= $employeeData['employmentstatus'];

    	if(empty($employeecode) || empty($employeefirst) || empty($employeelast)) {
    		// Employee Code and Name is required
    	} else {

    		// Default Values
    		if(strlen($salarytype) == 0 || empty($salarytype)) {
    			$employeeData['salarytype'] = "Monthly";
    		}
    		if(strlen($calendartype) == 0 || empty($calendartype)) {
    			$employeeData['calendartype'] = "TC";
    		}
    		if(strlen($payrollfrequency) == 0 || empty($payrollfrequency)) {
    			$employeeData['payrollfrequency'] = "Weekly";
    		}
    		if(strlen($employmentstatus) == 0 || empty($employmentstatus)) {
    			$employeeData['employmentstatus'] = "Employed";
    		}

	    	$sql = "SELECT * FROM employee WHERE employeecode = ?";
	    	$query = $this->db->query($sql, array($employeecode));
	    	$numrow = $query->num_rows();
	    	if($numrow > 0) {
		    	// Update Record
				$this->db->where('employeecode', $employeecode);
				$this->db->update('employee', $employeeData);
	    	} else {
	    		// Insert Record
	    		$this->db->insert('employee', $employeeData);
	    	}
    	}
    }

    public function processIncomeUsingHours($incomeData)
    {
    	//$this->load->library('mylib');
    	$employeecode 	= $incomeData['employeecode'];
		$sql 	= "SELECT * FROM employee WHERE employeecode = ?";
		$query	= $this->db->query($sql, array($employeecode));
		$numrow = $query->num_rows();
		if($numrow > 0) {
			
			$row  = $query->row_array();

			if(empty($row['salarytype'])){

				$salarytype = 'Monthly';	

			} else {

				$salarytype = $row['salarytype'];	
			}
			
			$incomeData['project'] 			= $row['project'];
			$incomeData['employeefirst'] 	= $row['employeefirst'];
			$incomeData['employeelast'] 	= $row['employeelast'];
			$allowance 						= $row['allowances'];

			$basicsalary 	= $row['basicsalary']; 

			$params 		= array('salarytype' =>$salarytype, 'basicsalary' =>$basicsalary);

			$this->load->library('payrollcalculation', $params);
			
			$valid = false;

			if($incomeData['adjustmentcode'] == 'RGRT'){
				$adjustmentrate = $this->payrollcalculation->regular_pay_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'RDRT'){
				$adjustmentrate = $this->payrollcalculation->restday_pay_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'LHRT'){
				$adjustmentrate = $this->payrollcalculation->legal_holiday_pay_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'SHRT'){
				$adjustmentrate = $this->payrollcalculation->special_holiday_pay_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'LRRT'){
				$adjustmentrate = $this->payrollcalculation->legal_holiday_restday_pay_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'SRRT'){
				$adjustmentrate = $this->payrollcalculation->special_holiday_restday_pay_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'RGOT'){
				$adjustmentrate = $this->payrollcalculation->regular_ot_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'RDOT'){
				$adjustmentrate = $this->payrollcalculation->restday_ot_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'LHOT'){
				$adjustmentrate = $this->payrollcalculation->legal_holiday_ot_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'SHOT'){
				$adjustmentrate = $this->payrollcalculation->special_holiday_ot_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'LROT'){
				$adjustmentrate = $this->payrollcalculation->legal_holiday_restday_ot_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'SROT'){
				$adjustmentrate = $this->payrollcalculation->special_holiday_restday_ot_rate;
				$valid = true;
			}

			if($incomeData['adjustmentcode'] == 'FALL'){
				if($allowance > 0) {
					$adjustmentrate = $allowance / 24; // get daily allowance
					$incomeData['hours'] = 6; // default to 6 days
					$valid = true;
				} else {
					$valid = false;
					return "Error: No allowance defined for " .$row['employeefirst']." ".$row['employeelast'];
				} 
			}

			if($incomeData['adjustmentcode'] == 'DALL'){
				if($allowance > 0) {
					if($incomeData['hours'] > 0 && $incomeData['hours'] <= 6) {
						$adjustmentrate = $allowance / 24; // get daily allowance	
						$valid = true;
					} else {
						$valid = false;
						return "Error: Please enter number of days, eg. 6 for 6 days, 5 for 5 days etc..Limit is 6 days.";
					}
				}else{
					$valid = false;
					return "Error: No allowance defined for " .$row['employeefirst']." ".$row['employeelast'];
				}
			}

			if($valid) 
			{
				
				$income = $adjustmentrate * $incomeData['hours'];
				$incomeData['income'] = round($income,2);
				$incomeData['adjustmentrate'] = $adjustmentrate;
				$incomeData['hourlyrate'] = $this->payrollcalculation->hourlyrate;
				$incomeData['adjustmentfactor'] = $incomeData['adjustmentrate']/$incomeData['hourlyrate'];

				$this->db->insert('manual_adjustment', $incomeData);

				return "OK";
			} 
			else 
			{
				return "Error: Invalid Income Adjustment Transaction";
			}
		} else {
			return "Error: Employee not selected.";
		}		    	
    }

    public function processIncomeUsingAmount($incomeData)
    {
    	$employeecode 	= $incomeData['employeecode'];
		$sql 	= "SELECT * FROM employee WHERE employeecode = ?";
		$query	= $this->db->query($sql, array($employeecode));
		$numrow = $query->num_rows();
		if($numrow > 0) {
			$row  = $query->row_array();
			$incomeData['project'] 			= $row['project'];
			$incomeData['employeefirst'] 	= $row['employeefirst'];
			$incomeData['employeelast'] 	= $row['employeelast'];
			if(empty(trim($incomeData['income'])) || $incomeData['income'] <= 0 ) {
	    		return "Error: Invalid Income Adjustment Transaction. Please check amount.";
	    	} else {
				$this->db->insert('manual_adjustment', $incomeData);
				return "OK";
			}
		} else {
			return "Error: Employee not selected.";
		}
    }

    public function processDeductionUsingHours($deductionData)
    {
    	//$this->load->library('mylib');
    	$employeecode 	= $deductionData['employeecode'];
		$sql 	= "SELECT * FROM employee WHERE employeecode = ?";
		$query	= $this->db->query($sql, array($employeecode));
		$numrow = $query->num_rows();
		if($numrow > 0) {
			
			$row  = $query->row_array();

			if(empty($row['salarytype'])){

				$salarytype = 'Monthly';	

			} else {

				$salarytype = $row['salarytype'];	
			}

			$incomeData['project'] 			= $row['project'];
			$incomeData['employeefirst'] 	= $row['employeefirst'];
			$incomeData['employeelast'] 	= $row['employeelast'];
			
			$basicsalary 	= $row['basicsalary']; 
			
			$params 		= array('salarytype' =>$salarytype, 'basicsalary' =>$basicsalary);

			$this->load->library('payrollcalculation', $params);
			
			$valid = false;

			if($deductionData['adjustmentcode'] == 'LDED'){
				$adjustmentrate = $this->payrollcalculation->hourlyrate;
				$valid = true;
			}

			if($deductionData['adjustmentcode'] == 'UDED'){
				$adjustmentrate = $this->payrollcalculation->hourlyrate;
				$valid = true;
			}

			if($valid) 
			{
				if($deductionData['comment'] == 'minute'){
					$hours 	= $deductionData['hours']/60;
				} else {
					$hours 	= $deductionData['hours'];
				}

				$deduction 	= $adjustmentrate * $hours;
				$deductionData['deduction'] = round($deduction,2);
				$deductionData['adjustmentrate'] = $adjustmentrate;
				$deductionData['hourlyrate'] = $this->payrollcalculation->hourlyrate;
				$deductionData['adjustmentfactor'] = $deductionData['adjustmentrate']/$deductionData['hourlyrate'];
				$this->db->insert('manual_adjustment', $deductionData);
				return "OK";

			} 
			else 
			{
				return "Error: Invalid Deduction Adjustment Transaction";
			}

		} else {

			return "Error: Employee not selected.";
		}		    	
    }

    public function processDeductionUsingAmount($deductionData)
    {
    	$employeecode 	= $deductionData['employeecode'];
		$sql 	= "SELECT * FROM employee WHERE employeecode = ?";
		$query	= $this->db->query($sql, array($employeecode));
		$numrow = $query->num_rows();
		if($numrow > 0) {
			$row  = $query->row_array();
			$deductionData['project'] 		= $row['project'];
			$deductionData['employeefirst'] = $row['employeefirst'];
			$deductionData['employeelast'] 	= $row['employeelast'];
			if(empty(trim($deductionData['deduction'])) || $deductionData['deduction'] <= 0 ) {
	    		return "Error: Invalid Deduction Adjustment Transaction. Please check amount.";
	    	} else {
				$this->db->insert('manual_adjustment', $deductionData);
				return "OK";
			}
		} else{

			return "Error: Employee not selected.";
		}
    }

    public function getManualAdjustments()
    {    	
		$sql 	= "SELECT * FROM manual_adjustment WHERE deleted = 'No' ORDER BY adjustmentid DESC";
		$query	= $this->db->query($sql);
		return $query->result_array();		
    }

    public function getEmployeeAdjustments($employeecode)
    {    	
		$sql = "SELECT * FROM manual_adjustment WHERE employeecode = ? AND deleted = 'No' ORDER BY adjustmentid DESC";
		$query	= $this->db->query($sql,array($employeecode));
		return $query->result_array();		
    }

    public function removeAdjustment($adjustmentid)
    {    	
		$this->db->set('deleted', 'Yes');
		$this->db->where('adjustmentid', $adjustmentid);
		$this->db->update('manual_adjustment');
    }

    public function summarizeAdjustment($adjustmentid)
    {    	
    	$sql = "SELECT * FROM manual_adjustment WHERE adjustmentid = ?";
    	$query = $this->db->query($sql,array($adjustmentid));
    	$row  = $query->row_array();

    	$record = array();
    	$record['project'] 			= $row['project'];
    	$record['employeecode'] 	= $row['employeecode']; 
    	$record['employeefirst'] 	= $row['employeefirst']; 
    	$record['employeelast'] 	= $row['employeelast']; 
    	$record['periodstart'] 		= $row['periodstart'];
    	$record['periodend'] 		= $row['periodend'];
    	$record['income']			= $row['income'];
    	$record['deduction']		= $row['deduction'];
    	$adjustmentcode 			= $row['adjustmentcode'];
    	$reference					= strtolower($adjustmentcode);

    	if(!empty($row['income'])) {
    		$record[$reference] 	= $row['income'];
    		$record['deduction'] 	= 0;			
    	} else {
    		$record[$reference] = $row['deduction'];
    		$record['income'] 		= 0;
    	}

    	if($row['summarized'] == 'No') {

			$this->db->set('summarized', 'Yes');
			$this->db->where('adjustmentid', $adjustmentid);
			$this->db->update('manual_adjustment');

	        $sql = "SELECT * FROM payrollsummary WHERE periodstart = ? AND periodend = ? AND employeecode = ?";
	        $query	= $this->db->query($sql, array($row['periodstart'],$row['periodend'],$row['employeecode']));
	        $numrow = $query->num_rows();
	        if($numrow > 0){
	        	$row  = $query->row_array();
	        	$this->db->set('income', $row['income'] + $record['income']);
	        	$this->db->set('deduction', $row['deduction'] + $record['deduction']);
	        	$this->db->set($reference, $row[$reference] + $record[$reference]);
	    		$this->db->where('summaryid', $row['summaryid']);
	    		$this->db->update('payrollsummary');
	        } else {
	        	// Create summary
	        	$this->db->insert('payrollsummary', $record);
	        }
    	}
    }

    public function getPayrollSummary()
    {    	
		$sql 	= "SELECT * FROM payrollsummary ORDER BY project ASC, periodstart DESC, employeelast ASC, employeefirst ASC";
		$query	= $this->db->query($sql);
		$record 	= array();
		$records 	= array();
		foreach ($query->result_array() as $row)
		{
			$record['summaryid'] = $row['summaryid'];
			$record['project'] = $row['project'];
			$record['employeecode'] = $row['employeecode'];
			$record['employeefirst'] = $row['employeefirst'];
			$record['employeelast'] = $row['employeelast'];
			$record['periodstart'] = $row['periodstart'];
			$record['periodend'] = $row['periodend'];
			$record['income'] = $row['income'];
			$record['deduction'] = $row['deduction'];
			$record['rgrt'] = $row['rgrt'];
			$record['rdrt'] = $row['rdrt'];
			$record['lhrt'] = $row['lhrt'];
			$record['shrt'] = $row['shrt'];
			$record['lrrt'] = $row['lrrt'];
			$record['srrt'] = $row['srrt'];
			$record['rgot'] = $row['rgot'];
			$record['rdot'] = $row['rdot'];
			$record['lhot'] = $row['lhot'];
			$record['shot'] = $row['shot'];
			$record['lrot'] = $row['lrot'];
			$record['srot'] = $row['srot'];
			$record['dall'] = $row['dall'];
			$record['fall'] = $row['fall'];
			$record['bons'] = $row['bons'];
			$record['incs'] = $row['incs'];
			$record['m13f'] = $row['m13f'];
			$record['m13p'] = $row['m13p'];
			$record['sssc'] = $row['sssc'];
			$record['phic'] = $row['phic'];
			$record['hdmf'] = $row['hdmf'];
			$record['csad'] = $row['csad'];
			$record['lded'] = $row['lded'];
			$record['uded'] = $row['uded'];
			//$record['regularpay'] = number_format($row['rgrt'] + $row['rdrt'] + $row['lhrt'] + $row['shrt'] + $row['lrrt'] + $row['srrt'],2,".",",");
			$record['regularpay'] = number_format($row['rgrt'],2,".",",");
			$record['holidaypay'] = number_format($row['lhrt'] + $row['shrt'] + $row['lrrt'] + $row['srrt'],2,".",",");
			$record['sundaypay'] = number_format($row['rdrt'],2,".",",");
			$record['regularot'] = number_format($row['rgot'],2,".",",");
			$record['holidayot'] = number_format($row['lhot'] + $row['shot'] + $row['lrot'] + $row['srot'],2,".",",");
			$record['sundayot'] = number_format($row['rdot'],2,".",",");
			$record['allowance'] = number_format($row['dall'] + $row['fall'],2,".",",");
			$record['otherincome'] = number_format($row['bons'] + $row['incs'],2,".",",");
			$record['tm'] = number_format($row['m13f'] + $row['m13p'],2,".",",");
			$record['netpay'] = number_format($row['income'] - $row['deduction'],2,".",",");
			array_push($records,$record);
		}			

		//$record = $query->result_array();
		return $records;
    }

    public function getEmployeeLogs($employeecode)
    {    	
		$sql 	= "SELECT `manual_log`.*,`employee`.project, `employee`.employeefirst, `employee`.employeelast FROM `manual_log`, `employee` WHERE `manual_log`.employeecode = ?  AND `manual_log`.processed = 'No' AND `manual_log`.employeecode = `employee`.employeecode ORDER BY `manual_log`.logid DESC";

		$query	= $this->db->query($sql,array($employeecode));

		$record 	= array();

		$records 	= array();

		foreach ($query->result_array() as $row)
		{
			$record['logid'] 		= $row['logid'];
			$record['employeecode'] = $row['employeecode'];
			$record['logdate'] 		= $row['logdate'];
			$record['login'] 		= $row['login'];
			$record['logout'] 		= $row['logout'];
			$record['logtype'] 		= $row['logtype'];
			$record['timetype'] 	= $row['timetype'];
			$record['particular'] 	= $row['particular'];
			$record['duration'] 	= $this->computeDuration($row['login'],$row['logout']);
			$record['project'] 		= $row['project'];
			$record['employeefirst'] = $row['employeefirst'];
			$record['employeelast'] = $row['employeelast'];
			$record['processed'] 	= $row['processed'];
			$record['periodstart'] 	= $row['periodstart'];
			$record['periodend'] 	= $row['periodend'];
			array_push($records,$record);
		}
		return $records;
		//return $query->result_array();		
    }

    public function getEmployeeLogs2($employeecode,$periodstart,$periodend)
    {
    	if(!empty($periodstart) && !empty($periodend)) {
    		$sql 	= "SELECT `manual_log`.*,`employee`.project, `employee`.employeefirst, `employee`.employeelast FROM `manual_log`, `employee` WHERE `manual_log`.employeecode = ?  AND `manual_log`.employeecode = `employee`.employeecode AND `manual_log`.logdate >= ?  AND `manual_log`.logdate <= ? ORDER BY `manual_log`.logid DESC";
    		$query	= $this->db->query($sql,array($employeecode,$periodstart,$periodend));
    	}

    	if(!empty($periodstart) && empty($periodend)) {
    		$sql 	= "SELECT `manual_log`.*,`employee`.project, `employee`.employeefirst, `employee`.employeelast FROM `manual_log`, `employee` WHERE `manual_log`.employeecode = ?  AND `manual_log`.employeecode = `employee`.employeecode AND `manual_log`.logdate >= ?  ORDER BY `manual_log`.logid DESC";
    		$query	= $this->db->query($sql,array($employeecode,$periodstart));
    	}

    	if(empty($periodstart) && !empty($periodend)) {
    		$sql 	= "SELECT `manual_log`.*,`employee`.project, `employee`.employeefirst, `employee`.employeelast FROM `manual_log`, `employee` WHERE `manual_log`.employeecode = ?  AND `manual_log`.employeecode = `employee`.employeecode AND `manual_log`.logdate <= ? ORDER BY `manual_log`.logid DESC";
    		$query	= $this->db->query($sql,array($employeecode,$periodend));
    	}

    	if(empty($periodstart) && empty($periodend)) {
    		$sql 	= "SELECT `manual_log`.*,`employee`.project, `employee`.employeefirst, `employee`.employeelast FROM `manual_log`, `employee` WHERE `manual_log`.employeecode = ?  AND `manual_log`.employeecode = `employee`.employeecode ORDER BY `manual_log`.logid DESC";
    		$query	= $this->db->query($sql,array($employeecode));
    	}

		$record 	= array();

		$records 	= array();

		foreach ($query->result_array() as $row)
		{
			$record['logid'] 		= $row['logid'];
			$record['employeecode'] = $row['employeecode'];
			$record['logdate'] 		= $row['logdate'];
			$record['login'] 		= $row['login'];
			$record['logout'] 		= $row['logout'];
			$record['logtype'] 		= $row['logtype'];
			$record['timetype'] 	= $row['timetype'];
			$record['particular'] 	= $row['particular'];
			$record['duration'] 	= $this->computeDuration($row['login'],$row['logout']);
			$record['project'] 		= $row['project'];
			$record['employeefirst'] = $row['employeefirst'];
			$record['employeelast'] = $row['employeelast'];
			$record['processed'] 	= $row['processed'];
			$record['periodstart'] 	= $row['periodstart'];
			$record['periodend'] 	= $row['periodend'];
			array_push($records,$record);
		}
		return $records;
		//return $query->result_array();		
    }

    public function logTimeRecord($logData)
    {
    	$logid = $logData['logid'];

		$sql 	= "SELECT * FROM employee WHERE employeecode = ?";
		$query	= $this->db->query($sql, array($logData['employeecode']));
		$row 				= $query->row_array();
		$employeecode		= $row['employeecode'];
		$employeelast		= $row['employeelast'];
		$employeefirst 		= $row['employeefirst'];
		$employeemiddle 	= $row['employeemiddle'];
		$employeename 		= $row['employeefirst']." ".$row['employeelast'];
		$groupname 			= $row['groupname'];
		$designation		= $row['designation'];
		$project			= $row['project'];
		$referencenumber 	= $row['referencenumber'];
		$calendartype 		= $row['calendartype'];

		if($logData['timetype'] == 'RT') {
			$html = '<li class="media">';
			$html .= '<img class="media-object" src="assets/photos/'.$employeecode.'.jpg" alt="...">';
			$html .= '<div class="media-body">';
	        $html .= '<h4 class="media-heading">'.$employeename.'</h4>';
			$html .= '<div class="media-heading-sub">' .$project .' - '. $designation .'</div>';
			$html .= '<div class="media-heading-small"> Regular Time Log IN '.$logData['login'].'</div>';
			$html .= '<div class="media-heading-small"> Regular Time Log OUT '.$logData['logout'].'</div>';
			$html .= '</div></li>';
		} else {
			$html = '<li class="media">';
			$html .= '<img class="media-object" src="assets/photos/'.$employeecode.'.jpg" alt="...">';
			$html .= '<div class="media-body">';
	        $html .= '<h4 class="media-heading">'.$employeename.'</h4>';
			$html .= '<div class="media-heading-sub">' .$project .' - '. $designation .'</div>';
			$html .= '<div class="media-heading-small"> Over Time Log IN '.$logData['login'].'</div>';
			$html .= '<div class="media-heading-small"> Over Time Log OUT '.$logData['logout'].'</div>';
			$html .= '</div></li>';			
		}

		$logdate = substr($logData['login'],0,10);

    	if(empty($logid)) {

			$params = array('calendartype' => $calendartype, 'logdate' => $logdate, 'timetype' => $logData['timetype']);
			$this->load->library('logfunction', $params);

			$log = array();
			$log['employeecode'] 	= $logData['employeecode'];
			$log['logdate']			= $logdate;
			$log['login']			= $logData['login'];
			$log['logout']			= $logData['logout'];
			$log['messagestatus'] 	= $html;
			$log['logtype'] 		= $this->logfunction->logtype;
			$log['timetype'] 		= $this->logfunction->timetype;
			$log['particular'] 		= $this->logfunction->particular;
			$log['periodstart'] 	= $this->logfunction->periodstart;
			$log['periodend'] 		= $this->logfunction->periodend;

			$this->db->insert('manual_log',$log);

    	} else {

			$params = array('calendartype' => $calendartype, 'logdate' => $logdate, 'timetype' => $logData['timetype']);
			$this->load->library('logfunction', $params);

       		$this->db->set('logdate',$logdate);
        	$this->db->set('login',$logData['login']);
        	$this->db->set('logout',$logData['logout']);
        	$this->db->set('messagestatus',$html);
        	$this->db->set('logtype',$this->logfunction->logtype);
        	$this->db->set('timetype',$this->logfunction->timetype);
        	$this->db->set('particular',$this->logfunction->particular);
        	$this->db->set('periodstart',$this->logfunction->periodstart);
        	$this->db->set('periodend',$this->logfunction->periodend);
    		$this->db->where('logid', $logid);
    		$this->db->update('manual_log');
    		//return $this->logfunction->logtype;
    	}
    }

    public function removeLog($logid)
    {    	
		$this->db->where('logid', $logid);
		$this->db->delete('manual_log');
    }

    public function processLogs($logData)
    {
    	$ids = $logData['ids'];

    	// Pay the employee the whole week
		$incomeData['employeecode'] 	= $logData['employeecode'];
    	$incomeData['periodstart']		= $logData['periodstart'];
    	$incomeData['periodend']    	= $logData['periodend'];
    	$incomeData['adjustmentcode']   = "RGRT";
    	$incomeData['particular']   	= "Regular Work Regular Time";
    	$incomeData['comment'] 			= "Basic Salary for the whole week";
    	$incomeData['hours'] 			= 48;

    	$this->processIncomeUsingHours($incomeData);
    	
    	// Pay the employee the whole week allowance

		foreach ($ids as $logid) {

			$this->updateLogStatus($logid);
			$manualLogData 	= $this->getManualLog($logid);
			$duration 		= $this->computeDuration($manualLogData['login'],$manualLogData['logout']);
			$logtype 		= $manualLogData['logtype'];
			$employeecode 	= $manualLogData['employeecode'];

			// RT Processing
			if($logtype == 'RDRT' || $logtype == 'LHRT' || $logtype == 'SHRT' || $logtype == 'LRRT' || $logtype == 'SRRT') {
				$incomeData['employeecode'] 	= $logData['employeecode'];
				$incomeData['periodstart']		= $logData['periodstart'];
				$incomeData['periodend']    	= $logData['periodend'];
				$incomeData['adjustmentcode']   = $manualLogData['logtype'];
				$incomeData['particular']   	= $manualLogData['particular'];
				$incomeData['comment'] 			= $manualLogData['logdate'];
				if($duration > 8){
					$duration = 8;
				}
				$incomeData['hours'] 			= $duration;
				$this->processIncomeUsingHours($incomeData);
			}

			// OT Processing
			if($logtype == 'RGOT' || $logtype == 'RDOT' || $logtype == 'LHOT' || $logtype == 'SHOT' || $logtype == 'LROT' || $logtype == 'SROT') {
				$incomeData['employeecode'] 	= $logData['employeecode'];
				$incomeData['periodstart']		= $logData['periodstart'];
				$incomeData['periodend']    	= $logData['periodend'];
				$incomeData['adjustmentcode']   = $manualLogData['logtype'];
				$incomeData['particular']   	= $manualLogData['particular'];
				$incomeData['comment'] 			= $manualLogData['logdate'];
				$incomeData['hours'] 			= $duration;
				$this->processIncomeUsingHours($incomeData);
			}
		}
		//$this->db->where('logid', $logid);
		//$this->db->delete('manual_log');
    }

    public function updateLogStatus($logid)
    {
        	$this->db->set('processed', 'Yes');
    		$this->db->where('logid', $logid);
    		$this->db->update('manual_log');
    }

    public function getManualLog($logid) 
    {
    	$sql 	= "SELECT * FROM manual_log WHERE logid = ?";
    	$query	= $this->db->query($sql,array($logid));
    	return $query->row_array();
    }

    public function computeDuration($login,$logout)
    {
    	if(empty($login) || empty($logout)){

    		return 0;

    	} else {

	    	$loginUnix 	= date('U',strtotime($login));
	    	$logoutUnix = date('U',strtotime($logout));
	    	$duration 	= round(($logoutUnix - $loginUnix)/3600,2); // in seconds

	    	return $duration;    		
    	}
    }

}