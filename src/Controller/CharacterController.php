<?php

namespace App\Controller;

use App\Entity\Character;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharacterController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('character/home.html.twig', [
            'controller_name' => 'CharacterController',
        ]);
    }
    #[Route('/characters', name: 'characters')]
    public function index(): Response
    {
        Character::createCharacter();
        return $this->render('character/index.html.twig', [
            'controller_name' => 'CharacterController',
            "players" => Character::$players

        ]);
    }
    #[Route('/characters/{id}', name: 'show_character')]
    public function show($id): Response
    {
        Character::createCharacter();
        $player = Character::getCharacterById($id);
        return $this->render('character/show.html.twig', [
            'controller_name' => 'CharacterController',
            "player" => $player

        ]);
    }
}
