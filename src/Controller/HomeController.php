<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index(): ?string
    {
        $array = ['red', 'yellow','orange', 'green', 'purple','blue'];

        if (empty($_SESSION['adversary'])) {
            $adversaryArrayKeys = array_rand($array, 4);
            $adversaryArray = [
                $array[$adversaryArrayKeys[0]],
                $array[$adversaryArrayKeys[1]],
                $array[$adversaryArrayKeys[2]],
                $array[$adversaryArrayKeys[3]],
            ];
            $_SESSION['adversary'] = $adversaryArray;
        }

        if (empty($_SESSION['rounds'])) {
            $_SESSION['rounds'] = [];
        }

        if (empty($_SESSION['results'])) {
            $_SESSION['results'] = [];
        }

        $playerArray = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['restart'])) {
                if ($_POST['restart'] == 'restartGame') {
                    session_destroy();
                    header('Location: /');
                    return null;
                }
            }
            if (isset($_POST['submit'])) {
                $colors = array_map('trim', $_POST);
                $playerArray = $colors;
                array_push($_SESSION['rounds'], $playerArray);
                $similarValuePosition = array_intersect_assoc($_SESSION['adversary'], $playerArray);
                $blackMatching = count($similarValuePosition);
                $similarValue = array_intersect($_SESSION['adversary'], $playerArray);
                $whiteMatching = count($similarValue) - $blackMatching;
                $results = [$blackMatching, $whiteMatching];
                array_push($_SESSION['results'], $results);
            }
        }
        return $this->twig->render(
            'Home/index.html.twig',
            [
            'sessions' => $_SESSION,
            ]
        );
    }
}
