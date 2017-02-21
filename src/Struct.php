<?php

namespace Boskee\TeamSeer;

class Struct
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var anyURI $href
     */
    protected $href = null;

    /**
     * @param string $any
     * @param ID $id
     * @param anyURI $href
     */
    public function __construct($any, $id, $href)
    {
      $this->any = $any;
      $this->id = $id;
      $this->href = $href;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \Boskee\TeamSeer\Struct
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \Boskee\TeamSeer\Struct
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getHref()
    {
      return $this->href;
    }

    /**
     * @param anyURI $href
     * @return \Boskee\TeamSeer\Struct
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

}
