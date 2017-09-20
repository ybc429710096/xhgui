<?php
use Slim\Middleware;

class Xhgui_Middleware_Render extends Middleware
{
    public function call()
    {
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';die;
        $app = $this->app;

        // Run the controller action/route function
        $this->next->call();

        // Render the template.
        if (isset($app->controller)) {
            $app->controller->render();
        }
    }

}
