<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resource
 *
 * @ORM\Table(name="web_resource")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\ResourceRepository")
 */
class Resource
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_create", type="datetime", nullable=false)
     */
    private $dCreate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_update", type="datetime", nullable=true)
     */
    private $dUpdate;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="d_delete", type="datetime", nullable=true)
     */
    private $dDelete;
    
    /**
     * @var \User
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="u_create", referencedColumnName="id")
     */
    private $uCreate;
    
    /**
     * @var \User
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="u_update", referencedColumnName="id")
     */
    private $uUpdate;
    
    /**
     * @var \User
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="u_delete", referencedColumnName="id")
     */
    private $uDelete;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Permission", mappedBy="resource")
     */
    private $permissions;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->permissions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Resource
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
     * Set dCreate
     *
     * @param \DateTime $dCreate
     * @return Resource
     */
    public function setDCreate($dCreate)
    {
        $this->dCreate = $dCreate;
    
        return $this;
    }

    /**
     * Get dCreate
     *
     * @return \DateTime 
     */
    public function getDCreate()
    {
        return $this->dCreate;
    }
    
    /**
     * Set dUpdate
     *
     * @param \DateTime $dUpdate
     * @return Resource
     */
    public function setDUpdate($dUpdate)
    {
        $this->dUpdate = $dUpdate;
    
        return $this;
    }

    /**
     * Get dUpdate
     *
     * @return \DateTime 
     */
    public function getDUpdate()
    {
        return $this->dUpdate;
    }
    
    /**
     * Set dDelete
     *
     * @param \DateTime $dDelete
     * @return Resource
     */
    public function setDDelete($dDelete)
    {
        $this->dDelete = $dDelete;
    
        return $this;
    }

    /**
     * Get dDelete
     *
     * @return \DateTime 
     */
    public function getDDelete()
    {
        return $this->dDelete;
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
     * Set uCreate
     *
     * @param \Application\Entity\User $uCreate
     * @return Resource
     */
    public function setUCreate(\Application\Entity\User $uCreate = null)
    {
        $this->uCreate = $uCreate;
    
        return $this;
    }

    /**
     * Get uCreate
     *
     * @return \Application\Entity\User 
     */
    public function getUCreate()
    {
        return $this->uCreate;
    }
    
    /**
     * Set uUpdate
     *
     * @param \Application\Entity\User $uUpdate
     * @return Resource
     */
    public function setUUpdate(\Application\Entity\User $uUpdate = null)
    {
        $this->uUpdate = $uUpdate;
    
        return $this;
    }

    /**
     * Get uUpdate
     *
     * @return \Application\Entity\User 
     */
    public function getUUpdate()
    {
        return $this->uUpdate;
    }
    
    /**
     * Set uDelete
     *
     * @param \Application\Entity\User $uDelete
     * @return Resource
     */
    public function setUDelete(\Application\Entity\User $uDelete = null)
    {
        $this->uDelete = $uDelete;
    
        return $this;
    }

    /**
     * Get uDelete
     *
     * @return \Application\Entity\User 
     */
    public function getUDelete()
    {
        return $this->uDelete;
    }
    
    /**
     * Add permission
     *
     * @param \Application\Entity\Permission $permission
     * @return Resource
     */
    public function addPermission(\Application\Entity\Permission $permission)
    {
        $this->permissions[] = $permission;
    
        return $this;
    }

    /**
     * Remove permission
     *
     * @param \Application\Entity\Permission $permission
     */
    public function removePermission(\Application\Entity\Permission $permission)
    {
        $this->permissions->removeElement($permission);
    }

    /**
     * Get permissions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
}
