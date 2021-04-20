<?php

namespace App\Controller;

use App\Form\HauteurType;
use App\Form\ChangementVoleeType;
use App\Entity\Hauteur;
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

        if($session->get('valeurverification') == 1)
        {
        /* On cherche toutes les configs dans la base*/
        /*TODO Config selon l'utilisateur*/
		$em = $this->getDoctrine()->getManager();
        $listeConfig = $em->getRepository(Config::class)
                                ->FindAll();
        $session = $this->get('session');
        $valeur = $session->get('valeurverification');
        /* On fait le rendering du formulaire vers Index.html.twig en passant la liste des configs obtenue plus haut*/          
        return $this->render('Index.html.twig',array('listeConfig' => $listeConfig, 'id' => $iduser));
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
         
        /* On indique qu'on va utiliser une nouvelle config*/
        $class = new Config();
        /*On creer le form en utilisant celui préalablement crée "ConfigType"*/
        $form = $this->createForm(ConfigType::class, $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /* On insère la nouvelle config dans la base */
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($class);
            $entityManager->flush();
            /* On récupère l'id de la config qui vient d'être insérée*/
            $idConfig = $class->getId();
            /* On redirige vers la route pour ajouter le type d'echelle en passant l'id de la config précédente*/
            return $this->redirectToRoute('ajoutEchelle', array('id' => $idConfig));

        }
        /* On fait le rendering du formulaire vers ConfigAjout.html.twig en passant le formulaire crée plus haut*/  
        return $this->render('ConfigAjout.html.twig', ['ConfigAjoutForm' => $form->createView(),]);
        
    }

    /*2 Ajout du type d'echelle lorsque l'utilisateur clique sur suivant dans la page d'ajout d'une config*/
    public function AjoutEchelle(Request $request, int $id): Response
    {
        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
            /* On renomme la variable de l'id de la config precedemment ajoutée*/
        $idconfig = $id;
        /*On indique qu'on va utiliser une nouvelle Echelle*/
        $class = new Echelle();
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

            /*Redirection vers la route pour choisir la norme de l'echelle en passant l'id de celle-ci*/
            return $this->redirectToRoute('ChoixNorme', array('id'=> $idEchelle));

        }
        return $this->render('AjoutEchelle.html.twig', ['EchelleAjoutForm' => $form->createView(),'valeur' => $session->get('verification')]);
        }
        else{
            return $this->render('Denied.html.twig');
        }
        
    }

    /*4 Choix des normes*/
    public function ChoixNorme(Request $request, int $id): Response
    {

        $session = $this->get('session');
        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
        /*Creation du formulaire de Norme*/
        $form = $this->createForm(NormeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
        /*On récupère les données envoyées par le formulaire lors du submit. Celui-ci renvoie un array*/
        $Data = $form->getData();
        /*Selection dans l'array du champs renseignant lid de la norme choisie*/
        $IdNorme = $Data['id'];
        /*On recherche la norme qui correspond à l'id*/
        $repository = $this->getDoctrine()->getRepository(Norme::class);
        $Norme = $repository->find($IdNorme);
        /*On recherche L'echelle grâce à l'id passée precedemment*/ 
        $repository = $this->getDoctrine()->getRepository(Echelle::class);
        $Echelle = $repository->find($id);
        /* On utilise le setter et on insert dans echelle*/
        $Echelle->setEchelleNorme($Norme);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($Echelle);
        $entityManager->flush();
        /*Redirection en passant la valeur de l'echelle*/
        return $this->redirectToRoute('ajoutHauteur', array('id'=> $id));

        }
        /*Rendering du formulaire*/
        return $this->render('ChoixNorme.html.twig',['NormeAjoutForm' => $form->createView()]);

    }
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
            if($hauteurmesure>5999)
            {
                $Hauteur->setPrix(3000);
            }
            else
            {
                $Hauteur->setPrix(1500);
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
        /* On utilise une nouvelle Entree*/
        $class = new Entree();
        /*Creation du formulaire de l'entree*/
        $form = $this->createForm(EntreeType::class);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Entree::class);

        if ($form->isSubmitted() && $form->isValid())
        {
            /*On récupère les données envoyées par le formulaire lors du submit. Celui-ci renvoie un array*/
            /* Ensuite on recherche l'entrée avec la valeur de l'entree choisit*/
            $Data = $form->getData();
            $idEntree = $Data['id'];
            $Entree = $repository->find($idEntree);
            /* On recherche l'echelle grace à l'id passé puis on insert grâce au setter*/
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find($id);
            $Echelle->setEchelleEntree($Entree);
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
        $class = new Sortie();
        /*Creation du formulaire de la Sortie*/
        $form = $this->createForm(SortieType::class);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Sortie::class);

        if ($form->isSubmitted() && $form->isValid())
        {
            /*On récupère les données envoyées par le formulaire lors du submit. Celui-ci renvoie un array*/
            /* Ensuite on recherche l'entrée avec la valeur de la sortiee choisit*/
            /*Enfin on insert*/
            $Data = $form->getData();
            $idSortie = $Data['id'];
            $Sortie = $repository->find($idSortie);
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find($id);
            $Echelle->setEchelleSortie($Sortie);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Echelle);
            $entityManager->flush();


            return $this->redirectToRoute('accessoireAjout', array('id'=> $id));
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
            return $this->redirectToRoute('ajoutChangementVolee', array('id'=> $id));
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

            return $this->redirectToRoute('pdf', array('id'=> $id));
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
        $Fixation = new Fixation();
        $Echelle = $this->getDoctrine()->getRepository(Echelle::class)->find($id);
    $form = $this->createForm(FixationCollectionFormType::class/*, Echelle::class*/);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $Data = $form->getData();
            echo dump($Data['Fixation']);
            $this->getDoctrine()->getManager()->flush();

            //return $this->redirectToRoute('pdf', array('id'=> $id));
        }
        return $this->render('AjoutFixation.html.twig',['Form' => $form->createView()]);

    }
    else{
        return $this->render('Denied.html.twig');
    }
    }

        public function toPdfAction(Request $request, Pdf $knpSnappyPdf) {
        $session = $this->get('session');

        if($session->get('valeurverification') == 1 || $session->get('valeurverification') == 2)
        {
            $user = $session->get('iduser');
        if($session->get('valeurverification') == 2)
        {
            $session->clear();
        }
            $repository = $this->getDoctrine()->getRepository(Echelle::class);
            $Echelle = $repository->find(5);
            $PrixSortie = $Echelle->getEchellesortie();
            $ListeAccessoire = $Echelle->getEchelleAccessoire();
            $i = 1;

            $html = $this->renderView(
                'test.html.twig',
            [
                'ListeAccessoire' => $ListeAccessoire,
                'Echelle' => $Echelle, 
            ]);

            $html2 = $this->renderView(
                'test3.html.twig',
            [
                'Echelle' => $Echelle,
            ]);

                /*return new PdfResponse(
                    $knpSnappyPdf->getOutputFromHtml(array($html,$html2)),'Devis_Sans_Plan.pdf'
                );*/
                $knpSnappyPdf->generateFromHtml(
                    $this->renderView(
                        'test.html.twig',['ListeAccessoire' => $ListeAccessoire,
                        'Echelle' => $Echelle, ]
                    ),
                    '../Devis/Devis1.pdf'
                );

                $knpSnappyPdf->generateFromHtml(
                    $this->renderView(
                        'test3.html.twig',['ListeAccessoire' => $ListeAccessoire,
                        'Echelle' => $Echelle, ]
                    ),
                    '../Devis/Devis2.pdf'
                );
            }
            else{
                return $this->render('Denied.html.twig');
            }
            return $this->redirectToRoute('index');


                
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
