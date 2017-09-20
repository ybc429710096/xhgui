<?php

class Xhgui_Controller_Login extends Xhgui_Controller
{

    protected $_app;

    public function __construct($app)
    {
        $this->_app = $app;
    }

    public function index()
    {
        $this->_template = 'login/index.twig';
    }

    public function doLogin()
    {
        $app = $this->_app;
        $request = $app->request()->post();
        $userList = Xhgui_Config::read('admin.user');
        $password = $userList[$request['username']];
        //验证
    	if (empty($password) || $password != $request['password']) {
    		$json = array('status' => 0, 'info' => '用户名或密码错误');
    		die(json_encode($json));
    	}

    	$_SESSION['username'] = $request['username'];
    	$json = array('status' => 1, 'info' => '登录成功');
        die(json_encode($json));
    }


}
