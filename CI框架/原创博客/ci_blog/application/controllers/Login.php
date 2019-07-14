<?php
/*
http://127.0.0.1/ci_blog/index.php/login

http://localhost/CI_blog/index.php/login/logout
*/

include_once('News.php');

class Login extends News {


	public function index()
	{
		//echo "blog login";
		$this->load->view('templates/header');
		$this->load->view('news/login');
		$this->load->view('templates/footer');
		
	}
	function check() {
		$this->load->library('encrypt');  
		
        $this -> load -> model('user_test');
        $user = $this -> user_test -> u_select($_POST['u_name']);
		//var_dump($user);
		$passwd = $user[0] -> upawd;
		$pawd = $this->encrypt->decode($passwd);
		
        if ($user) {
            if ($pawd == $_POST['u_pawd']) {
                //echo 'pw right';
                // 跳到首页
				echo "<script>window.location.href='".site_url('news/')."'</script>";
                $this -> load -> library('session');
                $arr = array('s_id' => $user[0] -> uid);
                $this -> session -> set_userdata($arr);
            } else {
                echo '密码错误';
            }
        } else {
            echo '用户名错误';
        }
    }

    // 写入session
    function is_login() {
        $this -> load -> library('session');
        
        if ($this -> session -> userdata('s_id')) {
            echo "logined";
        } else {
            echo "no login";
        }
    }

    function logout() {
        
        $this -> load -> library('session');
        $this -> session -> unset_userdata('s_id');
        // 注销完了之后跳转到首页
        header("Location: http://localhost/CI_blog/index.php/news");     // 跳转到登陆界面

    }

}