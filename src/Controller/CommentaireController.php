<?php

namespace App\Controller;

use App\Entity\Film;
use DateTimeImmutable;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentaireController extends Controller
{ 


    /**
     * @Route("/comment/add", name="comment_add")
     */
    public function add(Request $request)
    {
        $post_id = $request->request->get('post_id');

        $user = $this->getUser();

        $post = $this->getDoctrine()
                ->getRepository(Film::class)
                ->find($post_id);

        $comment = new Commentaire();
        $comment->setText($request->request->get('_comment'));
        $comment->setIdUser($user);
        $comment->setFilm($post);
        $comment->setCreatedAt(new \DateTimeImmutable());

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($comment);
        $entityManager->flush();

        $post_id = $post->getId();

        return $this->redirectToRoute('home_show',[
            'id' =>  $post_id
        ]);
    }
}