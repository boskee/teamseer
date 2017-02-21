<?php

namespace Boskee\TeamSeer;

class DayActivityAPIArray
{

    /**
     * @var DayActivityAPI[] $DayActivityAPIArray
     */
    protected $DayActivityAPIArray = null;

    /**
     * @param DayActivityAPI[] $DayActivityAPIArray
     */
    public function __construct(array $DayActivityAPIArray)
    {
      $this->DayActivityAPIArray = $DayActivityAPIArray;
    }

    /**
     * @return DayActivityAPI[]
     */
    public function getDayActivityAPIArray()
    {
      return $this->DayActivityAPIArray;
    }

    /**
     * @param DayActivityAPI[] $DayActivityAPIArray
     * @return \Boskee\TeamSeer\DayActivityAPIArray
     */
    public function setDayActivityAPIArray(array $DayActivityAPIArray)
    {
      $this->DayActivityAPIArray = $DayActivityAPIArray;
      return $this;
    }

}
