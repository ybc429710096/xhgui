<?php
use Slim\Middleware;

class Xhgui_Middleware_Render extends Middleware
{
    public function call()
    {
        session_start();
        $app = $this->app;
        echo 3;die;
        if (empty($_SESSION['username'])) {
            $app->redirect($app->urlFor('login.index'));
        }

        // Run the controller action/route function
        $this->next->call();

        // Render the template.
        if (isset($app->controller)) {
            $app->controller->render();
        }
    }

}
