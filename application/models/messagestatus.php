<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MessageStatus extends CI_Model 
{
    public function __construct()
    {
         parent::__construct();
    }

    public function getmessages() 
    {
		date_default_timezone_set("Asia/Manila");
		
		$todate = date('Y-m-d');
		//$fromdateUnix = date('U',strtotime($todate)) - (11*24*60*60);
		$fromdateUnix 	= date('U',strtotime($todate)) - (7*24*60*60);
		$fromdate 		= date('Y-m-d',$fromdateUnix);

		$dtrdate 		= date('Y-m-d');
		$sql 			= "SELECT * FROM manual_log WHERE logdate >= ? AND logdate <= ? ORDER BY logid DESC";
		//$sql 			= "SELECT * FROM regulartime WHERE dtrdate >= '$fromdate' AND dtrdate <= '$todate' ORDER BY employeename ASC, dtrdate ASC, login ASC, logout ASC";
		$query			= $this->db->query($sql,array($fromdate,$todate));
		$numrow 		= $query->num_rows();

		$messagestatus 	= '';

		if($numrow > 0) {

			foreach ($query->result_array() as $row)
			{
			    $messagestatus .= $row['messagestatus'];
			}			
		}

		return $messagestatus;
    }
}