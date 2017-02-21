<?php

namespace Boskee\TeamSeer;

class DayActivityAPI
{

    /**
     * @var string $categoryArr
     */
    protected $categoryArr = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var boolean $hasNotes
     */
    protected $hasNotes = null;

    /**
     * @var boolean $needsApproval
     */
    protected $needsApproval = null;

    /**
     * @var string $statusStr
     */
    protected $statusStr = null;

    /**
     * @var string $typeStr
     */
    protected $typeStr = null;

    /**
     * @var string $userIdentifier
     */
    protected $userIdentifier = null;

    /**
     * @var NoteAPIArray $notes
     */
    protected $notes = null;

    /**
     * @param string $categoryArr
     * @param string $date
     * @param boolean $hasNotes
     * @param boolean $needsApproval
     * @param string $statusStr
     * @param string $typeStr
     * @param string $userIdentifier
     * @param NoteAPIArray $notes
     */
    public function __construct($categoryArr, $date, $hasNotes, $needsApproval, $statusStr, $typeStr, $userIdentifier, $notes)
    {
      $this->categoryArr = $categoryArr;
      $this->date = $date;
      $this->hasNotes = $hasNotes;
      $this->needsApproval = $needsApproval;
      $this->statusStr = $statusStr;
      $this->typeStr = $typeStr;
      $this->userIdentifier = $userIdentifier;
      $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getCategoryArr()
    {
      return $this->categoryArr;
    }

    /**
     * @param string $categoryArr
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setCategoryArr($categoryArr)
    {
      $this->categoryArr = $categoryArr;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasNotes()
    {
      return $this->hasNotes;
    }

    /**
     * @param boolean $hasNotes
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setHasNotes($hasNotes)
    {
      $this->hasNotes = $hasNotes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNeedsApproval()
    {
      return $this->needsApproval;
    }

    /**
     * @param boolean $needsApproval
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setNeedsApproval($needsApproval)
    {
      $this->needsApproval = $needsApproval;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusStr()
    {
      return $this->statusStr;
    }

    /**
     * @param string $statusStr
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setStatusStr($statusStr)
    {
      $this->statusStr = $statusStr;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeStr()
    {
      return $this->typeStr;
    }

    /**
     * @param string $typeStr
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setTypeStr($typeStr)
    {
      $this->typeStr = $typeStr;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserIdentifier()
    {
      return $this->userIdentifier;
    }

    /**
     * @param string $userIdentifier
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setUserIdentifier($userIdentifier)
    {
      $this->userIdentifier = $userIdentifier;
      return $this;
    }

    /**
     * @return NoteAPIArray
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param NoteAPIArray $notes
     * @return \Boskee\TeamSeer\DayActivityAPI
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

}
