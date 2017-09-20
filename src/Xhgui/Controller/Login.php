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
        $user = $userList[$request['username']];
        try {
        	if (empty($user) || $user['password'] != $request['password']) {
        		return throw new Exception('用户名或密码错误', 0);        		
        	}
        	$_SESSION['username'] = $user['username'];
        	$json = array('status' => 1);
        } catch (Exception $e) {
        	$json = array('status' => 0, 'info' => $e->getMessage());
        }

        die(json_encode($json));
    }
}
