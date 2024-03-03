<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AddListController extends AbstractController
{
    #[Route('/add-list', name: 'app_add_list')]
    public function index(): Response
    {
        return $this->render('add_list/index.html.twig', [
            'controller_name' => 'AddListController',
            'breadcrumbTitle' =>'Add New Listing',
        ]);
    }
}
