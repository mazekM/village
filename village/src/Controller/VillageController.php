<?php
namespace App\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VillageController
 *
 * @author Stagiaire
 */
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VillageController Extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction() {
        //return new \Symfony\Component\HttpFoundation\Response('Bienvenu sur Village.com');
        return $this->render('accueil.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction() {
        //return new \Symfony\Component\HttpFoundation\Response('Bienvenu sur Village.com');
        return $this->render('contact.html.twig');
    }

    // public function buildForm(FormBuilder $builder, array $options)
    // {
    //     $builder->add('email', 'email')
    //             ->add('subject', 'text')
    //             ->add('content', 'textarea');
    // }

    // public function getName()
    // {
    //     return 'Contact';
    // }
}
