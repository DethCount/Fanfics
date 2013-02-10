<?php

namespace Count\FanficBundle\Document;

class Block
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $type
     */
    protected $type;

    /**
     * @var string $path
     */
    protected $path;

    /**
     * @var int $level
     */
    protected $level;

    /**
     * @var date $lockTime
     */
    protected $lockTime;

    /**
     * @var Count\FanficBundle\Document\Block
     */
    protected $parent;

    /**
     * @var Count\FanficBundle\Document\Block
     */
    protected $children = array();

    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param  string $type
     * @return \Block
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set path
     *
     * @param  string $path
     * @return \Block
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string $path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set parent
     *
     * @param  Count\FanficBundle\Document\Block $parent
     * @return \Block
     */
    public function setParent(\Count\FanficBundle\Document\Block $parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return Count\FanficBundle\Document\Block $parent
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set level
     *
     * @param  int    $level
     * @return \Block
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int $level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set lockTime
     *
     * @param  date   $lockTime
     * @return \Block
     */
    public function setLockTime($lockTime)
    {
        $this->lockTime = $lockTime;

        return $this;
    }

    /**
     * Get lockTime
     *
     * @return date $lockTime
     */
    public function getLockTime()
    {
        return $this->lockTime;
    }

    /**
     * Add children
     *
     * @param Count\FanficBundle\Document\Block $children
     */
    public function addChildren(\Count\FanficBundle\Document\Block $children)
    {
        $this->children[] = $children;
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection $children
     */
    public function getChildren()
    {
        return $this->children;
    }
}
