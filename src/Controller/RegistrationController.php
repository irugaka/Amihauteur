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
        if($verification == 1)
        {
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $session = $this->get('session');
        $session->set('valeurverification', 1);

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
            return $this->redirectToRoute('logout');
            
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(), 'verification' => $verification,
            
        ]);
        }
        if($verification == 2)
        {
            $type = $this->getDoctrine()->getRepository(TypeUser::class)->find(2);
            $session = $this->get('session');
            $session->set('valeurverification', 2);
            $user->setPrenom('Invite');
            $user->setNom('Invite');
            $user->setUserTypeuser($type);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $session->set('iduser',$user);
            return $this->redirectToRoute('ajout', array('verification' => $verification,));
        }
    }

    public function RegisterInvite(Request $request, int $id): Response
    {
        $session = $this->get('session');
        $iduser = $session->get('iduser')->getId();
        $user = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $verification = $session->get('valeurverification');
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('pdf', array('id' => $id));

        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(), 'verification' => $verification,
            
        ]);



    }
}
