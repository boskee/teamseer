<?php

namespace Boskee\TeamSeer;

class NoteAPIArray
{

    /**
     * @var NoteAPI[] $NoteAPIArray
     */
    protected $NoteAPIArray = null;

    /**
     * @param NoteAPI[] $NoteAPIArray
     */
    public function __construct(array $NoteAPIArray)
    {
      $this->NoteAPIArray = $NoteAPIArray;
    }

    /**
     * @return NoteAPI[]
     */
    public function getNoteAPIArray()
    {
      return $this->NoteAPIArray;
    }

    /**
     * @param NoteAPI[] $NoteAPIArray
     * @return \Boskee\TeamSeer\NoteAPIArray
     */
    public function setNoteAPIArray(array $NoteAPIArray)
    {
      $this->NoteAPIArray = $NoteAPIArray;
      return $this;
    }

}
