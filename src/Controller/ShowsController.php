<?php

namespace App\Controller;

use App\Entity\Show;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowsController extends Controller
{
    /**
     * @Route("/parodos.html", name="shows")
     */
    public function index(Request $request): Response
    {
        $qb = $this
            ->getDoctrine()
            ->getRepository(Show::class)
            ->createQueryBuilder('s');
        $qb->orderBy('s.createdAt', 'DESC');

        $pager = new Pagerfanta(new DoctrineORMAdapter($qb));
        $pager->setCurrentPage($request->query->getInt('page', 1));

        return $this->render('shows/index.html.twig', [
            'shows' => $pager,
        ]);
    }
}
