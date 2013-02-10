<?php

namespace Count\FanficBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Count\FanficBundle\Document\Collection,
    Count\FanficBundle\Document\Book,
    Count\FanficBundle\Document\Metadata,
    Count\FanficBundle\Document\BlockRoot,
    Count\FanficBundle\Document\BlockChapter,
    Count\FanficBundle\Document\BlockTitle,
    Count\FanficBundle\Document\BlockText;

class BookController extends Controller
{
    public function indexAction($bookSlug)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $book = $dm->getRepository('CountFanficBundle:Book')
            ->findOneBySlug($bookSlug);

        if (empty($book)) {
            throw $this->createNotFoundException(
                'The book you are searching for doesn\'t exists (anymore ?).'
            );
        }

        return $this->render(
            'CountFanficBundle:Book:index.html.twig',
            array(
                'book' => $book
            )
        );
    }
}
