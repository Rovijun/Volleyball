<?php

namespace Controllers;

use Core\View;
use Models\Player;

class PlayerController
{
    public function index()
    {
        $players = Player::all();

        new View('players/index', compact("players"));
    }

    
    public function show($request, $id)
    {
        $player = Player::getById($id);

        new View('players/showOne', compact("player"));
    
    }

    public function create($request)
    {
      // $player = Player::create($request->getBody());

       new View ('players/addPlayer', $request->getBody());
    }

    /* public function insert ($request)
    {
       $player = Player::create($request->getBody());
       var_dump($player);
    
    } */

    public function delete($request, $id)
    {
        $player = Player::delete($id);

        new View('players/delete', compact("player"));
    }

    /* public function edit($request)
    {
       // $player = Player::update($id, $data);

        new View('players/edit', $request->getBody());

    } */

    /* public function update($request, $id, $data)
    {
        $player = Player::update($id, $data);

        new View('players/edit', $request->player);

        var_dump($request);
    } */
}