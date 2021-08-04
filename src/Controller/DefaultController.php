<?php

namespace App\Controller;

use App\Form\HauteurType;
use App\Form\ChangementVoleeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use App\Entity\EntityPDF;
use App\Entity\Hauteur;
use App\Entity\User;
use App\Entity\TypeEchelle;
use App\Entity\EchelleAccessoire;
use App\Form\FixationType;
use App\Entity\Fixation;
use App\Form\SortieType;
use App\Form\AccessoireType;
use App\Form\AccessoireType2Type;
use App\Form\EchelleFixationType2Type;
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
use App\Entity\CoupeEchelle;
use App\Entity\CoupeEchelleEchelle;
use App\Entity\Role;
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






class DefaultController extends AbstractController
{
    public int $abc;
    
    /* Page d'accueil lorsque l'utilisateur se connecte ou reviens sur le site en session ou clique sur "Accueil"*/
    public function index(Request $request, UserInterface $user): Response
    {
        $iduser = $user;
        $session = $this->get('session');
        $session->set('iduser', $iduser);
        $session->remove('tab');

        if($session->get('valeurverification') == 1)
        {
        /* On cherche toutes les configs dans la base*/
        /*TODO Config selon l'utilisateur*/
        $session = $this->get('session');
        $valeur = $session->get('valeurverification');
		$em = $this->getDoctrine()->getManager();
        $ListeAdmin = $em->getRepository(Config::class)->FindAll();
        $listeConfig = $em->getRepository(User::class)->find($iduser->getId());
        
        /* On fait le rendering du formulaire vers Index.html.twig en passant la liste des configs obtenue plus haut*/          
        return $this->render('Index.html.twig',array('listeConfig' => $listeConfig, 'id' => $iduser, 'listeAdmin' => $ListeAdmin));
        }
        else{
            return $this->redirectToRoute('login');
        }
    }


    /* Affichage de la page donnant toutes les informations sur une config (Echelle type d'echelle, remise....)*/
    public function detailConfig(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1)
        {

        $session = $this->get('session');
        $valeur = $session->get('valeurverification');
        $em = $this->getDoctrine()->getManager();
        $listeConfig = $em->getRepository(Config::class)
                                ->find($id);
        $retour = $this->render('detailConfig.html.twig',
    array('listeConfig' => $listeConfig, 'id' => $id, 'valeur' => $valeur));
}
else{
    return $this->redirectToRoute('login');
}
    }


    /*1 Ajout d'une nouvelle configuration lorsque l'utilisateur clique sur "Ajouter"*/
    public function AjoutConfig(Request $request, int $verification): Response
    {
        $session = $this->get('session');
        if($session->get('tab'))
        {
            $tab = $session->get('tab');
            $idconfig = $tab[0]->getid();
            $class = $this->getDoctrine()->getRepository(Config::class)->find($idconfig);
        }
        else
        {
            /* On indique qu'on va utiliser une nouvelle config*/
            $class = new Config();
        }
        /*On creer le form en utilisant celui préalablement crée "ConfigType"*/
        $form = $this->createForm(ConfigType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $date = getdate();
            if($date["mday"]<10)
            {
                $jour = 0 . $date["mday"];
            }
            else
            {
                $jour = $date["mday"];
            }
            if($date["mon"]<10)
            {
                $mois = 0 . $date["mon"];
            }
            else
            {
                $mois = $date["mon"];
            }

            $datetime = new \DateTime($date["year"] . $mois . $jour);

            
            $user = $session->get('iduser');
            /* On insère la nouvelle config dans la base */
            $utilisateur = $session->get('iduser');
            $repository = $this->getDoctrine()->getRepository(User::class);
            $user = $repository->find($utilisateur->getId());
            $class->setUser($user);
            $class->setDateConfig($datetime);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($class);
            $entityManager->flush();
            $idConfig = $class->getId();
            $session = $this->get('session');
            $session->set('LaConfig',$idConfig);
            if($session->get('tab'))
            {
                $tab[0] = $class;
            }
            else
            {
                $tab = array($class);
            }
            $session->set('tab',$tab);
            /* On redirige vers la route pour ajouter le type d'echelle en passant l'id de la config précédente*/
            return $this->redirectToRoute('ajoutEchelle', array('id' => $idConfig));

        }
        /* On fait le rendering du formulaire vers ConfigAjout.html.twig en passant le formulaire crée plus haut*/  
        return $this->render('ConfigAjout.html.twig', ['ConfigAjoutForm' => $form->createView(),]);
    }


    public function ModifierConfig(Request $request, int $id)
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1)
        {

        $Config = $this->getDoctrine()->getRepository(Config::class)->find($id);

        $form = $this->createForm(ConfigType::class, $Config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Config);
            $entityManager->flush();

            return $this->redirectToRoute('index', [$session->get('iduser')]);
        }

        return $this->render('ConfigAjout.html.twig', ['ConfigAjoutForm' => $form->createView(),]);
    }
    else
    {
        return $this->render('Denied.html.twig');
    }
    }

    /*2 Ajout du type d'echelle lorsque l'utilisateur clique sur suivant dans la page d'ajout d'une config*/
    public function AjoutEchelle(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
            $tab = $session->get('tab');
            if(count($tab) > 1)
        {
            $idEchelle = $tab[1]->getid();
            $class = $this->getDoctrine()->getRepository(Echelle::class)->find($idEchelle);
        }
        else
        {
            /* On indique qu'on va utiliser une nouvelle config*/
            $class = new Echelle();
        }
            /* On renomme la variable de l'id de la config precedemment ajoutée*/
        $idconfig = $id;
        /*On indique qu'on va utiliser une nouvelle Echelle*/
        $repository = $this->getDoctrine()->getRepository(TypeEchelle::class);
        $ListeType = $repository->FindAll();
        /* On indique qu'on prépare une selection dans la table config (on raccourci la prochaine ligne de code)*/
        $repository = $this->getDoctrine()->getRepository(Config::class);
        /*Creation du formulaire du Type de l'echelle*/
        $form = $this->createForm(EchelleType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /* On cherche la config dont l'id vaut celui dans la variable renommée plus tot*/
            $Config = $repository->find($id);
            /* On utilise le setter de la nouvelle echelle pour y associer la config dont on a passé l'id*/
            $class->setEchelleConfig($Config);
            /* On insert l'id du type d'echelle choisie dans le formulaire dans l'entité echelle nouvelle*/
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($class);
            $entityManager->flush();
            /*On recupere l'id de l'echelle crée*/
            $idEchelle = $class->getId();
            $tab = $session->get('tab');
            array_push($tab, $class);
            $session->set('tab',$tab);

            /*Redirection vers la route pour choisir la norme de l'echelle en passant l'id de celle-ci*/
            return $this->redirectToRoute('ajoutHauteur', array('id'=> $idEchelle));

        }
        return $this->render('AjoutEchelle.html.twig', ['EchelleAjoutForm' => $form->createView(),'valeur' => $session->get('verification'), 'ListeType' => $ListeType]);
        }
        else{
            return $this->render('Denied.html.twig');
        }
        
    }

    /*4 Choix des normes*/
    public function ChoixNorme(Request $request, int $id): Response
    {
        $session = $this->get('session');
        /* Si l'utilisateur est un connecté ou un invité */
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        /*Creation du formulaire de Norme*/
        $tab = $session->get('tab');
        /* Echelle prend la valeur de tab[1] */
        $idEchelle = $tab[1]->getid();
        $class = $this->getDoctrine()->getRepository(Echelle::class)->find($idEchelle);
        $form = $this->createForm(NormeType::class, $class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
        /* On insert dans la base de données*/
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($class);
        $entityManager->flush();
        /*Redirection en passant la valeur de l'echelle*/
        return $this->redirectToRoute('ajoutHauteur', array('id'=> $id));
        }
        /*Rendering du formulaire*/
        return $this->render('ChoixNorme.html.twig',['NormeAjoutForm' => $form->createView()]);
    }
    /* Si l'utilisateur n'est ni connecté ni invité on retourne une page lui indiquant que l'accès est interdit */
    else{
        return $this->render('Denied.html.twig');
    }   
    }



    /* 5 Ajout d'une hauteur */
    public function AjoutHauteur(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        /* On utilise une nouvelle hauteur*/
        $class = new Hauteur();
        /*Creation du formulaire de la hauteur*/
        $form = $this->createForm(HauteurType::class, $class);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Hauteur::class);
        if ($form->isSubmitted() && $form->isValid())
        {
            /* Insertion de la nouvelle hauteur*/
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($class);
            $entityManager->flush();
            /* On recupere l'id de la hauteur qui vient d'être insérée et on la recherche l'entité*/
            $idHauteur = $class->getId();
            $Hauteur = $repository->find($idHauteur);
            $hauteurmesure = $Hauteur->getAfranchirHauteur();
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find($id);
            if($hauteurmesure>5999)
            {
                $Hauteur->setPrix(3000);
            }
            else
            {
                $Hauteur->setPrix(1500);
            }

            /*if($session->get('TableauEchelleCoupe'))
            {
            $tableau = $session->get('TableauEchelleCoupe');
            $tableau[0]->removeCoupeEchelleEchelle($tableau[3]);
            $tableau[1]->removeCoupeEchelleEchelle($tableau[4]);
            $tableau[2]->removeCoupeEchelleEchelle($tableau[3]);
            $tableau[2]->removeCoupeEchelleEchelle($tableau[4]);
            $entityManager->flush();
                
            }*/
            
            $hauteurmesure = $hauteurmesure - 710;
            if($hauteurmesure<=2010)
            {
                    $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                    $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                    $CoupeEchelleEchelle->setEchelleId($Echelle);
                    $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle);
                    $CoupeEchelleEchelle->setQte(1);
                    $entityManager->persist($CoupeEchelleEchelle);
                    $entityManager->flush($CoupeEchelleEchelle);
                    $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                    $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                    $entityManager->Flush();
            }
            else
            {
                if($hauteurmesure<= 3970)
                {
                    $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                    $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                    $TableauEchelleCoupe = array($CoupeEchelle);
                    array_push($TableauEchelleCoupe,$CoupeEchelle2);
                    array_push($TableauEchelleCoupe,$Echelle);
                    $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                    $CoupeEchelleEchelle->setEchelleId($Echelle);
                    $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle);
                    $CoupeEchelleEchelle->setQte(1);
                    $entityManager->persist($CoupeEchelleEchelle);
                    $entityManager->flush($CoupeEchelleEchelle);
                    array_push($TableauEchelleCoupe,$CoupeEchelleEchelle);
                    $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                    $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                    $CoupeEchelleEchelle->setEchelleId($Echelle);
                    $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                    $CoupeEchelleEchelle->setQte(1);
                    $entityManager->persist($CoupeEchelleEchelle);
                    $entityManager->flush($CoupeEchelleEchelle);
                    array_push($TableauEchelleCoupe,$CoupeEchelleEchelle);
                    $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                }
                else
                {
                    if($hauteurmesure<= 5930)
                    {
                        $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                        $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                        $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                        $CoupeEchelleEchelle->setEchelleId($Echelle);
                        $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                        $CoupeEchelleEchelle->setQte(2);
                        $entityManager->persist($CoupeEchelleEchelle);
                        $entityManager->flush($CoupeEchelleEchelle);
                        $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                        $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                    }
                    else
                    {
                        if($hauteurmesure<= 7890)
                        {
                            $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                            $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                            $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                            $CoupeEchelleEchelle->setEchelleId($Echelle);
                            $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle);
                            $CoupeEchelleEchelle->setQte(1);
                            $entityManager->persist($CoupeEchelleEchelle);
                            $entityManager->flush($CoupeEchelleEchelle);
                            $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                            $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                            $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                            $CoupeEchelleEchelle->setEchelleId($Echelle);
                            $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                            $CoupeEchelleEchelle->setQte(2);
                            $entityManager->persist($CoupeEchelleEchelle);
                            $entityManager->flush($CoupeEchelleEchelle);
                            $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                            $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                        }
                        else
                        {
                            if($hauteurmesure<= 9850)
                            {
                                $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                                $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                                $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                $CoupeEchelleEchelle->setEchelleId($Echelle);
                                $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                                $CoupeEchelleEchelle->setQte(3);
                                $entityManager->persist($CoupeEchelleEchelle);
                                $entityManager->flush($CoupeEchelleEchelle);
                                $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                            }
                            else
                            {
                                if($hauteurmesure<= 11810)
                                {
                                    $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                                    $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                                    $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                    $CoupeEchelleEchelle->setEchelleId($Echelle);
                                    $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle);
                                    $CoupeEchelleEchelle->setQte(1);
                                    $entityManager->persist($CoupeEchelleEchelle);
                                    $entityManager->flush($CoupeEchelleEchelle);
                                    $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                    $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                    $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                    $CoupeEchelleEchelle->setEchelleId($Echelle);
                                    $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                                    $CoupeEchelleEchelle->setQte(3);
                                    $entityManager->persist($CoupeEchelleEchelle);
                                    $entityManager->flush($CoupeEchelleEchelle);
                                    $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                    $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                }
                                else
                                {
                                    if($hauteurmesure<= 13770)
                                    {
                                        $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                                        $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                                        $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                        $CoupeEchelleEchelle->setEchelleId($Echelle);
                                        $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                                        $CoupeEchelleEchelle->setQte(4);
                                        $entityManager->persist($CoupeEchelleEchelle);
                                        $entityManager->flush($CoupeEchelleEchelle);
                                        $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                        $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                    }
                                    else
                                    {
                                        if($hauteurmesure<= 15730)
                                        {
                                            $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                                            $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                                            $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                            $CoupeEchelleEchelle->setEchelleId($Echelle);
                                            $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                                            $CoupeEchelleEchelle->setQte(5);
                                            $entityManager->persist($CoupeEchelleEchelle);
                                            $entityManager->flush($CoupeEchelleEchelle);
                                            $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                            $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                        }
                                        else
                                        {
                                            if($hauteurmesure<= 17690)
                                            {
                                                $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                                                $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                                                $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                                $CoupeEchelleEchelle->setEchelleId($Echelle);
                                                $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle);
                                                $CoupeEchelleEchelle->setQte(1);
                                                $entityManager->persist($CoupeEchelleEchelle);
                                                $entityManager->flush($CoupeEchelleEchelle);
                                                $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                                $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                                $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                                $CoupeEchelleEchelle->setEchelleId($Echelle);
                                                $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                                                $CoupeEchelleEchelle->setQte(5);
                                                $entityManager->persist($CoupeEchelleEchelle);
                                                $entityManager->flush($CoupeEchelleEchelle);
                                                $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                                $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                            }
                                            else
                                            {
                                                if($hauteurmesure<= 19650)
                                                {
                                                    $CoupeEchelle = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 1960]);
                                                    $CoupeEchelle2 = $this->getDoctrine()->getRepository(CoupeEchelle::class)->findOneBy(['Longueur' => 3360]);
                                                    $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                                    $CoupeEchelleEchelle->setEchelleId($Echelle);
                                                    $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle);
                                                    $CoupeEchelleEchelle->setQte(2);
                                                    $entityManager->persist($CoupeEchelleEchelle);
                                                    $entityManager->flush($CoupeEchelleEchelle);
                                                    $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                                    $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                                    $CoupeEchelleEchelle = new CoupeEchelleEchelle();
                                                    $CoupeEchelleEchelle->setEchelleId($Echelle);
                                                    $CoupeEchelleEchelle->setCoupeEchelleId($CoupeEchelle2);
                                                    $CoupeEchelleEchelle->setQte(6);
                                                    $entityManager->persist($CoupeEchelleEchelle);
                                                    $entityManager->flush($CoupeEchelleEchelle);
                                                    $TableauEchelleCoupe = array($CoupeEchelleEchelle);
                                                    $session->set('TableauEchelleCoupe',$TableauEchelleCoupe);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $entityManager->persist($class);
            $entityManager->flush();
            /* On récupère la session pour y affecter une variable qui sera accessible partout*/
            $session = $this->get('session');
            $session->set('hauteurmesure', $hauteurmesure);
            /* Recherche et insertion de la hauteur dans l'echelle*/
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find($id);
            $Echelle->setEchelleHauteur($Hauteur);
            $entityManager->persist($Echelle);
            $entityManager->flush();

            /* redirection avec l'id de l'echelle en parametre*/
            return $this->redirectToRoute('ajoutEntree', array('id'=> $id));
        }
        /* Rendering avec le form en parametre*/
        return $this->render('HauteurAjout.html.twig',['HauteurAjoutForm' => $form->createView()]);

    }
    else{
        return $this->render('Denied.html.twig');
    }
    }

    /*6 Ajout d'une entree */
    public function AjoutEntree(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        $tab = $session->get('tab');
        $idEchelle = $tab[1]->getid();
        $Echelle = $this->getDoctrine()->getRepository(Echelle::class)->find($idEchelle);
        /* On utilise une nouvelle Entree*/
        $class = new Entree();
        /*Creation du formulaire de l'entree*/
        $form = $this->createForm(EntreeType::class,$Echelle);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Entree::class);

        if ($form->isSubmitted() && $form->isValid())
        {
            /*On récupère les données envoyées par le formulaire lors du submit. Celui-ci renvoie un array*/
            /* Ensuite on recherche l'entrée avec la valeur de l'entree choisit*/

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Echelle);
            $entityManager->flush();
            /*Redirection avec l'id de l'echelle*/
            return $this->redirectToRoute('ajoutSortie', array('id'=> $id));
        }
        /*Renderingen passant le form dans le twig*/
        return $this->render('EntreeAjout.html.twig',['EntreeAjoutForm' => $form->createView()]);

    }
    else{
        return $this->render('Denied.html.twig');
    }
    }

    /* 7 Ajout d'une sortie */
    public function AjoutSortie(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        /* On utilise une nouvelle Sortie*/
        $tab = $session->get('tab');
        $idEchelle = $tab[1]->getid();
        $Echelle = $this->getDoctrine()->getRepository(Echelle::class)->find($idEchelle);
        /*Creation du formulaire de la Sortie*/
        $form = $this->createForm(SortieType::class,$Echelle);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Sortie::class);

        if ($form->isSubmitted() && $form->isValid())
        {
            /*On récupère les données envoyées par le formulaire lors du submit. Celui-ci renvoie un array*/
            /* Ensuite on recherche l'entrée avec la valeur de la sortiee choisit*/
            /*Enfin on insert*/
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Echelle);
            $entityManager->flush();

            return $this->redirectToRoute('ajoutFixation', array('id'=> $id));
        }

        return $this->render('SortieAjout.html.twig',['SortieAjoutForm' => $form->createView()]);
    }
    else{

        return $this->render('Denied.html.twig');
    }
    }

    /* Choix des accessoires d'une echelle dans la liste d'accessoires*/
    public function AjoutAccessoire(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        $Echelle = $this->getDoctrine()->getRepository(Echelle::class)->find($id);
        $form = $this->createForm(AccessoireType2Type::class, $Echelle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {   
            $this->getDoctrine()->getManager()->flush();
            if($session->get('valeurverification') == 2)
            {
                $redirection = $this->redirectToRoute('RegisterInvite', array('id'=> $id));
            }
            else
            {
                $redirection = $this->redirectToRoute('pdf', array('id'=> $id));
            }
            return $redirection;
        }
        return $this->render('AccessoireAjout.html.twig',['Form' => $form->createView()]);
    }
    else{
        return $this->render('Denied.html.twig');
    }
    }

    public function AjoutChangementVolee(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        $ChangementVolee = new ChangementVolee();
        $form = $this->createForm(ChangementVoleeType::class, $ChangementVolee);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {   
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find($id);

            $ChangementVolee->addEchelle($Echelle);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ChangementVolee);
            $entityManager->flush();

            $repository = $this->getDoctrine()->getRepository(ChangementVolee::class);
            $idChangement = $ChangementVolee->getId();
            $Changement = $repository->find($idChangement);
            
            
            $Echelle->addChangementVolee($Changement);
            $entityManager->persist($Echelle);
            $entityManager->flush();
            if($session->get('valeurverification') == 2)
            {
                $redirection = $this->redirectToRoute('RegisterInvite', array('id'=> $id));
            }
            else
            {
                $redirection = $this->redirectToRoute('pdf', array('id'=> $id));
            }
            return $redirection;
        }

        return $this->render('ChangementVoleeAjout.html.twig',['ChangementVoleeAjoutForm' => $form->createView()]);
    }
    else{
        return $this->render('Denied.html.twig');
    }
    }

    public function AjoutFixation(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        $Echelle = $this->getDoctrine()->getRepository(Echelle::class)->find($id);
    $form = $this->createForm(EchelleFixationType2Type::class, $Echelle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accessoireAjout', array('id'=> $id));
        }
        return $this->render('AjoutFixation.html.twig',['Form' => $form->createView()]);

    }
    else{
        return $this->render('Denied.html.twig');
    }
    }

        public function toPdfAction(Request $request,int $id, Pdf $knpSnappyPdf) {
        $session = $this->get('session');

        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
            $user = $session->get('iduser');
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find($id);
            $PrixSortie = $Echelle->getEchellesortie();
            $ListeAccessoire = $Echelle->getEchelleAccessoire();
            $ListeFixation = $Echelle->getEchelleFixation();
            $CoupeEchelle = $Echelle->getCoupeEchelleEchelles();
            

            /*$html = $this->renderView(
                'test.html.twig',
            [
                'ListeAccessoire' => $ListeAccessoire,
                'Echelle' => $Echelle, 
            ]);

            $html2 = $this->renderView(
                'test3.html.twig',
            [
                'Echelle' => $Echelle,
            ]);*/

                /*return new PdfResponse(
                    $knpSnappyPdf->getOutputFromHtml(array($html,$html2)),'Devis_Sans_Plan.pdf'
                );*/

                $nom = $user->getnom();
                $date = getdate();

                $knpSnappyPdf->generateFromHtml(
                    $this->renderView(
                        'test.html.twig',['ListeAccessoire' => $ListeAccessoire,
                        'Echelle' => $Echelle,
                        'CoupeEchelle' => $CoupeEchelle,
                        'ListeFixation' => $ListeFixation ]
                    ),
                    '../Devis/' . $user->getnom() . $date["mday"] . $date["mon"] . $date["year"] .'.pdf'
                );

                /*$knpSnappyPdf->generateFromHtml(
                    $this->renderView(
                        'test3.html.twig',['ListeAccessoire' => $ListeAccessoire,
                        'Echelle' => $Echelle, ]
                    ),
                    '../Devis/' . $user->getnom() . $date["mday"] . $date["mon"] . $date["year"] . '2.pdf'
                );*/
                $config = $session->get('LaConfig');
                for($i=1; $i<3; $i++)
                {
                    $EntityPDF = new EntityPDF();
                    $EntityPDF->setLibellePDF($user->getnom() . "'" . $i . "'");
                    $EntityPDF->setLocationPDF('../Devis/' . $user->getnom() . $date["mday"] . $date["mon"] . $date["year"] . $i . '.pdf');
                    $entityManager = $this->getDoctrine()->getManager();
                    $repository = $this->getDoctrine()->getRepository(Config::class);
                    $Config = $repository->find($session->get('LaConfig'));
                    $EntityPDF->setConfig($Config);
                    $entityManager->persist($EntityPDF);
                    $entityManager->persist($EntityPDF);
                    $entityManager->flush();
                }

                $session->remove('tab');
                

                if($session->get('valeurverification') == 2)
                {
                    return $this->redirectToRoute('logout');
                }
                else{
                    return $this->redirectToRoute('index', [$session->get('iduser')]);
                }
            }

            else{
                return $this->render('Denied.html.twig');
            }                
        }

        public function toPdfActionLegend(Pdf $knpSnappyPdf) {
            
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find(5);
            $PrixSortie = $Echelle->getEchellesortie();
            $ListeAccessoire = $Echelle->getEchelleAccessoire();
            $basedir = __DIR__.'/../';
            $filename = 'Devis';

            $html = $this->renderView(
                'test2.html.twig',[
                    'basedir' => $basedir,
                ],);

                return new PdfResponse(
                    $knpSnappyPdf->getOutputFromHtml($html),'Plan_Avec_Legende.pdf'
                );
        }

        public function toPdfActionIncruste(Pdf $knpSnappyPdf) {
            //return $this->render('test3.html.twig');
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find(5);
            $PrixSortie = $Echelle->getEchellesortie();
            $ListeAccessoire = $Echelle->getEchelleAccessoire();
            $basedir = __DIR__.'/../';
            $filename = 'Devis';

            $html = $this->renderView(
                'test3.html.twig',
            [
                'Echelle' => $Echelle,
            ]);

                return new PdfResponse(
                    $knpSnappyPdf->getOutputFromHtml($html),'Plan_Incrustation.pdf'
                );
        }

}
