<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="web_user")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\UserRepository")
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=false)
     */
    private $login;
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phone_1", type="string", length=45, nullable=true)
     */
    private $phone1;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phone_2", type="string", length=45, nullable=true)
     */
    private $phone2;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="picture_file_name", type="string", length=45, nullable=true)
     */
    private $pictureFileName;
        
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="web_user_role",
     *      joinColumns={@ORM\JoinColumn(name="web_user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="web_role_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $roles;
    
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set login
     *
     * @param string $login
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * Set phone1
     *
     * @param string $phone1
     * @return User
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;
    
        return $this;
    }

    /**
     * Get phone1
     *
     * @return string 
     */
    public function getPhone1()
    {
        return $this->phone1;
    }
    
    /**
     * Set phone2
     *
     * @param string $phone2
     * @return User
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    
        return $this;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }
    
    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set pictureFileName
     *
     * @param string $pictureFileName
     * @return User
     */
    public function setPictureFileName($pictureFileName)
    {
        $this->pictureFileName = $pictureFileName;
    
        return $this;
    }

    /**
     * Get pictureFileName
     *
     * @return string 
     */
    public function getPictureFileName()
    {
        return $this->pictureFileName;
    }
        
    /**
     * Set dCreate
     *
     * @param \DateTime $dCreate
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * Add role
     *
     * @param \Application\Entity\Role $role
     * @return User
     */
    public function addRole(\Application\Entity\Role $role)
    {
        $this->roles[] = $role;
    
        return $this;
    }

    /**
     * Remove role
     *
     * @param \Application\Entity\Role $role
     */
    public function removeRole(\Application\Entity\Role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
