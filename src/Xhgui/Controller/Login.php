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
        echo 3333;die;
    }

    public function post()
    {
        $app = $this->_app;
        $watches = $this->_watches;

        $saved = false;
        $request = $app->request();
        foreach ((array)$request->post('watch') as $data) {
            $saved = true;
            $watches->save($data);
        }
        if ($saved) {
            $app->flash('success', 'Watch functions updated.');
        }
        $app->redirect($app->urlFor('watch.list'));
    }
}
