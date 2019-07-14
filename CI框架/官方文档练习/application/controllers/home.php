<?php

// url 片段
// http://127.0.0.1/index.php/home/index
// home 是控制器，index是里面的方法
// http://127.0.0.1/index.php/home/  默认访问index的方法
//http://127.0.0.1/index.php/home/hd

// 前台默认控制器

class Home extends CI_Controller {

    public function index()
	{
        
        // echo "这是自定义的控制器";
        
        // $this->load->view('home');

        $data['title']= '我是标题';
        $data['name']= array(
            'xx',
            'oo',
            'yy'

        );

        p($data);
        // redirect('/home/hd');                         // 跳转
        echo site_url();
        echo '<hr/>';
        echo base_url();

        // $this->load->view('index/home',$data);    // $data分配一次就行了,不需要分配3次
        
    }
    
    public function hd()
	{
        echo "this is hd by knight";
	}


}



?>