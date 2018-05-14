<?php
/**
 * 
 */
class Event extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Event_Model');
	}
	function index()
	{
		$id = $_GET['id'];
		$id = intval($id);
		$info = $this->Event_Model->get_info($id);

		$this->load->model('Time_Model');
		$input= array();
		$input['where']= array('id_su_kien' => $id);
		$list_time= $this->Time_Model->get_list($input);
		$total_time = $this->Time_Model->get_total($input);
		//echo($total_time);

		$first= $this->Time_Model->get_first_record("id_su_kien",$id);
		//echo $first[0]->ngay;
		//print_r($first);
		/*
		foreach ($list_time as $row) {
			echo "<pre>";
			$thoi_gian= $row->ngay;
			$thoi_gian = strtotime($thoi_gian);
			$m= date('M',$thoi_gian);
			$D= date('D',$thoi_gian);
			$d= date('d',$thoi_gian);
			$y= date('Y',$thoi_gian);

			echo get_month($m)."    ".get_thu($D)."   ".$d."  ".$y;
			echo "</pre>";
		}
		*/

		$this->data['total_time']= $total_time;
		$this->data['first']= $first;
		$this->data['list_time']= $list_time;
		$this->data['info']= $info;
		$this->data['temp']= 'site/event/index';
		$this->load->view('site/layout',$this->data);
	}

}
?>