<?php

namespace Boskee\TeamSeer;

class NoteAPI
{

    /**
     * @var int $noteIx
     */
    protected $noteIx = null;

    /**
     * @var int $periodIx
     */
    protected $periodIx = null;

    /**
     * @var string $noteText
     */
    protected $noteText = null;

    /**
     * @param int $noteIx
     * @param int $periodIx
     * @param string $noteText
     */
    public function __construct($noteIx, $periodIx, $noteText)
    {
      $this->noteIx = $noteIx;
      $this->periodIx = $periodIx;
      $this->noteText = $noteText;
    }

    /**
     * @return int
     */
    public function getNoteIx()
    {
      return $this->noteIx;
    }

    /**
     * @param int $noteIx
     * @return \Boskee\TeamSeer\NoteAPI
     */
    public function setNoteIx($noteIx)
    {
      $this->noteIx = $noteIx;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodIx()
    {
      return $this->periodIx;
    }

    /**
     * @param int $periodIx
     * @return \Boskee\TeamSeer\NoteAPI
     */
    public function setPeriodIx($periodIx)
    {
      $this->periodIx = $periodIx;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoteText()
    {
      return $this->noteText;
    }

    /**
     * @param string $noteText
     * @return \Boskee\TeamSeer\NoteAPI
     */
    public function setNoteText($noteText)
    {
      $this->noteText = $noteText;
      return $this;
    }

}
