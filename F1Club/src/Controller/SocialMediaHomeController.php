<?php

namespace App\Controller;

use App\Module\TemasModule;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocialMediaHomeController extends AbstractController
{
    #[Route('/social/media/home', name: 'app_social_media_home')]
    public function socialMediaHome(TemasModule $temasModule): Response
    {   
        $temas = $temasModule->getTemas();
        return $this->render('social_media_home/home.html.twig', [
            'temas' => $temas
        ]);
    }
}
