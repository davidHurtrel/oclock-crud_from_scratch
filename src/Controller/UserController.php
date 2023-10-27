<?php

namespace App\Controller;

use App\Entity\User;

class UserController extends CoreController
{
    /**
     * @return void
     */
    public function index(): void
    {
        $this->show('user/index', [
            'users' => User::findAll()
        ]);
    }

    /**
     * @return void
     */
    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $role = filter_input(INPUT_POST, 'role');

            $user = new User();
            $user->setEmail($email);
            $user->setPassword(password_hash($password, PASSWORD_BCRYPT));
            $user->setRole($role);
            if ($user->save()) {
                header('Location: ' . $this->router->generate('user-index'));
                exit;
            } else {
                dd('problème lors de la création');
            }
        } else {
            $this->show('user/form');
        }
    }

    /**
     * @return void
     * @param int $id
     */
    public function update(int $id): void
    {

    }

    /**
     * @return void
     */
    public function delete(int $id): void
    {
        
    }
}
