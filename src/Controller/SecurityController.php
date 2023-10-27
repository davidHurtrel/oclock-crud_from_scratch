<?php

namespace App\Controller;

use App\Entity\User;

class SecurityController extends CoreController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = trim($_POST['password']);
            $user = User::findByEmail($email);
            if ($user) {
                if (password_verify($password, $user->getPassword())) {
                    $_SESSION['user'] = $user;
                    header('Location: ' . $this->router->generate('home'));
                    exit;
                } else {
                    dd('mot de passe erroné');
                }
            } else {
                dd('email inexistant');
            }
            header('Location: ' . $this->router->generate('login'));
            exit;
        } else {
            $this->show('security/login');
        }
    }
    
    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: ' . $this->router->generate('login'));
    }
}
