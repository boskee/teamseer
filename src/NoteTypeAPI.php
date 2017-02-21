<?php

namespace Boskee\TeamSeer;

class NoteTypeAPI
{

    /**
     * @var int $noteId
     */
    protected $noteId = null;

    /**
     * @var string $noteName
     */
    protected $noteName = null;

    /**
     * @var string $readRights
     */
    protected $readRights = null;

    /**
     * @param int $noteId
     * @param string $noteName
     * @param string $readRights
     */
    public function __construct($noteId, $noteName, $readRights)
    {
      $this->noteId = $noteId;
      $this->noteName = $noteName;
      $this->readRights = $readRights;
    }

    /**
     * @return int
     */
    public function getNoteId()
    {
      return $this->noteId;
    }

    /**
     * @param int $noteId
     * @return \Boskee\TeamSeer\NoteTypeAPI
     */
    public function setNoteId($noteId)
    {
      $this->noteId = $noteId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoteName()
    {
      return $this->noteName;
    }

    /**
     * @param string $noteName
     * @return \Boskee\TeamSeer\NoteTypeAPI
     */
    public function setNoteName($noteName)
    {
      $this->noteName = $noteName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReadRights()
    {
      return $this->readRights;
    }

    /**
     * @param string $readRights
     * @return \Boskee\TeamSeer\NoteTypeAPI
     */
    public function setReadRights($readRights)
    {
      $this->readRights = $readRights;
      return $this;
    }

}
