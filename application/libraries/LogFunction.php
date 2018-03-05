<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	date_default_timezone_set("Asia/Manila");

	class LogFunction {
		public $timetype; // Valid values: RT for Regular Time, and OT for Over Time
		public $periodstart; 
		public $periodend;
		public $restday = "Sunday";
		public $restdayflag;
		public $specialflag;
		public $legalflag;
		public $logtype;
		public $legal_holiday 	= array("2018-01-01","2018-01-02","2018-03-29","2018-03-30","2018-04-09","2018-05-01","2018-06-12","2018-08-27","2018-11-30","2018-12-25","2018-12-30");
		public $special_holiday = array("2018-02-16","2018-03-31","2018-06-15","2018-08-21","2018-08-22","2018-11-01","2018-11-02","2018-12-08","2018-12-24","2018-12-31");
		public $particular;

		public function __construct($params)
		{

			$this->timetype = $params['timetype'];
			$calendartype 	= $params['calendartype'];
			$logdate 		= $params['logdate'];

			if($calendartype == 'TC') 
			{
				$this->processTuesdayCutoff($logdate);
			}

			if($calendartype == 'SC') 
			{
				$this->processSundayCutoff($logdate);
			}

			if($calendartype == 'SM') 
			{
				$this->processSemiCutoff($logdate);
			}
		}

		public function processTuesdayCutoff($logdate) 
		{

			$dayofweek = date("l",strtotime($logdate));

			$this->isRestDay($dayofweek);
			$this->isSpecial($logdate);
			$this->isLegal($logdate);
			$this->processLogType();

			if($dayofweek == "Monday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (5*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (1*24*60*60)); 
			}

			if($dayofweek == "Tuesday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (6*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate)); 
			}

			if($dayofweek == "Wednesday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (6*24*60*60)); 
			}

			if($dayofweek == "Thursday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (1*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (5*24*60*60)); 
			}

			if($dayofweek == "Friday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (2*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (4*24*60*60)); 
			}

			if($dayofweek == "Saturday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (3*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (3*24*60*60)); 
			}

			if($dayofweek == "Sunday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (4*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (2*24*60*60)); 
			}
		}

		public function processSundayCutoff($logdate) 
		{

			$dayofweek = date("l",strtotime($logdate));

			$this->isRestDay($dayofweek);
			$this->isSpecial($logdate);
			$this->isLegal($logdate);
			$this->processLogType();

			if($dayofweek == "Monday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (6*24*60*60)); 
			}

			if($dayofweek == "Tuesday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (1*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (5*24*60*60)); 
			}

			if($dayofweek == "Wednesday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (2*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (4*24*60*60)); 
			}

			if($dayofweek == "Thursday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (3*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (3*24*60*60)); 
			}

			if($dayofweek == "Friday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (4*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (2*24*60*60)); 
			}

			if($dayofweek == "Saturday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (5*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate) + (1*24*60*60)); 
			}

			if($dayofweek == "Sunday") 
			{
				$this->periodstart 	= date("Y-m-d",strtotime($logdate) - (6*24*60*60)); 
				$this->periodend 	= date("Y-m-d",strtotime($logdate)); 
			}
		}

		public function processSemiCutoff($logdate) 
		{
			$dayofweek = date("l",strtotime($logdate));
			$year		= date("Y",strtotime($logdate));
			$month		= date("m",strtotime($logdate));
			$day 		= date("d",strtotime($logdate));
			$dayofmonth = date("j",strtotime($logdate));
			$lastday 	= date("t",strtotime($logdate));

			$this->isRestDay($dayofweek);
			$this->isSpecial($logdate);
			$this->isLegal($logdate);
			$this->processLogType();

			if($dayofmonth >= 1 && $dayofmonth <= 15) 
			{
				$this->periodstart 	= "$year-$month-01"; 
				$this->periodend 	= "$year-$month-15";
			}
			if($dayofmonth >= 16) 
			{
				$this->periodstart 	= "$year-$month-16"; 
				$this->periodend 	= "$year-$month-$lastday";
			}
		}

		public function isRestDay($dayofweek) 
		{
			if($dayofweek == $this->restday) 
			{
				$this->restdayflag = true;
			} 
			else 
			{
				$this->restdayflag = false;
			}
		}

		public function isSpecial($logdate) 
		{
			if (in_array($logdate, $this->special_holiday)) 
			{
				$this->specialflag = true;			    				
			} 
			else 
			{
				$this->specialflag = false;			    				
			}
		}

		public function isLegal($logdate) 
		{
			if (in_array($logdate, $this->legal_holiday)) 
			{
				$this->legalflag = true;			    				
			} 
			else 
			{
				$this->legalflag = false;			    				
			}
		}

		public function processLogType() 
		{
			// 1
			if(!$this->restdayflag && !$this->specialflag && !$this->legalflag) 
			{
				$this->logtype = "RG".$this->timetype;
				$this->particular = "Regular Day ".$this->whatTime();
			}

			// 2
			if(!$this->restdayflag && !$this->specialflag && $this->legalflag) 
			{
				$this->logtype = "LH".$this->timetype;
				$this->particular = "Legal Holiday ".$this->whatTime();
			}

			// 3
			if(!$this->restdayflag && $this->specialflag && !$this->legalflag) 
			{
				$this->logtype = "SH".$this->timetype;
				$this->particular = "Special Holiday ".$this->whatTime();
			}

			// 4
			if(!$this->restdayflag && $this->specialflag && $this->legalflag) 
			{
				$this->logtype = "SH".$this->timetype;
				$this->particular = "Special Holiday ".$this->whatTime();
			}

			// 5
			if($this->restdayflag && !$this->specialflag && !$this->legalflag) 
			{
				$this->logtype = "RD".$this->timetype;
				$this->particular = "Rest Day ".$this->whatTime();
			}

			// 6
			if($this->restdayflag && !$this->specialflag && $this->legalflag) 
			{
				$this->logtype = "LR".$this->timetype;
				$this->particular = "Legal Holiday & Rest Day ".$this->whatTime();
			}

			// 7
			if($this->restdayflag && $this->specialflag && !$this->legalflag) 
			{
				$this->logtype = "SR".$this->timetype;
				$this->particular = "Special Holiday & Rest Day ".$this->whatTime();
			}

			// 8
			if($this->restdayflag && $this->specialflag && $this->legalflag) 
			{
				$this->logtype = "SR".$this->timetype;
				$this->particular = "Special Holiday & Rest Day ".$this->whatTime();
			}
		}

		public function whatTime() 
		{
			if($this->timetype == "RT")
			{
				return "Regular Time";
			}
			else 
			{
				return "Over Time";
			}
		}
	}