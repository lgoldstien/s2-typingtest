<?php

namespace OML\TypingTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestResults
 */
class TestResults
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var \DateTime
     */
    private $dateCreated;


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
     * Set answer
     *
     * @param string $answer
     * @return TestResults
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    
        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return TestResults
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}
