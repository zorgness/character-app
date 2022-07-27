<?php

namespace App\Controller;

use App\Entity\Weapon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeaponController extends AbstractController
{
    #[Route('/weapons', name: 'weapons')]
    public function index(): Response
    {
        Weapon::createWeapon();

        return $this->render('weapon/index.html.twig', [
            'controller_name' => 'WeaponController',
            'weapons' => Weapon::$weapons
        ]);
    }
    #[Route('/weapons/{id}', name: 'show_weapon')]
    public function show($id): Response
    {
        Weapon::createWeapon();
        $weapon = Weapon::getWeaponById($id);
        return $this->render('weapon/show.html.twig', [
            'controller_name' => 'WeaponController',
            'weapon' => $weapon
        ]);
    }
}
