<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\CommentProduit;
use App\Entity\CommentSujet;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\Sujet;
use App\Entity\User;
use App\Entity\UserPanier;
use App\Form\ImageUserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



use App\Form\ProduitType;


class PrimaireController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();


        $repository_categories = $this->getDoctrine()->getRepository(Categorie::class);
        $categories= $repository_categories->findAll();

        $produits_carousel= $this->getDoctrine()->getRepository(Produit::class)->getCarousel();



        return $this->render('index/index.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'categories' => $categories,
            'produits_carousel' => $produits_carousel,
        ));
    }

    /**
     * @Route("/index.php", name="index1")
     */
    public function index1()
    {
        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/categorie/{slug}", name="categorie")
     */
    public function pageCategorie(Categorie $categorie, Request $request)
    {
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $titre= $categorie->getNom();


        $repository_produits = $this->getDoctrine()->getRepository(Produit::class);
        $produits= $repository_produits->produitsCategorie($categorie);




        return $this->render('categorie/categorie.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'titre' => $titre,
            'produits' => $produits,
        ));
    }

    /**
     * @Route("/recherche", name="recherche")
     */
    public function recherche(Request $request){
        $token = $request->query->get('form');
        $this->getDoctrine()->getRepository(Categorie::class);
        $produits = $this->getDoctrine()->getRepository(Produit::class)->rechercheNom($token['recherche']);


        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        if(count($produits)> 0)
        $titre= 'Resultats pour: '.$token['recherche'];
        else $titre= 'Aucun resultat pour: '.$token['recherche'];

        dump($produits);
        return $this->render('categorie/categorie.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'titre' => $titre,
            'produits' => $produits,
        ));
    }

    /**
     * @Route("/produit/{slug}", name="produit")
     */
    public function pageProduit($slug, Request $request){


        $this->getDoctrine()->getRepository(Categorie::class);
        $produit = $this->getDoctrine()->getRepository(Produit::class)->rechercheSlug($slug);
        $panier = $this->getDoctrine()->getRepository(Panier::class);

        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $form_achat = $this->createFormBuilder()
            ->add('quantite', IntegerType::class)
            ->getForm();

        $form_achat->handleRequest($request);

        if ($form_achat->isSubmitted() && $form_achat->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $user= $this->getUser();
            if(!$user) return $this->redirectToRoute('login');

            if(count($panier->verifPanier($user->getId()))== 0){
                $nouveau_panier= new Panier();
                $nouveau_panier->setUser($user);
                $nouveau_panier->setDisp(true);
                $nouveau_panier->setSlug("".$user->getId()."-".$nouveau_panier->getId());

                $nouveau_panier_produit= new UserPanier();
                $nouveau_panier_produit->setProduit($produit[0]);
                $nouveau_panier_produit->setPanier($nouveau_panier);
                $nouveau_panier_produit->setPrix($produit[0]->getPrix());
                $nouveau_panier_produit->setQuantite($form_achat->getData()["quantite"]);

                $em = $this->getDoctrine()->getManager();
                $em->persist($nouveau_panier);
                $em->persist($nouveau_panier_produit);
                $em->flush();

                $nouveau_panier= $panier->verifPanier($user->getId())[0];
                $nouveau_panier->setSlug("".$user->getId()."-".$nouveau_panier->getId());
                $em->persist($nouveau_panier);
                $em->flush();
            }
            else{

                $panier_produit= $this->getDoctrine()->getRepository(UserPanier::class)->verifUserPanier($produit, $panier->verifPanier($user->getId())[0]);

                if(count($panier_produit)== 0){
                    $nouveau_panier_produit= new UserPanier();
                    $nouveau_panier_produit->setProduit($produit[0]);
                    $nouveau_panier_produit->setPanier($panier->verifPanier($user->getId())[0]);
                    $nouveau_panier_produit->setPrix($produit[0]->getPrix());
                    $nouveau_panier_produit->setQuantite($form_achat->getData()["quantite"]);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($nouveau_panier_produit);
                    $em->flush();
                }
                else{
                    $panier_produit[0]->setQuantite($panier_produit[0]->getQuantite()+ $form_achat->getData()["quantite"]);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($panier_produit[0]);
                    $em->flush();
                }
            }




            return $this->redirectToRoute('panier');
        }


        //commentaires

        $commentaires= $this->getDoctrine()->getRepository(CommentProduit::class)->commentaires($produit[0]);

        $comment_sous= array();
        for ($i= 0; $i< count($commentaires); $i++){
            $form_sous_comment = $this->createFormBuilder()
                ->add('contenue_sous', TextType::class)
                ->add('commentaire', HiddenType::class, array('attr'=> array('value' => $commentaires[$i]->getId())))
                ->getForm();

            $form_sous_comment->handleRequest($request);

            if ($form_sous_comment->isSubmitted() && $form_sous_comment->isValid()) {
                if(!$this->getUser()) return $this->redirectToRoute('login');
                $comment_sujet= new CommentProduit();
                $comment_sujet->setDate();
                $comment_sujet->setUser($this->getUser());
                $comment_sujet->setProduit($produit[0]);
                $comment_sujet->setContenue($form_sous_comment->getData()["contenue_sous"]);
                $comment_sujet->setSous($form_sous_comment->getData()["commentaire"]);


                $em = $this->getDoctrine()->getManager();
                $em->persist($comment_sujet);
                $em->flush();

                return $this->redirect($this->generateUrl('produit', array('slug' => $produit[0]->getSlug()), UrlGeneratorInterface::ABSOLUTE_URL));

            }

            array_push($comment_sous, array($commentaires[$i], $form_sous_comment->createView(), $this->getDoctrine()->getRepository(CommentProduit::class)->commentairesSous($produit[0], $commentaires[$i]->getId())));
        }



        $form = $this->createFormBuilder()
            ->add('contenue', TextType::class, array('label' => 'Commentaire', 'attr'=> array('placeholder'=> 'Ajoutez votre commentaire...')))
            ->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            if(!$this->getUser()) return $this->redirectToRoute('login');

            $comment_sujet= new CommentProduit();
            $comment_sujet->setDate();
            $comment_sujet->setUser($this->getUser());
            $comment_sujet->setProduit($produit[0]);
            $comment_sujet->setContenue($form->getData()["contenue"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment_sujet);
            $em->flush();


            return $this->redirect($this->generateUrl('produit', array('slug' => $produit[0]->getSlug()), UrlGeneratorInterface::ABSOLUTE_URL));
        }


        return $this->render('produit/produit.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'produit'=> $produit[0],
            'panier'=> $form_achat->createView(),
            'commentaires' => $commentaires,
            'commentaires_sous' => $comment_sous,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/panier", name="panier")
     */
    public function panier(Request $request){


        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $facture = $this->createFormBuilder()
            ->add('rien', HiddenType::class, array('attr'=> array('data' => "rien")))
            ->getForm();



        $user= $this->getUser();
        if(!$user) return $this->redirectToRoute('login');

        $this->getDoctrine()->getRepository(Categorie::class);
        $this->getDoctrine()->getRepository(Produit::class);
        $this->getDoctrine()->getRepository(Panier::class);

        $facture->handleRequest($request);



        if ($facture->isSubmitted() && $facture->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated

            if(count($this->getDoctrine()->getRepository(Panier::class)->verifPanier($user))> 0){
                $panier_facture= $this->getDoctrine()->getRepository(Panier::class)->verifPanier($user)[0];

                $panier_facture->setDisp(false);
                $panier_facture->setDate();

                $em = $this->getDoctrine()->getManager();
                $em->persist($panier_facture);


                $moinsProduit= $this->getDoctrine()->getRepository(UserPanier::class)->moinsProduit($user, $panier_facture);

                for ($i= 0; $i< count($moinsProduit); $i++){
                    $produit= $moinsProduit[$i]->getProduit();
                    $produit->setQuantite($produit->getQuantite()- $moinsProduit[$i]->getQuantite());
                    $em->persist($produit);
                }

                $em->flush();
            }


            return $this->redirectToRoute('derniere-facture');


        }

        $produits= $this->getDoctrine()->getRepository(UserPanier::class)->pagePanier($user);

        $somme= count($produits);

        $test= array();

        for($i= 0; $i< $somme; $i++){
            $temp1= $produits[$i]->getQuantite();
            $temp2= $produits[$i]->getId();

            $werty= new Produit();
            $werty= $produits[$i]->getProduit();
            $temp3= $werty->getPrix();



            $temp= $this->createFormBuilder()
                ->add('quantite', IntegerType::class, array('attr'=> array('value' => "$temp1")))
                ->add('id', HiddenType::class, array('attr'=> array('value' => "$temp2")))
                ->add('prix', HiddenType::class, array('attr'=> array('value' => "$temp3")))
                ->getForm();

            $suppr= $this->createFormBuilder()
                ->add('panier_produit', HiddenType::class, array('attr'=> array('value' => "$temp2")))
                ->getForm();

            $temp->handleRequest($request);
            $suppr->handleRequest($request);


            if ($temp->isSubmitted() && $temp->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated

                $panier_produit= $this->getDoctrine()->getRepository(UserPanier::class)->find($temp->getData()["id"]);
                $panier_produit->setQuantite($temp->getData()["quantite"]);
                $panier_produit->setPrix($temp->getData()["prix"]);

                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                $em = $this->getDoctrine()->getManager();
                $em->persist($panier_produit);
                $em->flush();

                return $this->redirectToRoute('panier');
            }


            if ($suppr->isSubmitted() && $suppr->isValid()) {
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated

                $panier_produit= $this->getDoctrine()->getRepository(UserPanier::class)->find($suppr->getData()["panier_produit"]);

                $em = $this->getDoctrine()->getManager();
                $em->remove($panier_produit);
                $em->flush();


                return $this->redirectToRoute('panier');
            }


            $temp= $temp->createView();
            $suppr= $suppr->createView();





            array_push($test, array("produit"=> $produits[$i]->getProduit(), "quantite"=> $temp, "suppr"=> $suppr));
        }
        $ver= true;
        if(count($test)== 0) $ver= false;

        return $this->render('panier/panier.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'produits' => $test,
            'facture' => $facture->createView(),
            'ver' => $ver,
        ));
    }


    /**
     * @Route("/facture/{iduser}-{idpanier}", name="facture")
     */
    public function pdfAction($iduser, $idpanier)
    {

        $this->getDoctrine()->getRepository(Categorie::class);
        $this->getDoctrine()->getRepository(Produit::class);
        $this->getDoctrine()->getRepository(Panier::class);

        $contenue= $this->getDoctrine()->getRepository(UserPanier::class)->derniereFacture($iduser, $idpanier);




        $user= new User();
        $user= $this->getUser();

        if(!$user || $user->getId()!= $iduser) return $this->redirectToRoute('login');


        $produits= array();

        $total= 0;

        for ($i= 0; $i< count($contenue); $i++){
            $produit= new Produit();
            $produit= $contenue[$i]->getProduit();
            array_push($produits, array(
                "nom"=> $produit->getNom(),
                "quantite"=> $contenue[$i]->getQuantite(),
                "prix_unite"=> $contenue[$i]->getPrix(),
                "total"=> $contenue[$i]->getQuantite()* $contenue[$i]->getPrix(),
            ));

            $total+= $contenue[$i]->getQuantite()* $contenue[$i]->getPrix();
        }

        $html = $this->renderView('facture/facture.html.twig', array(
            "user"=> $user,
            "produits"=> $produits,
            "total"=> $total,
        ));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'facture.pdf'
        );
    }


    /**
     * @Route("/derniere-facture", name="derniere-facture")
     */
    public function derniereFacture(){

        if(!$this->getUser()) return $this->redirectToRoute('login');

        $this->getDoctrine()->getRepository(Categorie::class);
        $this->getDoctrine()->getRepository(Produit::class);
        $this->getDoctrine()->getRepository(Panier::class);


        $dernier_panier= $this->getDoctrine()->getRepository(Panier::class)->derniereFacture1($this->getUser()->getId())[0]["id"];


        $contenue= $this->getDoctrine()->getRepository(UserPanier::class)->derniereFacture($this->getUser()->getId(), $dernier_panier);




        $user= new User();
        $user= $this->getUser();
        $date= $contenue[0]->getPanier()->getDate()->format('d-m-Y');


        $produits= array();

        $total= 0;

        for ($i= 0; $i< count($contenue); $i++){
            $produit= new Produit();
            $produit= $contenue[$i]->getProduit();
            array_push($produits, array(
                "nom"=> $produit->getNom(),
                "quantite"=> $contenue[$i]->getQuantite(),
                "prix_unite"=> $contenue[$i]->getPrix(),
                "total"=> $contenue[$i]->getQuantite()* $contenue[$i]->getPrix(),
            ));

            $total+= $contenue[$i]->getQuantite()* $contenue[$i]->getPrix();
        }

        $html = $this->renderView('facture/facture.html.twig', array(
            "user"=> $user,
            "produits"=> $produits,
            "total"=> $total,
            "date"=> $date,
        ));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'facture.pdf'
        );
        return $this->redirectToRoute('panier');
    }




    /**
     * @Route("/administation/ajout_produit", name="nouveau_produit")
     */
    public function nouveauProduit(Request $request)
    {
        if(!$this->getUser()|| $this->getUser()->getRoles()[0]!= "ROLE_ADMIN") return $this->redirect($this->generateUrl('login'));
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */

            $file = $produit->getImage();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $produit->setImage($fileName);
            dump($produit);

            // ... persist the $product variable or any other work

            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->redirect($this->generateUrl('administration'));
        }

        return $this->render('produit/ajouter.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'form' => $form->createView(),
        ));
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }


    /**
     * @Route("/administration", name="administration")
     */
    public function administration()
    {
        if(!$this->getUser()|| $this->getUser()->getRoles()[0]!= "ROLE_ADMIN") return $this->redirect($this->generateUrl('login'));
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $this->getDoctrine()->getRepository(Categorie::class);
        $produits = $this->getDoctrine()->getRepository(Produit::class)->findAll();




        return $this->render('produit/administration.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'produits' => $produits,
        ));
    }

    /**
     * @Route("/administration/suppr/{slug}", name="suppr_produit")
     */
    public function supprimerProduit($slug)
    {

        if(!$this->getUser()|| $this->getUser()->getRoles()[0]!= "ROLE_ADMIN") return $this->redirect($this->generateUrl('login'));
        $this->getDoctrine()->getRepository(Categorie::class);
        $produit = $this->getDoctrine()->getRepository(Produit::class)->rechercheSlug($slug);
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $produit_suppr= new Produit();
        $produit_suppr= $produit[0];

        $this->getDoctrine()->getRepository(Produit::class)->supprProduit($produit_suppr->getId());




        return $this->redirect($this->generateUrl('administration'));
    }



    /**
     * @Route("/administration/modifier/{slug}", name="modif_produit")
     */
    public function modifProduit($slug, Request $request)
    {
        if(!$this->getUser()|| $this->getUser()->getRoles()[0]!= "ROLE_ADMIN") return $this->redirect($this->generateUrl('login'));
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $this->getDoctrine()->getRepository(Categorie::class);
        $produit = $this->getDoctrine()->getRepository(Produit::class)->rechercheSlug1($slug)[0];



        $form = $this->createFormBuilder()
            ->add('nom', TextType::class, array('label' => 'Nom du produit'))
            ->add('slug', TextType::class, array('label' => 'Entrez le lien vers le produit'))
            ->add('quantite', IntegerType::class, array('label' => 'Entrez la quantite du produit'))
            ->add('prix', NumberType::class, array('label' => 'Entrez le prix du produit'))
            ->add('categorie', EntityType::class, array(
                'class' => Categorie::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.id', 'ASC');
                },
                'choice_label' => 'nom',
                'data'=> $produit->getCategorie()

            ))
            ->add('description', TextareaType::class, array('label' => 'Description', 'data' => $produit->getDescription()))
        ->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */



            $produit->setNom($form->getData()["nom"]);
            $produit->setSlug($form->getData()["slug"]);
            $produit->setPrix($form->getData()["prix"]);
            $produit->setQuantite($form->getData()["quantite"]);
            $produit->setCategorie($form->getData()["categorie"]);
            $produit->setDescription($form->getData()["description"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->redirect($this->generateUrl('administration'));


        }




        return $this->render('produit/modif.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'form' => $form->createView(),
            'produit'=> $produit
        ));
    }

    /**
     * @Route("/forum", name="forum")
     */
    public function forum()
    {
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $sujets= $this->getDoctrine()->getRepository(Sujet::class)->findBy([], ['id' => 'DESC']);

        dump($sujets);




        return $this->render('forum/forum.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'sujets'=> $sujets
        ));
    }

    /**
     * @Route("/forum/ajouter", name="ajout_sujet")
     */
    public function ajoutSujet(Request $request)
    {
        if(!$this->getUser()) return $this->redirect($this->generateUrl('login'));
        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();



        $form = $this->createFormBuilder()
            ->add('titre', TextType::class, array('label' => 'Titre'))
            ->add('description', TextareaType::class, array('label' => 'Description'))
            ->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {



            $sujet= new Sujet();
            $sujet->setTitre("n");
            $sujet->setDescription("n");
            $sujet->setUser($this->getUser());
            $sujet->setDate();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sujet);
            $em->flush();

            $sujet= $this->getDoctrine()->getRepository(Sujet::class)->sujet($this->getUser())[0];

            $sujet->setTitre($form->getData()["titre"]);
            $sujet->setDescription($form->getData()["description"]);
            $sujet->setSlug($this->getUser()->getId()."-".$sujet->getId());

            $em = $this->getDoctrine()->getManager();
            $em->persist($sujet);
            $em->flush();





            return $this->redirect($this->generateUrl('forum'));


        }






        return $this->render('forum/ajout_sujet.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/forum/consulter/{id_user}-{id}", name="consulter_sujet")
     */
    public function consulterSujet($id_user, $id,Request $request)
    {

        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();


        $sujet= new Sujet();
        $sujet= $this->getDoctrine()->getRepository(Sujet::class)->find($id);
        $commentaires= $this->getDoctrine()->getRepository(CommentSujet::class)->commentaires($sujet);

        $comment_sous= array();
        for ($i= 0; $i< count($commentaires); $i++){
            $form_sous_comment = $this->createFormBuilder()
                ->add('contenue_sous', TextType::class)
                ->add('commentaire', HiddenType::class, array('attr'=> array('value' => $commentaires[$i]->getId())))
                ->getForm();

            $form_sous_comment->handleRequest($request);

            if ($form_sous_comment->isSubmitted() && $form_sous_comment->isValid()) {
                if(!$this->getUser()) return $this->redirectToRoute('login');
                $comment_sujet= new CommentSujet();
                $comment_sujet->setDate();
                $comment_sujet->setUser($this->getUser());
                $comment_sujet->setSujet($sujet);
                $comment_sujet->setContenue($form_sous_comment->getData()["contenue_sous"]);
                $comment_sujet->setSous($form_sous_comment->getData()["commentaire"]);


                $em = $this->getDoctrine()->getManager();
                $em->persist($comment_sujet);
                $em->flush();

                return $this->redirect($this->generateUrl('consulter_sujet', array('id_user' => $id_user, 'id' => $id), UrlGeneratorInterface::ABSOLUTE_URL));

            }

            array_push($comment_sous, array($commentaires[$i], $form_sous_comment->createView(), $this->getDoctrine()->getRepository(CommentSujet::class)->commentairesSous($sujet, $commentaires[$i]->getId())));
        }



        $form = $this->createFormBuilder()
            ->add('contenue', TextType::class, array('label' => 'Commentaire', 'attr'=> array('placeholder'=> 'Ajoutez votre commentaire...')))
            ->getForm();
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            if(!$this->getUser()) return $this->redirectToRoute('login');

            $comment_sujet= new CommentSujet();
            $comment_sujet->setDate();
            $comment_sujet->setUser($this->getUser());
            $comment_sujet->setSujet($sujet);
            $comment_sujet->setContenue($form->getData()["contenue"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment_sujet);
            $em->flush();


            return $this->redirect($this->generateUrl('consulter_sujet', array('id_user' => $id_user, 'id' => $id), UrlGeneratorInterface::ABSOLUTE_URL));
        }


        return $this->render('forum/consult_sujet.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'form' => $form->createView(),
            'sujet' => $sujet,
            'commentaires' => $commentaires,
            'commentaires_sous' => $comment_sous,
        ));
    }



    /**
     * @Route("/parametre", name="parametre")
     */
    public function parametre(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if (!$this->getUser()) return $this->redirectToRoute('login');

        $form_recherche = $this->createFormBuilder()
            ->setAction($this->generateUrl('recherche'))
            ->setMethod('GET')
            ->add('recherche', TextType::class)
            ->getForm();

        $user= $this->getUser();
        $identifiant= $user->getUsername();
        $email= $user->getEmail();

        $form_image= $this->createFormBuilder()
            ->add('image', FileType::class, array('label' => 'Image'))
            ->getForm();

        $user1 = new User();
        $form_image = $this->createForm(ImageUserType::class, $user1);

        $form_identifiant = $this->createFormBuilder()
            ->add('identifiant', TextType::class, array('attr'=> array('value'=> $identifiant)))
            ->getForm();

        $form_email = $this->createFormBuilder()
            ->add('email', TextType::class, array('attr'=> array('value'=> $email)))
            ->getForm();

        $form_mot_de_passe = $this->createFormBuilder()
            ->add('mot_de_passe', PasswordType::class)
            ->getForm();


        $form_image->handleRequest($request);
        $form_identifiant->handleRequest($request);
        $form_email->handleRequest($request);
        $form_mot_de_passe->handleRequest($request);

        if ($form_image->isSubmitted() && $form_image->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */

            $file = $user1->getImage();

            dump($file);

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $user->setImage($fileName);
            dump($user);

            // ... persist the $product variable or any other work

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            //return $this->redirect($this->generateUrl('parametre'));
        }

        if ($form_identifiant->isSubmitted() && $form_identifiant->isValid()){
            $user->setUsername($form_identifiant->getData()["identifiant"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('parametre');

        }

        if ($form_email->isSubmitted() && $form_email->isValid()){
            $user->setEmail($form_email->getData()["email"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('parametre');
        }

        if ($form_mot_de_passe->isSubmitted() && $form_mot_de_passe->isValid()){

            $this->modifierMotDePasse($passwordEncoder, $user, $form_mot_de_passe->getData()["mot_de_passe"]);
            return $this->redirectToRoute('parametre');
        }

        if(!$user->getImage()) $img= 'photo.jpg';
        else $img= $user->getImage();



        return $this->render('parametre/parametre.html.twig', array(
            'recherche' => $form_recherche->createView(),
            'email'=> $form_email->createView(),
            'identifiant'=> $form_identifiant->createView(),
            'pass'=> $form_mot_de_passe->createView(),
            'image'=> $form_image->createView(),
            'img'=> $img,
        ));
    }




    public function modifierMotDePasse(UserPasswordEncoderInterface $encoder, $user, $mot_de_passe)
    {
        $encoded = $encoder->encodePassword($user, $mot_de_passe);

        $user->setPassword($encoded);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

    }

}
