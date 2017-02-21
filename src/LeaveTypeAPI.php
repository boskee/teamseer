<?php

namespace Boskee\TeamSeer;

class LeaveTypeAPI
{

    /**
     * @var string $typeId
     */
    protected $typeId = null;

    /**
     * @var string $typeName
     */
    protected $typeName = null;

    /**
     * @var string $typeShortName
     */
    protected $typeShortName = null;

    /**
     * @var LeaveCategoryAPIArray $categories
     */
    protected $categories = null;

    /**
     * @param string $typeId
     * @param string $typeName
     * @param string $typeShortName
     * @param LeaveCategoryAPIArray $categories
     */
    public function __construct($typeId, $typeName, $typeShortName, $categories)
    {
      $this->typeId = $typeId;
      $this->typeName = $typeName;
      $this->typeShortName = $typeShortName;
      $this->categories = $categories;
    }

    /**
     * @return string
     */
    public function getTypeId()
    {
      return $this->typeId;
    }

    /**
     * @param string $typeId
     * @return \Boskee\TeamSeer\LeaveTypeAPI
     */
    public function setTypeId($typeId)
    {
      $this->typeId = $typeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
      return $this->typeName;
    }

    /**
     * @param string $typeName
     * @return \Boskee\TeamSeer\LeaveTypeAPI
     */
    public function setTypeName($typeName)
    {
      $this->typeName = $typeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeShortName()
    {
      return $this->typeShortName;
    }

    /**
     * @param string $typeShortName
     * @return \Boskee\TeamSeer\LeaveTypeAPI
     */
    public function setTypeShortName($typeShortName)
    {
      $this->typeShortName = $typeShortName;
      return $this;
    }

    /**
     * @return LeaveCategoryAPIArray
     */
    public function getCategories()
    {
      return $this->categories;
    }

    /**
     * @param LeaveCategoryAPIArray $categories
     * @return \Boskee\TeamSeer\LeaveTypeAPI
     */
    public function setCategories($categories)
    {
      $this->categories = $categories;
      return $this;
    }

}
