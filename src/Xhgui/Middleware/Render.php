<?php
use Slim\Middleware;

class Xhgui_Middleware_Render extends Middleware
{
    public function call()
    {

        $app = $this->app;

        if (empty($_SESSION['username'])) {
            // $app->redirect();
            var_dump($app->urlFor('login.index'));
        }

        // Run the controller action/route function
        $this->next->call();

        // Render the template.
        if (isset($app->controller)) {
            $app->controller->render();
        }
    }

}
