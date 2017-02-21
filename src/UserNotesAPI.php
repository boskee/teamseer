<?php

namespace Boskee\TeamSeer;

class UserNotesAPI
{

    /**
     * @var string $userIdentifier
     */
    protected $userIdentifier = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var NoteAPIArray $notes
     */
    protected $notes = null;

    /**
     * @param string $userIdentifier
     * @param string $date
     * @param NoteAPIArray $notes
     */
    public function __construct($userIdentifier, $date, $notes)
    {
      $this->userIdentifier = $userIdentifier;
      $this->date = $date;
      $this->notes = $notes;
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
     * @return \Boskee\TeamSeer\UserNotesAPI
     */
    public function setUserIdentifier($userIdentifier)
    {
      $this->userIdentifier = $userIdentifier;
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
     * @return \Boskee\TeamSeer\UserNotesAPI
     */
    public function setDate($date)
    {
      $this->date = $date;
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
     * @return \Boskee\TeamSeer\UserNotesAPI
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

}
