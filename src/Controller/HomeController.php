<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index(): string
    {
        $array = ['red', 'yellow','orange', 'green', 'purple','blue'];
        $adversaryArrayKeys = array_rand($array, 4);
        $adversaryArray = [
            $array[$adversaryArrayKeys[0]],
            $array[$adversaryArrayKeys[1]],
            $array[$adversaryArrayKeys[2]],
            $array[$adversaryArrayKeys[3]],
        ];
        $playerArray = [];
        $player = '';
        $blackMatching = 0;
        $whiteMatching = 0;


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $colors = array_map('trim', $_POST);
            $playerArray = $colors;

            $similarValuePosition = array_intersect_assoc($adversaryArray, $playerArray);
            $blackMatching = count($similarValuePosition);
            $similarValue = array_intersect($adversaryArray, $playerArray);
            $whiteMatching = count($similarValue) - $blackMatching;
            $player = implode(' ', $playerArray);
        }
        return $this->twig->render(
            'Home/index.html.twig',
            [
            'player' => $player,
            'blackMatching' => $blackMatching,
            'whiteMatching' => $whiteMatching,
            ]
        );
    }
}
