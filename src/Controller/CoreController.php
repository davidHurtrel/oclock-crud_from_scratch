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

        require __DIR__ . '/../../config/acl.php';
        if ($match && array_key_exists($match['name'], $acl)) {
            $authorizedRoles = $acl[$match['name']];
            $this->checkAuthorization($authorizedRoles);
        }
    }

    /**
     * @param array $authorizedRoles
     * @return bool
     */
    public function checkAuthorization(array $authorizedRoles = []): bool
    {
        if (array_key_exists('user', $_SESSION)) {
            $user = $_SESSION['user'];
            if (in_array($user->getRole(), $authorizedRoles)) {
                return true;
            } else {
                dd('403 : Forbidden');
            }
        } else {
            header('Location: ' . $this->router->generate('login'));
            exit;
        }
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
