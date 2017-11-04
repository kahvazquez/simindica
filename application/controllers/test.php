<?php

Class Test extends CI_Controller {

	public function index() {
	$data = array();
	$this->load->model('Users');
	$user = new Users();
	$user->setUsername("karine");
	$user->setPassword("1234");
	$data['message']=$user->login();
	echo '<tt><pre>' . $data ['message'] . '</pre></tt>';

	

	echo '<h2> this is a test</h2>';
	$this->load->view('test',$data);
     }

}
