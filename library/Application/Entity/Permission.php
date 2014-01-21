<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 *
 * @ORM\Table(name="web_permission")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\PermissionRepository")
 */
class Permission
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_allowed", type="boolean", nullable=false)
     */
    private $isAllowed;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    
    /**
     * @var \Role
     *
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="permissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="web_role_id", referencedColumnName="id")
     * })
     */
    private $role;

    /**
     * @var \Resource
     *
     * @ORM\ManyToOne(targetEntity="Resource", inversedBy="permissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="web_resource_id", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * Set isAllowed
     *
     * @param boolean $isAllowed
     * @return Permission
     */
    public function setIsAllowed($isAllowed)
    {
        $this->isAllowed = $isAllowed;
    
        return $this;
    }

    /**
     * Get isAllowed
     *
     * @return boolean 
     */
    public function getIsAllowed()
    {
        return $this->isAllowed;
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
     * Set role
     *
     * @param \Application\Entity\Role $role
     * @return Permission
     */
    public function setRole(\Application\Entity\Role $role = null)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \Application\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set resource
     *
     * @param \Application\Entity\Resource $resource
     * @return Resource
     */
    public function setResource(\Application\Entity\Resource $resource = null)
    {
        $this->resource = $resource;
    
        return $this;
    }

    /**
     * Get resource
     *
     * @return \Application\Entity\Resource 
     */
    public function getResource()
    {
        return $this->resource;
    }
    
}
