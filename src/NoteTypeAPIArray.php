<?php

namespace Boskee\TeamSeer;

class NoteTypeAPIArray
{

    /**
     * @var NoteTypeAPI[] $NoteTypeAPIArray
     */
    protected $NoteTypeAPIArray = null;

    /**
     * @param NoteTypeAPI[] $NoteTypeAPIArray
     */
    public function __construct(array $NoteTypeAPIArray)
    {
      $this->NoteTypeAPIArray = $NoteTypeAPIArray;
    }

    /**
     * @return NoteTypeAPI[]
     */
    public function getNoteTypeAPIArray()
    {
      return $this->NoteTypeAPIArray;
    }

    /**
     * @param NoteTypeAPI[] $NoteTypeAPIArray
     * @return \Boskee\TeamSeer\NoteTypeAPIArray
     */
    public function setNoteTypeAPIArray(array $NoteTypeAPIArray)
    {
      $this->NoteTypeAPIArray = $NoteTypeAPIArray;
      return $this;
    }

}
