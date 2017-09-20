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
        var_dump($request);die;
        // $app->redirect($app->urlFor('watch.list'));
    }
}
