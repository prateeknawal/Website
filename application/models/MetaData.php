<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MetaData extends CI_Model {
	
	public function getData()
	{
		$result = $this->db->get('meta_log_actions')->result_array();
		// echo "<pre>";
		// print_r($result);
		// echo count($result);
		// foreach ($result as $key) {
		// 	echo $key['action']."<br>";
		// }
		// for ($i=0; $i < count($result) ; $i++) { 
		// 	echo $result[$i]['id']."<br>";
		// 	echo $result[$i]['action']."<br>";
		// }
		return $result;
	}
}