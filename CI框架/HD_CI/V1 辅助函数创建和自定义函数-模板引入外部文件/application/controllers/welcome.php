<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Welcome和文件名一样

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');  //定义view 的视图文件
	}
}

