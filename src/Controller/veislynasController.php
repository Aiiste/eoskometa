<?php
/**
 * Created by PhpStorm.
 * User: Aiste
 * Date: 2018-05-19
 * Time: 13:58
 */

namespace App\Controller;

use App\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class veislynasController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
        $veislynas = $this->getDoctrine()->getRepository(Content::class)->find(2);

        return $this->render('front/veislynas.html.twig', [
            'veislynas' => $veislynas
        ]);
    }
}