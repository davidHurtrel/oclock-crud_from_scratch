<?php

namespace App\Controller;

abstract class CoreController
{
    protected $router;
    protected $match;

    public function __construct($router, $match)
    {
        $this->router = $router;
        $this->match = $match;
    }

    /**
     * @param string $viewName
     * @param array $viewData
     * @return void
     */
    protected function show(string $viewName, $viewData = []): void
    {
        $router = $this->router;
        $match = $this->match;

        $viewData['currentPage'] = $viewName;
        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewData);
        
        require_once __DIR__ . '/../../templates/layout/header.tpl.php';
        require_once __DIR__ . '/../../templates/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../../templates/layout/footer.tpl.php';
    }
}
