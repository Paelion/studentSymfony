<?php

namespace App\Controller;

use App\Entity\matiere;
use App\Entity\Note;
use App\Form\MatiereType;
use App\Form\NoteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, EntityManagerInterface $entityManager)
    {

        $note = new Note();

        $noteRepository = $this->getDoctrine()
            ->getRepository(Note::class)
            ->findAll();


        $matiere = $this->getDoctrine()
            ->getRepository(matiere::class)
            ->findAll();

        $form = $this->createForm(NoteType::class, $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $note = $form->getData();

            $matieres = $this->getDoctrine()
                ->getRepository(matiere::class)
                ->find($request->request->get('matiereId'));
            $note->setMatiereId($matieres);

            $entityManager->persist($note);
            $entityManager->flush();
        }

        return $this->render('note/index.html.twig', [
            'notes' => $noteRepository,
            'formNote' => $form->createView(),
            'matieres' => $matiere
        ]);

    }

        /**
         * @Route("/matieres", name="matieres")
         */
        public function matieres(Request $request, EntityManagerInterface $entityManager)
        {

            $matiere = new matiere();

            $matiereRepository = $this->getDoctrine()
                ->getRepository(matiere::class)
                ->findAll();


            $form = $this->createForm(MatiereType::class, $matiere);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $matiere = $form->getData();


                $entityManager->persist($matiere);
                $entityManager->flush();
            }

            return $this->render('note/matieres.html.twig', [
                'matieres' => $matiereRepository,
                'formMatiere' => $form->createView()
            ]);

        }

    /**
     * @Route("/singleMatiere/{{id}}", name="singleMatiere")
     */
    public function singleMatiere( $id, Request $request, EntityManagerInterface $entityManager){


        $matiere = $this->getDoctrine()
            ->getRepository(matiere::class)
            ->find($id);


        $form = $this->createForm(MatiereType::class, $matiere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $matiere = $form->getData();


            $entityManager->persist($matiere);
            $entityManager->flush();


        }
        return $this->render('note/singleMatiere.html.twig', [
            'matiere' => $matiere,
            'formUpdate' => $form->createView()

        ]);
    }

    /**
     * @Route("/note/remove/{id}", name="remove")
     */
    public function removeMatiere($id, EntityManagerInterface $entityManager){
        $matiere = $this->getDoctrine()->getRepository(matiere::class)->find($id);

        $entityManager->remove($matiere);
        $entityManager->flush();

        return $this->redirectToRoute('matieres');
    }



}
