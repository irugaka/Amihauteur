<?php

namespace App\Controller;

use App\Entity\TypeEchelle;
use App\Form\HauteurType;
use App\Form\AjoutEntreeType;
use App\Form\AjoutSortieType;
use App\Form\ChangementVoleeType;
use App\Entity\EntityPDF;
use App\Entity\Hauteur;
use App\Entity\User;
use App\Entity\EchelleAccessoire;
use App\Form\FixationType;
use App\Entity\Fixation;
use App\Form\SortieType;
use App\Form\AccessoireType;
use App\Form\AccessoireType2Type;
use App\Entity\Accessoire;
use App\Entity\Sortie;
use App\Entity\Entree;
use App\Form\EntreeType;
use App\Form\ConfigType;
use App\Form\EchelleType;
use App\Form\EchelleNormeType;
use App\Form\TestType;
use App\Form\NormeType;
use App\Entity\Product;
use App\Entity\Echelle;
use App\Entity\Norme;
use App\Entity\Utilisateur;
use App\Entity\ChangementVolee;
use App\Entity\Config;
use App\Entity\Role;
use App\Form\AjoutAccessoireType;
use App\Form\AjoutTypeEchelleType;
use App\Form\FixationCollectionFormType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\User\UserInterface;

use Knp\Snappy\Pdf;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;






class AdminController extends AbstractController
{

    /*2 Ajout du type d'echelle lorsque l'utilisateur clique sur suivant dans la page d'ajout d'une config*/
    public function GestionAdmin(Request $request): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }
        $session = $this->get('session');
            $em = $this->getDoctrine()->getManager();
            $ListeAccessoires = $em->getRepository(Accessoire::class)->FindAll();
            $ListeTypeEchelle = $em->getRepository(TypeEchelle::class)->FindAll();
            $ListeEntree = $em->getRepository(Entree::class)->findAll();
            $ListeSortie = $em->getRepository(Sortie::class)->findAll();
            return $this->render('Admin/GestionAdminIndex.html.twig', ['listeAccessoire' => $ListeAccessoires, 'ListeTypeEchelle' => $ListeTypeEchelle, 'ListeEntree' => $ListeEntree, 'ListeSortie' => $ListeSortie]);
        
    }

     /* Accessoire ---------------------------------------------------------*/

    public function SupprimerAccessoire(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Accessoire = $em->getRepository(Accessoire::class)->Find($id);
        $Accessoire->setCommercialise(0);
        $em->persist($Accessoire);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function CommercialiseAccessoire(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Accessoire = $em->getRepository(Accessoire::class)->Find($id);
        $Accessoire->setCommercialise(1);
        $em->persist($Accessoire);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function ModifierAccessoire(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Accessoire = $em->getRepository(Accessoire::class)->Find($id);
        $form = $this->createForm(AjoutAccessoireType::class, $Accessoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($Accessoire);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierAccessoire.html.twig', ['AjoutAccessoireForm' => $form->createView(), 'id' => $id]);

    }

    public function AjouterAccessoire(Request $request): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }
        $id = 0;
        $Accessoire = new Accessoire();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(AjoutAccessoireType::class, $Accessoire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($Accessoire);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierAccessoire.html.twig', ['AjoutAccessoireForm' => $form->createView()]);

    }

    /* Type d'echelle ---------------------------------------------------------*/

    public function SupprimerTypeEchelle(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $TypeEchelle = $em->getRepository(TypeEchelle::class)->Find($id);
        $TypeEchelle->setCommercialise(0);
        $em->persist($TypeEchelle);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function CommercialiseTypeEchelle(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $TypeEchelle = $em->getRepository(TypeEchelle::class)->Find($id);
        $TypeEchelle->setCommercialise(1);
        $em->persist($TypeEchelle);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function ModifierTypeEchelle(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $TypeEchelle = $em->getRepository(TypeEchelle::class)->Find($id);
        $form = $this->createForm(AjoutTypeEchelleType::class, $TypeEchelle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($TypeEchelle);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierTypeEchelle.html.twig', ['AjoutTypeEchelleForm' => $form->createView(),'id' => $id]);

    }

    public function AjouterTypeEchelle(Request $request): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }
        $id = 0;
        $TypeEchelle = new TypeEchelle();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(AjoutTypeEchelleType::class, $TypeEchelle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($TypeEchelle);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierTypeEchelle.html.twig', ['AjoutTypeEchelleForm' => $form->createView(), 'id' => $id]);

    }


     /* Entrees ---------------------------------------------------------*/

     public function SupprimerEntree(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Entree = $em->getRepository(Entree::class)->Find($id);
        $Entree->setCommercialise(0);
        $em->persist($Entree);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function CommercialiseEntree(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Entree = $em->getRepository(Entree::class)->Find($id);
        $Entree->setCommercialise(1);
        $em->persist($Entree);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function ModifierEntree(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Entree = $em->getRepository(Entree::class)->Find($id);
        $form = $this->createForm(AjoutEntreeType::class, $Entree);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($Entree);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierEntree.html.twig', ['AjoutEntreeForm' => $form->createView(),'id' => $id]);

    }

    public function AjouterEntree(Request $request): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }
        $id = 0;
        $Entree = new Entree();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(AjoutEntreeType::class, $Entree);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($Entree);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierEntree.html.twig', ['AjoutEntreeForm' => $form->createView(), 'id' => $id]);

    }



     /* Sortie ---------------------------------------------------------*/

     public function SupprimerSortie(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Sortie = $em->getRepository(Sortie::class)->Find($id);
        $Sortie->setCommercialise(0);
        $em->persist($Sortie);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function CommercialiseSortie(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Sortie = $em->getRepository(Sortie::class)->Find($id);
        $Sortie->setCommercialise(1);
        $em->persist($Sortie);
        $em->flush();

        return $this->redirectToRoute('GestionAdmin');
    }

    public function ModifierSortie(Request $request, int $id): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        $Sortie = $em->getRepository(Sortie::class)->Find($id);
        $form = $this->createForm(AjoutSortieType::class, $Sortie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($Sortie);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierSortie.html.twig', ['AjoutSortieForm' => $form->createView(),'id' => $id]);

    }

    public function AjouterSortie(Request $request): Response
    {
        if($this->denyAccessUnlessGranted('ROLE_ADMIN'))
        {
            return $this->render('Denied.html.twig');
        }
        $id = 0;
        $Sortie = new Sortie();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(AjoutSortieType::class, $Sortie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($Sortie);
            $em->flush();

            return $this->redirectToRoute('GestionAdmin');
        }

        return $this->render('Admin/GestionAdminModifierSortie.html.twig', ['AjoutSortieForm' => $form->createView(), 'id' => $id]);
    }







}