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
use App\Entity\Evenements;

class VillageController Extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction() {
           
        return $this->render('accueil.html.twig',[
                "page_active" => "accueil"
            ]);
    }

     /**
     * @Route("/historique", name="historique")
     */
    public function historiqueAction() {
            return $this->render('historique.html.twig',[
                "page_active" => "historique"
            ]);
    }

     /**
     * @Route("/evenements", name="evenements")
     */
    public function evenementsAction() {
        $evenement=new Evenements();  
        //$evenement=new \stdClass();
        
        
        
        $em=$this->getDoctrine()->getManager();
        $evenement=new Evenements();
        $evenement->setTitle('Armistice');
        $evenement->setDescription('Les cérémonies célébrant le 74e anniversaire de la victoire du 8 mai 1945 auront lieu devant le monument aux morts du Garric, place René-Cassin, le mercredi 8 mai, à 11 h, avec remise de décorations, suivi d\'un vin d\'honneur dans la salle polyvalente Lucie-Aubrac.');
        $evenement->setCategory('Fêtes');

        //$em->persist($evenement);
        // $em->flush();
        
        return $this->render('evenements.html.twig',[
            "page_active"=>"evenements",'evenement'=>$evenement
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction() {
            return $this->render('contact.html.twig',[
                "page_active" => "contact"
            ]);
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
