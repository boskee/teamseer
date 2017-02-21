<?php

namespace Boskee\TeamSeer;

class LeaveCategoryAPI
{

    /**
     * @var string $categoryId
     */
    protected $categoryId = null;

    /**
     * @var string $categoryName
     */
    protected $categoryName = null;

    /**
     * @var string $categoryShortName
     */
    protected $categoryShortName = null;

    /**
     * @param string $categoryId
     * @param string $categoryName
     * @param string $categoryShortName
     */
    public function __construct($categoryId, $categoryName, $categoryShortName)
    {
      $this->categoryId = $categoryId;
      $this->categoryName = $categoryName;
      $this->categoryShortName = $categoryShortName;
    }

    /**
     * @return string
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param string $categoryId
     * @return \Boskee\TeamSeer\LeaveCategoryAPI
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return \Boskee\TeamSeer\LeaveCategoryAPI
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryShortName()
    {
      return $this->categoryShortName;
    }

    /**
     * @param string $categoryShortName
     * @return \Boskee\TeamSeer\LeaveCategoryAPI
     */
    public function setCategoryShortName($categoryShortName)
    {
      $this->categoryShortName = $categoryShortName;
      return $this;
    }

}
