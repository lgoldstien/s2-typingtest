<?php

namespace OML\TypingTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 */
class Test
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $audio;


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
     * Set title
     *
     * @param string $title
     * @return Test
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Test
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set audio
     *
     * @param string $audio
     * @return Test
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;
    
        return $this;
    }

    /**
     * Get audio
     *
     * @return string 
     */
    public function getAudio()
    {
        return $this->audio;
    }
}
