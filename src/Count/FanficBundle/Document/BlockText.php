<?php

namespace Count\FanficBundle\Document;

class BlockText extends Block
{
    /**
     * @var string $content
     */
    protected $content;


    /**
     * Set content
     *
     * @param string $content
     * @return \BlockText
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
