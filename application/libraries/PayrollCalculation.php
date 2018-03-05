<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayrollCalculation {

		public $salarytype;
		public $basicsalary;
		public $daysperweek = 6;	
		public $monthlyrate;
		public $semimonthlyrate;
		public $weeklyrate;
		public $dailyrate;
		public $hourlyrate;
		public $minuterate;

		public $regular_pay_rate; 			// RT done during normal working days
		public $restday_pay_rate;			// RT done during rest day
		public $legal_holiday_pay_rate;			// RT done during legal holiday
		public $special_holiday_pay_rate;		// RT done during special non working holiday
		public $legal_holiday_restday_pay_rate;		// RT done during legal holiday that falls on a rest day
		public $special_holiday_restday_pay_rate;	// RT done during special non working holiday that falls on a rest day

		public $regular_ot_rate; 			// OT done during normal working days
		public $restday_ot_rate; 			// OT done during rest day
		public $legal_holiday_ot_rate; 			// OT done during legal holiday
		public $special_holiday_ot_rate; 		// OT done during special non working holiday
		public $legal_holiday_restday_ot_rate;		// OT done during legal holiday that falls on a rest day
		public $special_holiday_restday_ot_rate;	// OT done during special non working holiday that falls on a rest day

		//public $regular_ot_factor 		= 1.25;	// Factor used for computing OT work done on Regular Days
		//public $premium_ot_factor 		= 1.30;	// Factor used for computing OT work done on Rest days and Holidays
                //public $regular_ot_factor             = 1.00; // Factor used for computing OT work done on Regular Days
                //public $premium_ot_factor             = 1.00; // Factor used for computing OT work done on Rest days and Holidays
		//public $premium_pay_factor 		= 1.50; // Factor used for computing RT work done on Special Holiday that falls on Rest Day
		//public $legal_holiday_factor 	        = 2.00; // Factor used for RT/OT work done on Legal Holiday
		//public $special_holiday_factor 	= 1.30; // Factor used for RT/OT work done on Special Holiday
		//public $restday_factor 		= 1.30; // Factor used for RT/OT work done on Rest Days


		public function __construct($params)
        {
        	if(isset($params['salarytype']))
        	{
        		$this->salarytype = $params['salarytype'];	
        	}

        	if(isset($params['basicsalary']))
        	{
        		$this->basicsalary = $this->sanitizeNumericString($params['basicsalary']);
        	}

        	// Time-based Rates
        	$this->MonthlyRate();
        	$this->semimonthlyrate 	= round($this->monthlyrate/2,5);
        	$this->weeklyrate = round($this->semimonthlyrate/2,5);
        	$this->dailyrate = round($this->weeklyrate/$this->daysperweek,5);
        	$this->hourlyrate = round($this->dailyrate/8,5);
        	$this->minuterate = round($this->hourlyrate/60,5);
        	
        	// RT Rates
/*
        	$this->regular_pay_rate 			= $this->hourlyrate * 1.00;
        	$this->restday_pay_rate 			= $this->hourlyrate * $this->restday_factor;
        	$this->legal_holiday_pay_rate 			= $this->hourlyrate * $this->legal_holiday_factor;
        	$this->special_holiday_pay_rate 		= $this->hourlyrate * $this->special_holiday_factor;
        	$this->legal_holiday_restday_pay_rate 		= $this->hourlyrate * $this->legal_holiday_factor * $this->restday_factor;
        	$this->special_holiday_restday_pay_rate 	= $this->hourlyrate * $this->premium_pay_factor;
*/              
                $this->regular_pay_rate                         = $this->hourlyrate * 1.00;
                $this->restday_pay_rate                         = $this->hourlyrate * 1.30;
                $this->legal_holiday_pay_rate                   = $this->hourlyrate * 2.00;
                $this->special_holiday_pay_rate                 = $this->hourlyrate * 1.30;
                $this->legal_holiday_restday_pay_rate           = $this->hourlyrate * 2.30;
                $this->special_holiday_restday_pay_rate         = $this->hourlyrate * 1.50;

        	// OT Rates
/*        	
                $this->regular_ot_rate 				= $this->hourlyrate * $this->regular_ot_factor;
        	$this->restday_ot_rate 				= $this->hourlyrate * $this->premium_ot_factor * $this->restday_factor; 
        	$this->legal_holiday_ot_rate 			= $this->hourlyrate * $this->premium_ot_factor * $this->legal_holiday_factor; 
        	$this->special_holiday_ot_rate 			= $this->hourlyrate * $this->premium_ot_factor * $this->special_holiday_factor; 
        	$this->legal_holiday_restday_ot_rate 		= $this->hourlyrate * $this->premium_ot_factor * $this->legal_holiday_factor * $this->restday_factor;
        	$this->special_holiday_restday_ot_rate 		= $this->hourlyrate * $this->premium_ot_factor * $this->special_holiday_factor * $this->restday_factor;
*/
                $this->regular_ot_rate                          = $this->hourlyrate;
                $this->restday_ot_rate                          = $this->hourlyrate;// * 1.30; 
                $this->legal_holiday_ot_rate                    = $this->hourlyrate;// * 2.00; 
                $this->special_holiday_ot_rate                  = $this->hourlyrate;// * 1.30; 
                $this->legal_holiday_restday_ot_rate            = $this->hourlyrate;// * 2.30;
                $this->special_holiday_restday_ot_rate          = $this->hourlyrate;// * 1.50;

        }

        public function MonthlyRate()
        {
        	// Employee receives a Monthly basis Salary
        	if($this->salarytype == 'Monthly') 
        	{
        		$this->monthlyrate = $this->basicsalary;
        	}

        	// Employee receives a Semi Monthly basis Salary
        	if($this->salarytype == 'Semi-Monthly') 
        	{
        		$this->monthlyrate = $this->basicsalary * 2;
        	}

        	// Employee receives a Weekly basis Salary
        	if($this->salarytype == 'Weekly')  
        	{
        		$this->monthlyrate = $this->basicsalary * 4;
        	}

        	// Employee receives a Daily basis Salary
        	if($this->salarytype == 'Daily') 
        	{
        		$this->monthlyrate = $this->basicsalary * ($this->daysperweek * 4);
        	}
        }

        public function sanitizeNumericString($number) 
        {
			return str_replace(",", "", $number);        	
        }
}