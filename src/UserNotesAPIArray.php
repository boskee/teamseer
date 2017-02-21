<?php

namespace Boskee\TeamSeer;

class UserNotesAPIArray
{

    /**
     * @var UserNotesAPI[] $UserNotesAPIArray
     */
    protected $UserNotesAPIArray = null;

    /**
     * @param UserNotesAPI[] $UserNotesAPIArray
     */
    public function __construct(array $UserNotesAPIArray)
    {
      $this->UserNotesAPIArray = $UserNotesAPIArray;
    }

    /**
     * @return UserNotesAPI[]
     */
    public function getUserNotesAPIArray()
    {
      return $this->UserNotesAPIArray;
    }

    /**
     * @param UserNotesAPI[] $UserNotesAPIArray
     * @return \Boskee\TeamSeer\UserNotesAPIArray
     */
    public function setUserNotesAPIArray(array $UserNotesAPIArray)
    {
      $this->UserNotesAPIArray = $UserNotesAPIArray;
      return $this;
    }

}
