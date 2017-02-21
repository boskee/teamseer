<?php

namespace Boskee\TeamSeer;

class LeaveTypesAPIArray
{

    /**
     * @var LeaveTypeAPI[] $LeaveTypesAPIArray
     */
    protected $LeaveTypesAPIArray = null;

    /**
     * @param LeaveTypeAPI[] $LeaveTypesAPIArray
     */
    public function __construct(array $LeaveTypesAPIArray)
    {
      $this->LeaveTypesAPIArray = $LeaveTypesAPIArray;
    }

    /**
     * @return LeaveTypeAPI[]
     */
    public function getLeaveTypesAPIArray()
    {
      return $this->LeaveTypesAPIArray;
    }

    /**
     * @param LeaveTypeAPI[] $LeaveTypesAPIArray
     * @return \Boskee\TeamSeer\LeaveTypesAPIArray
     */
    public function setLeaveTypesAPIArray(array $LeaveTypesAPIArray)
    {
      $this->LeaveTypesAPIArray = $LeaveTypesAPIArray;
      return $this;
    }

}
