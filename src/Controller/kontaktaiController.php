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

class kontaktaiController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
        $kontaktai = $this->getDoctrine()->getRepository(Content::class)->find(4);

        return $this->render('front/kontaktai.html.twig', [
            'kontaktai' => $kontaktai
        ]);
    }
}