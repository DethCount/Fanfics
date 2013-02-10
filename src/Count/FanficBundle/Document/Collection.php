<?php

namespace Count\FanficBundle\Document;

class Collection
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
     * @param  string      $name
     * @return \Collection
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
     * @var Count\FanficBundle\Document\Book
     */
    protected $books = array();

    public function __construct()
    {
        $this->books = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add books
     *
     * @param Count\FanficBundle\Document\Book $books
     */
    public function addBooks(\Count\FanficBundle\Document\Book $books)
    {
        $this->books[] = $books;
    }

    /**
     * Get books
     *
     * @return Doctrine\Common\Collections\Collection $books
     */
    public function getBooks()
    {
        return $this->books;
    }
    /**
     * @var Count\FanficBundle\Document\metadata
     */
    protected $metadata = array();


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
     * @var string $slug
     */
    protected $slug;


    /**
     * Set slug
     *
     * @param string $slug
     * @return \Collection
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
}
