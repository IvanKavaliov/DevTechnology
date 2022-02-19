<?php

namespace Framework;

use Framework\Services\Mysqli;
use App\Controller\HomePageController;
use App\Controller\AdminPanelController;

class Application
{
    private $mysqli;

    public function start() 
    {
        $this->mysqli = new Mysqli();
        $this->mysqli->start();
        switch (parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)) {
            case "/": 
                $controller = new HomePageController();
                break;
            case "/admin":
                $controller = new AdminPanelController();
                break;
            default:
                exit('404');
        }
        $controller->index();
    }

    public function finish()
    {
        $this->mysqli->finish();
    }
}
