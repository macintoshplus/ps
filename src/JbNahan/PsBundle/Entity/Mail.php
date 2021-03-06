<?php

namespace JbNahan\PsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 */
class Mail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $sendAt;

    /**
     * @var \DateTime
     */
    private $openAt;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Mail
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Mail
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Mail
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set sendAt
     *
     * @param \DateTime $sendAt
     * @return Mail
     */
    public function setSendAt($sendAt)
    {
        $this->sendAt = $sendAt;

        return $this;
    }

    /**
     * Get sendAt
     *
     * @return \DateTime 
     */
    public function getSendAt()
    {
        return $this->sendAt;
    }

    /**
     * Set openAt
     *
     * @param \DateTime $openAt
     * @return Mail
     */
    public function setOpenAt($openAt)
    {
        $this->openAt = $openAt;

        return $this;
    }

    /**
     * Get openAt
     *
     * @return \DateTime 
     */
    public function getOpenAt()
    {
        return $this->openAt;
    }
    /**
     * @var \JbNahan\PsBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \JbNahan\PsBundle\Entity\User $user
     * @return Mail
     */
    public function setUser(\JbNahan\PsBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \JbNahan\PsBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
