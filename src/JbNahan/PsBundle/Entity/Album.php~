<?php

namespace JbNahan\PsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 */
class Album
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var \DateTime
     */
    private $deletedAt;


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
     * Set name
     *
     * @param string $name
     * @return Album
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Album
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Album
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Album
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime 
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $shares;

    /**
     * @var \JbNahan\PsBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shares = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add photos
     *
     * @param \JbNahan\PsBundle\Entity\Photos $photos
     * @return Album
     */
    public function addPhoto(\JbNahan\PsBundle\Entity\Photos $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \JbNahan\PsBundle\Entity\Photos $photos
     */
    public function removePhoto(\JbNahan\PsBundle\Entity\Photos $photos)
    {
        $this->photos->removeElement($photos);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Add shares
     *
     * @param \JbNahan\PsBundle\Entity\Share $shares
     * @return Album
     */
    public function addShare(\JbNahan\PsBundle\Entity\Share $shares)
    {
        $this->shares[] = $shares;

        return $this;
    }

    /**
     * Remove shares
     *
     * @param \JbNahan\PsBundle\Entity\Share $shares
     */
    public function removeShare(\JbNahan\PsBundle\Entity\Share $shares)
    {
        $this->shares->removeElement($shares);
    }

    /**
     * Get shares
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getShares()
    {
        return $this->shares;
    }

    /**
     * Set user
     *
     * @param \JbNahan\PsBundle\Entity\User $user
     * @return Album
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
