<?php

namespace Boskee\TeamSeer;

class LeaveCategoryAPIArray
{

    /**
     * @var LeaveCategoryAPI[] $LeaveCategoryAPIArray
     */
    protected $LeaveCategoryAPIArray = null;

    /**
     * @param LeaveCategoryAPI[] $LeaveCategoryAPIArray
     */
    public function __construct(array $LeaveCategoryAPIArray)
    {
      $this->LeaveCategoryAPIArray = $LeaveCategoryAPIArray;
    }

    /**
     * @return LeaveCategoryAPI[]
     */
    public function getLeaveCategoryAPIArray()
    {
      return $this->LeaveCategoryAPIArray;
    }

    /**
     * @param LeaveCategoryAPI[] $LeaveCategoryAPIArray
     * @return \Boskee\TeamSeer\LeaveCategoryAPIArray
     */
    public function setLeaveCategoryAPIArray(array $LeaveCategoryAPIArray)
    {
      $this->LeaveCategoryAPIArray = $LeaveCategoryAPIArray;
      return $this;
    }

}
