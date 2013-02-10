<?php

namespace Count\FanficBundle\Document;

class Book
{

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $slug
     */
    protected $slug;

    /**
     * @var string $description
     */
    protected $description;


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
     * Set name
     *
     * @param string $name
     * @return \Book
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return \Book
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return \Book
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var Count\FanficBundle\Document\metadata
     */
    protected $metadata = array();

    public function __construct()
    {
        $this->metadata = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add metadata
     *
     * @param Count\FanficBundle\Document\metadata $metadata
     */
    public function addMetadata(\Count\FanficBundle\Document\metadata $metadata)
    {
        $this->metadata[] = $metadata;
    }

    /**
     * Get metadata
     *
     * @return Doctrine\Common\Collections\Collection $metadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    /**
     * @var Count\FanficBundle\Document\Block
     */
    protected $rootBlock;


    /**
     * Set rootBlock
     *
     * @param Count\FanficBundle\Document\Block $rootBlock
     * @return \Book
     */
    public function setRootBlock(\Count\FanficBundle\Document\Block $rootBlock)
    {
        $this->rootBlock = $rootBlock;
        return $this;
    }

    /**
     * Get rootBlock
     *
     * @return Count\FanficBundle\Document\Block $rootBlock
     */
    public function getRootBlock()
    {
        return $this->rootBlock;
    }
}
