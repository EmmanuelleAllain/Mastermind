<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index(): string
    {
        $array = [
            'red' => 'red',
            'yellow' => 'yellow',
            'orange' => 'orange',
            'green' => 'green',
            'purple' => 'purple',
            'blue' => 'blue'];
        $adversaryArray = array_rand($array, 4);

        $playerArray = [];
        $player = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $colors = array_map('trim', $_POST);
            if (!empty($colors)) {
                $playerArray = $colors;
                $player = implode(' ', $playerArray);
            }
        }
        $adversary = implode(' ', $adversaryArray);
        return $this->twig->render('Home/index.html.twig', ['adversary' => $adversary,'player' => $player]);
    }
}
