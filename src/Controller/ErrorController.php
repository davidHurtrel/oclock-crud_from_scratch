<?php

namespace App\Controller;

class ErrorController extends CoreController
{
    /**
     * @return void
     */
    public function error403(): void
    {
        header('HTTP/1.0 403 Forbidden');
        $this->show('error/error403');
    }

    /**
     * @return void
     */
    public function error404(): void
    {
        header('HTTP/1.0 404 Not Found');
        $this->show('error/error404');
    }
}
