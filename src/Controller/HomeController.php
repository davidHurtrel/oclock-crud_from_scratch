<?php

namespace App\Controller;

class HomeController extends CoreController
{
    /**
     * @return void
     */
    public function index(): void
    {
        $this->show('home/index');
    }
}
