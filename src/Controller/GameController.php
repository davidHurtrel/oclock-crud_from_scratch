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

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = filter_input(INPUT_POST, 'name');
            $img = filter_input(INPUT_POST, 'img');
            $description = filter_input(INPUT_POST, 'description');
            $price = filter_input(INPUT_POST, 'price');
            
            $game = new Game();
            $game->setName($name);
            $game->setDescription($description);
            $game->setImg($img);
            $game->setPrice($price);

            $game->save();

            header('Location: ' . $this->router->generate('game-index'));
            exit;

        } else {
            $this->show('game/form');
        }
    }
}
