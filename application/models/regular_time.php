<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regular_Time extends CI_Model 
{
    public function __construct()
    {
         parent::__construct();
    }

    public function process($scancode, $image) 
    {

		$employeecode 	= $scancode;

		date_default_timezone_set("Asia/Manila");

		$dayofweek 			= date('l');
		$timeonly 			= date('h:i A');
		$currenttime 		= date('Y-m-d h:i A');
		$currenttimeUnix	= date('U',strtotime($currenttime));
		$binary_data 		= base64_decode($image);

		$sql 				= "SELECT * FROM employee WHERE employeecode = ?";
		$query				= $this->db->query($sql, array($employeecode));
		$numrow 			= $query->num_rows();

		if($numrow > 0) {

			$row 				= $query->row_array();
			$dtrdate 			= date('Y-m-d');
			$employeelast		= $row['employeelast'];
			$employeefirst 		= $row['employeefirst'];
			$employeemiddle 	= $row['employeemiddle'];
			$employeename 		= $row['employeefirst']." ".$row['employeelast'];
			$groupname 			= $row['groupname'];
			$designation		= $row['designation'];
			$project			= $row['project'];
			$referencenumber 	= $row['referencenumber'];
			$calendartype 		= $row['calendartype'];

			$html = '<li class="media">';
			$html .= '<img class="media-object" src="assets/photos/'.$employeecode.'.jpg" alt="...">';
			$html .= '<div class="media-body">';
            $html .= '<h4 class="media-heading">'.$employeename.'</h4>';
			$html .= '<div class="media-heading-sub">' .$project .' - '. $designation .'</div>';

			// Get Last Log Transaction
			$sql = "SELECT * FROM manual_log WHERE employeecode = ? AND logdate = ? AND timetype = 'RT' ORDER BY logid DESC";
			$query	= $this->db->query($sql, array($employeecode,$dtrdate));
			$numrow = $query->num_rows();
			if($numrow > 0) {
				
				// There is a record on this date
				$row 	= $query->row_array();
				$login 	= $row['login'];
				$logid 	= $row['logid'];	

				if(empty($login)) {
					// The employee did not logout previously therefore delete this transaction and create a new one
					$this->db->where('logid',$logid);
					$this->db->delete('manual_log');

					//$html .= '<div class="media-heading-small"> Regular Time Log IN '.$login.'</div>';
					//$html .= '<div class="media-heading-small"> Regular Time Log OUT '.$currenttime.'</div>';
					//$html .= '</div></li>';
					$html .= '<div class="media-heading-small"> Regular Time Log IN '.$currenttime.'</div></div></li>';

					$params = array('calendartype' => $calendartype, 'logdate' => $dtrdate, 'timetype' => 'RT');
					$this->load->library('logfunction', $params);

					$log = array();
					$log['employeecode'] 	= $employeecode;
					$log['logdate']			= $dtrdate;
					$log['login']			= $currenttime;
					$log['messagestatus'] 	= $html;
					$log['logtype'] 		= $this->logfunction->logtype;
					$log['timetype'] 		= $this->logfunction->timetype;
					$log['particular'] 		= $this->logfunction->particular;
					$log['periodstart'] 	= $this->logfunction->periodstart;
					$log['periodend'] 		= $this->logfunction->periodend;
					$this->db->insert('manual_log',$log);
					return array("message"=>'OK',"html"=>$html);
				} else {

					$html .= '<div class="media-heading-small"> Regular Time Log IN '.$login.'</div>';
					$html .= '<div class="media-heading-small"> Regular Time Log OUT '.$currenttime.'</div>';
					$html .= '</div></li>';

					$this->db->set('logout', $currenttime);
					$this->db->set('messagestatus', $html);
					$this->db->where('logid',$logid);
					$this->db->update('manual_log');
					return array("message"=>'OK',"html"=>$html);
				}
			} else {
				// There is no record on this date
				$html .= '<div class="media-heading-small"> Regular Time Log IN '.$currenttime.'</div></div></li>';

				$params = array('calendartype' => $calendartype, 'logdate' => $dtrdate, 'timetype' => 'RT');
				$this->load->library('logfunction', $params);

				$log = array();
				$log['employeecode'] 	= $employeecode;
				$log['logdate']			= $dtrdate;
				$log['login']			= $currenttime;
				$log['messagestatus'] 	= $html;
				$log['logtype'] 		= $this->logfunction->logtype;
				$log['timetype'] 		= $this->logfunction->timetype;
				$log['particular'] 		= $this->logfunction->particular;
				$log['periodstart'] 	= $this->logfunction->periodstart;
				$log['periodend'] 		= $this->logfunction->periodend;
				$this->db->insert('manual_log',$log);
				return array("message"=>'OK',"html"=>$html);
			}
		} else {
			return array("message"=>"ERROR: INVALID CODE","html"=>'');
		}
    }
}