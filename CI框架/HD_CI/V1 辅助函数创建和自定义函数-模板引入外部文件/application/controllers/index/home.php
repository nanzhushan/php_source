<?php


// 前台默认控制器

class Home extends CI_Controller {

    public function index()
	{
        $this->load->view('index/home.html');
    }
    
    public function hd()
	{
        echo "this is hd by knight";
	}


}



?>