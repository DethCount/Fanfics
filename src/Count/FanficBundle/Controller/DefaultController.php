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

class DefaultController extends Controller
{
    public function indexAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $book = $dm->getRepository('CountFanficBundle:Book')
            ->findOneBySlug('my-first-book');

        if (empty($book)) {
            $book = new Book;
            $book->setName('My first book');
            $dm->persist($book);

            $bookMetadata = new Metadata;
            $bookMetadata->setName('Author');
            $bookMetadata->setValue('Count');
            $dm->persist($bookMetadata);

            $book->addMetadata($bookMetadata);

            $bookRoot = new BlockRoot;
            $dm->persist($bookRoot);
            $book->setRootBlock($bookRoot);

            $bookChapter1 = new BlockChapter;
            $bookChapter1->setParent($bookRoot);
            $dm->persist($bookChapter1);

            $chapterTitle1 = new BlockTitle;
            $chapterTitle1->setContent('Premier chapitre');
            $chapterTitle1->setParent($bookChapter1);
            $dm->persist($chapterTitle1);

            $bookChapter1->setTitle($chapterTitle1);

            $chapterText1 = new BlockText;
            $chapterText1->setContent('Contenu du premier chapitre');
            $chapterText1->setParent($bookChapter1);
            $dm->persist($chapterText1);

            $bookChapter1->addChildren($chapterText1);

            $bookRoot->addChildren($bookChapter1);

            $bookChapter2 = new BlockChapter;
            $bookChapter2->setParent($bookRoot);
            $dm->persist($bookChapter2);

            $chapterTitle2 = new BlockTitle;
            $chapterTitle2->setContent('Second chapitre');
            $chapterTitle2->setParent($bookChapter2);
            $dm->persist($chapterTitle2);

            $bookChapter2->setTitle($chapterTitle2);

            $chapterText2 = new BlockText;
            $chapterText2->setContent('Contenu du second chapitre');
            $chapterText2->setParent($bookChapter2);
            $dm->persist($chapterText2);

            $bookChapter2->addChildren($chapterText2);

            $bookRoot->addChildren($bookChapter2);
        }

        $dm->flush();

        return $this->render(
            'CountFanficBundle:Default:index.html.twig',
            array(
                'book' => $book
            )
        );
    }
}
