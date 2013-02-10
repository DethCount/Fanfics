<?php

namespace Count\FanficBundle\Document;

use FOS\UserBundle\Document\User as BaseUser;

class User extends BaseUser
{
    /**
     * @var MongoId $id
     */
    protected $id;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
