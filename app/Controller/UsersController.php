<?php
class UsersController extends AppController {
	public $helper = array('Html', 'Form');

	public function index() {
		$this -> set('title_for_layout', 'Home');
		//get remote IP address
		$this -> set('ip_addr', $_SERVER['REMOTE_ADDR']);
		//get visit date and time
		$datetime = new DateTime();
		$this -> set('date_time', $datetime -> format('Y/m/d H:i:s'));
		//get referer URL
		if (isset($_SERVER['HTTP_REFERER'])) {
			$referer_url = $_SERVER['HTTP_REFERER'];
		} else {
			$referer_url = NULL;
		}
		
		$this -> loadModel('Access_log');
		$log_data = array('Access_log' => array('ip_addr' => $_SERVER['REMOTE_ADDR'], 
											  'date_time' => $datetime -> format('Y/m/d H:i:s'), 
											'referer_url' => $referer_url));
		$this -> Access_log -> save($log_data);
	}

}
