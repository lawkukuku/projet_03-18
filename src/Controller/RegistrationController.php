<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('index');
        }
        // 1) build the form
        $user = new User();
        $form1 = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('login');
        }

        $form_recherche = $this->createFormBuilder()
            ->add('recherche', TextType::class)
            ->getForm();

        $form_recherche->handleRequest($request);
        if ($form_recherche->isSubmitted() && $form_recherche->isValid()) {}

        return $this->render(
            'registration/register.html.twig', array(
                'form1' => $form1->createView(),
                'recherche' => $form_recherche->createView(),
        ));
    }
}
