<?php
class UsersController extends AppController {
	public $helper = array('Html', 'Form');

	public function index() {
		$this->set('title_for_layout', 'Home');
		$this->set('ip_addr', $_SERVER['REMOTE_ADDR']);
		$datetime = new DateTime();
		$this->set('date_time', $datetime->format('Y/m/d H:i:s'));
		
		$this->loadModel('Access_log');
		$log_data=array('Access_log'=>array('ip_addr'=>$_SERVER['REMOTE_ADDR'],
											'date_time'=>$datetime->format('Y/m/d H:i:s')));
		$this->Access_log->save($log_data);
	}
	
}
