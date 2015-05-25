<?php
namespace JbNahan\PsBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * MyUser
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $albums;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mails;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->albums = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mails = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add albums
     *
     * @param \JbNahan\PsBundle\Entity\Album $albums
     * @return User
     */
    public function addAlbum(\JbNahan\PsBundle\Entity\Album $albums)
    {
        $this->albums[] = $albums;

        return $this;
    }

    /**
     * Remove albums
     *
     * @param \JbNahan\PsBundle\Entity\Album $albums
     */
    public function removeAlbum(\JbNahan\PsBundle\Entity\Album $albums)
    {
        $this->albums->removeElement($albums);
    }

    /**
     * Get albums
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * Add mails
     *
     * @param \JbNahan\PsBundle\Entity\Mail $mails
     * @return User
     */
    public function addMail(\JbNahan\PsBundle\Entity\Mail $mails)
    {
        $this->mails[] = $mails;

        return $this;
    }

    /**
     * Remove mails
     *
     * @param \JbNahan\PsBundle\Entity\Mail $mails
     */
    public function removeMail(\JbNahan\PsBundle\Entity\Mail $mails)
    {
        $this->mails->removeElement($mails);
    }

    /**
     * Get mails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMails()
    {
        return $this->mails;
    }
}
