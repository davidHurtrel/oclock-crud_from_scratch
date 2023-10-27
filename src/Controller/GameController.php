<?php

namespace App\Controller;

use App\Entity\Game;

class GameController extends CoreController
{
    public function index()
    {
        $this->show('game/index', [
            'games' => Game::findAll()
        ]);
    }
}
