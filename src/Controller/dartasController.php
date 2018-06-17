<?php
/**
 * Created by PhpStorm.
 * User: Aiste
 * Date: 2018-06-17
 * Time: 17:29
 */

namespace App\Controller;


use App\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class dartasController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
        $news = $this->getDoctrine()->getRepository(Content::class)->find(1);

        return $this->render('front/dartas.html.twig', [
            'news' => $news
        ]);
    }
}