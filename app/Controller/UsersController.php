<?php
class UsersController extends AppController {
	public $helper = array('Html', 'Form');

	public function index() {
		$this->set('title_for_layout', 'Home');
		$this->set('ip_addr', $_SERVER['REMOTE_ADDR']);
	}
	
}
