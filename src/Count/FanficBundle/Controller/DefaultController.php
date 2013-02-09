<?php

namespace Count\FanficBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Count\FanficBundle\Document\Collection,
    Count\FanficBundle\Document\Book,
    Count\FanficBundle\Document\Metadata;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $coll = $dm->getRepository('CountFanficBundle:Collection')
            ->findOneByName('Test collection');

        /*
        if (empty($coll)) {
            $coll = new Collection;
            $coll->setName('Test collection');

            $dm->persist($coll);

            $collMetadata = new Metadata;
            $collMetadata->setName('Author');
            $collMetadata->setValue('Count');
            $dm->persist($collMetadata);

            $coll->addMetadata($collMetadata);
        }

        $book = $dm->getRepository('CountFanficBundle:Book')
            ->findOneByName('My first book');

        if (empty($book)) {
            $book = new Book;
            $book->setName('My first book');
            $dm->persist($book);

            $bookMetadata = new Metadata;
            $bookMetadata->setName('Author');
            $bookMetadata->setValue('Count');
            $dm->persist($bookMetadata);

            $book->addMetadata($bookMetadata);
        }

        if (!$coll->getBooks()->contains($book)) {
            $coll->addBooks($book);
        } else {
            $coll->getBooks()->removeElement($book);
        }

        $dm->flush();
        */

        return $this->render(
            'CountFanficBundle:Default:index.html.twig',
            array(
                'collection' => $coll
            )
        );
    }
}
