<?php

namespace JbNahan\PsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share
 */
class Share
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var array
     */
    private $dest;

    /**
     * @var \DateTime
     */
    private $autoDeleteAt;

    /**
     * @var integer
     */
    private $viewTime;

    /**
     * @var integer
     */
    private $viewMaxCount;

    /**
     * @var integer
     */
    private $valitityTime;


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
     * Set dest
     *
     * @param array $dest
     * @return Share
     */
    public function setDest($dest)
    {
        $this->dest = $dest;

        return $this;
    }

    /**
     * Get dest
     *
     * @return array 
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     * Set autoDeleteAt
     *
     * @param \DateTime $autoDeleteAt
     * @return Share
     */
    public function setAutoDeleteAt($autoDeleteAt)
    {
        $this->autoDeleteAt = $autoDeleteAt;

        return $this;
    }

    /**
     * Get autoDeleteAt
     *
     * @return \DateTime 
     */
    public function getAutoDeleteAt()
    {
        return $this->autoDeleteAt;
    }

    /**
     * Set viewTime
     *
     * @param integer $viewTime
     * @return Share
     */
    public function setViewTime($viewTime)
    {
        $this->viewTime = $viewTime;

        return $this;
    }

    /**
     * Get viewTime
     *
     * @return integer 
     */
    public function getViewTime()
    {
        return $this->viewTime;
    }

    /**
     * Set viewMaxCount
     *
     * @param integer $viewMaxCount
     * @return Share
     */
    public function setViewMaxCount($viewMaxCount)
    {
        $this->viewMaxCount = $viewMaxCount;

        return $this;
    }

    /**
     * Get viewMaxCount
     *
     * @return integer 
     */
    public function getViewMaxCount()
    {
        return $this->viewMaxCount;
    }

    /**
     * Set valitityTime
     *
     * @param integer $valitityTime
     * @return Share
     */
    public function setValitityTime($valitityTime)
    {
        $this->valitityTime = $valitityTime;

        return $this;
    }

    /**
     * Get valitityTime
     *
     * @return integer 
     */
    public function getValitityTime()
    {
        return $this->valitityTime;
    }
    /**
     * @var string
     */
    private $key;

    /**
     * @var integer
     */
    private $viewCount;

    /**
     * @var \JbNahan\PsBundle\Entity\Album
     */
    private $album;


    /**
     * Set key
     *
     * @param string $key
     * @return Share
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set viewCount
     *
     * @param integer $viewCount
     * @return Share
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * Get viewCount
     *
     * @return integer 
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * Set album
     *
     * @param \JbNahan\PsBundle\Entity\Album $album
     * @return Share
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
    /**
     * @var \DateTime
     */
    private $deletedAt;


    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     * @return Share
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
}
