<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index(): string
    {
        /* adversaryArray will be random after set up sessions
        $array = [
            'red' => 'red',
            'yellow' => 'yellow',
            'orange' => 'orange',
            'green' => 'green',
            'purple' => 'purple',
            'blue' => 'blue'];
        $adversaryArray = array_rand($array, 4);*/
        $adversaryArray = [
            'yellow' => 'yellow',
            'orange' => 'orange',
            'green' => 'green',
            'red' => 'red'
        ];

        $playerArray = [];
        $player = '';
        $matching = 0;
        $similarValues = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $colors = array_map('trim', $_POST);
            $playerArray = $colors;
            $similarValues = array_intersect($adversaryArray, $playerArray);
            $matching = count($similarValues);
            $player = implode(' ', $playerArray);
            /* to do : manage the strict comparison between the 2 arrays */
        }
        return $this->twig->render(
            'Home/index.html.twig',
            [
            'player' => $player,
            'matching' => $matching,
            ]
        );
    }
}
