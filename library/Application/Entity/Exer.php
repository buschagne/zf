<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exer
 *
 * @ORM\Table(name="exer")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\ExerRepository")
 */
class Exer
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="d_debut_exer", type="datetime", nullable=false)
     */
    private $dDebutExer;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * Set dDebutExer
     *
     * @param boolean $dDebutExer
     * @return Exer
     */
    public function setDDebutExer($dDebutExer)
    {
        $this->dDebutExer = $dDebutExer;
    
        return $this;
    }

    /**
     * Get dDebutExer
     *
     * @return boolean 
     */
    public function getDDebutExer()
    {
        return $this->dDebutExer;
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
    
}
