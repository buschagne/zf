<?php

namespace Application\Entity\Proxy\__CG__\Application\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Resource extends \Application\Entity\Resource implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setDCreate($dCreate)
    {
        $this->__load();
        return parent::setDCreate($dCreate);
    }

    public function getDCreate()
    {
        $this->__load();
        return parent::getDCreate();
    }

    public function setDUpdate($dUpdate)
    {
        $this->__load();
        return parent::setDUpdate($dUpdate);
    }

    public function getDUpdate()
    {
        $this->__load();
        return parent::getDUpdate();
    }

    public function setDDelete($dDelete)
    {
        $this->__load();
        return parent::setDDelete($dDelete);
    }

    public function getDDelete()
    {
        $this->__load();
        return parent::getDDelete();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setUCreate(\Application\Entity\User $uCreate = NULL)
    {
        $this->__load();
        return parent::setUCreate($uCreate);
    }

    public function getUCreate()
    {
        $this->__load();
        return parent::getUCreate();
    }

    public function setUUpdate(\Application\Entity\User $uUpdate = NULL)
    {
        $this->__load();
        return parent::setUUpdate($uUpdate);
    }

    public function getUUpdate()
    {
        $this->__load();
        return parent::getUUpdate();
    }

    public function setUDelete(\Application\Entity\User $uDelete = NULL)
    {
        $this->__load();
        return parent::setUDelete($uDelete);
    }

    public function getUDelete()
    {
        $this->__load();
        return parent::getUDelete();
    }

    public function addPermission(\Application\Entity\Permission $permission)
    {
        $this->__load();
        return parent::addPermission($permission);
    }

    public function removePermission(\Application\Entity\Permission $permission)
    {
        $this->__load();
        return parent::removePermission($permission);
    }

    public function getPermissions()
    {
        $this->__load();
        return parent::getPermissions();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'dCreate', 'dUpdate', 'dDelete', 'id', 'uCreate', 'uUpdate', 'uDelete', 'permissions');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}