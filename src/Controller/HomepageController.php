<?php
/**
 * Created by PhpStorm.
 * User: Aiste
 * Date: 2018-05-19
 * Time: 13:58
 */

namespace App\Controller;

use App\Entity\Content;
use App\Entity\Dog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
        $news = $this->getDoctrine()->getRepository(Content::class)->find(1);

        return $this->render('front/homepage.html.twig', [
            'news' => $news
        ]);
    }

    public function navigationAction(): Response
    {
        return $this->render('includes/navigation.html.twig', [
            'dogs' => $this->getDoctrine()->getRepository(Dog::class)->findAll(),
        ]);
    }

    public function dogAction(string $slug): Response
    {
        $dog = $this->getDoctrine()->getRepository(Dog::class)->findOneBy(['slug' => $slug]);

        if ($dog === null) {
            throw $this->createNotFoundException();
        }

        return $this->render('front/suo.html.twig', ['dog' => $dog]);
    }
}
