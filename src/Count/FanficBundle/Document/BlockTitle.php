<?php

namespace Count\FanficBundle\Document;

use \Count\FanficBundle\Document\Block;

class BlockTitle extends Block
{
    protected $type = 'title';

    /**
     * @var string $content
     */
    protected $content;

    /**
     * Set content
     *
     * @param  string      $content
     * @return \BlockTitle
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }
}
