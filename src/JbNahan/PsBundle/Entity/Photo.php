<?php

namespace JbNahan\PsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
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
    private $uploadedAt;

    /**
     * @var \DateTime
     */
    private $deletedAt;

    /**
     * @var integer
     */
    private $viewcount;


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
     * @return Photo
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
     * Set uploadedAt
     *
     * @param \DateTime $uploadedAt
     * @return Photo
     */
    public function setUploadedAt($uploadedAt)
    {
        $this->uploadedAt = $uploadedAt;

        return $this;
    }

    /**
     * Get uploadedAt
     *
     * @return \DateTime 
     */
    public function getUploadedAt()
    {
        return $this->uploadedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Photo
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
     * Set viewcount
     *
     * @param integer $viewcount
     * @return Photo
     */
    public function setViewcount($viewcount)
    {
        $this->viewcount = $viewcount;

        return $this;
    }

    /**
     * Get viewcount
     *
     * @return integer 
     */
    public function getViewcount()
    {
        return $this->viewcount;
    }
    /**
     * @var \JbNahan\PsBundle\Entity\Album
     */
    private $album;


    /**
     * Set album
     *
     * @param \JbNahan\PsBundle\Entity\Album $album
     * @return Photo
     */
    public function setAlbum(\JbNahan\PsBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \JbNahan\PsBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
