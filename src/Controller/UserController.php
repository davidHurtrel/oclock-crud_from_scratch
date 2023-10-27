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
