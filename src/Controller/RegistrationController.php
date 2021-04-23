<?php

namespace App\Controller;

use App\Entity\TypeUser;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register/{verification}", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, int $verification): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            if($verification == 1)
            {
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
            }
            
            $repository = $this->getDoctrine()->getRepository(TypeUser::class);
            $typeuser = $repository->find($verification);
            $user->setUserTypeuser($typeuser);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            if($verification == 2)
            {
                $session = $this->get('session');
                $session->set('valeurverification', 2);
                $session->set('iduser',$user);
                $redirection = $this->redirectToRoute('ajout', array('verification' => $verification,));
            }
            else
            {
                $redirection = $this->redirectToRoute('logout');
            }

            return $redirection;
            
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(), 'verification' => $verification,
        ]);
    }
}
