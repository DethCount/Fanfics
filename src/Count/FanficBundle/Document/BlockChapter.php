<?php

namespace Count\FanficBundle\Document;

use \Count\FanficBundle\Document\Block;

class BlockChapter extends Block
{
    /**
     * @var Count\FanficBundle\Document\BlockTitle
     */
    protected $title;


    /**
     * Set title
     *
     * @param Count\FanficBundle\Document\BlockTitle $title
     * @return \BlockChapter
     */
    public function setTitle(\Count\FanficBundle\Document\BlockTitle $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return Count\FanficBundle\Document\BlockTitle $title
     */
    public function getTitle()
    {
        return $this->title;
    }
}
