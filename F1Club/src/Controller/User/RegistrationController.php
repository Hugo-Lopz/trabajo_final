<?php

namespace App\Controller\User;

use App\Entity\ListaDeseos;
use App\Entity\Usuario;
use App\Form\RegistrationFormType;
use App\Module\CategoriaModule;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(CategoriaModule $categoriaModule, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        //Al incluir el navbar tengo que introducir sus datos
        $escalas = $categoriaModule->getEscalas();
        $equipos = $categoriaModule->getEquipos();
        $fabricantes = $categoriaModule->getFabricantes();

        $user = new Usuario();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $fecha_actual = new \DateTimeImmutable('now');

            //Creo una lista de deseos al usuario
            $lista_de_deseos = new ListaDeseos;
            $lista_de_deseos->setUsuario($user);

            //Establezco distintos datos del usuario
            $user->setListaDeseos($lista_de_deseos);
            $user->setFechaDeCreación($fecha_actual);
            $user->setRoles(['ROLE_USER']);
            $user->setDineroGastado(0);

            //Introduzco tanto el usuario como su lista de deseos a la base de datos
            $entityManager->persist($user);
            $entityManager->persist($lista_de_deseos);
            $entityManager->flush();


            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(), 'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes
        ]);
    }
}
