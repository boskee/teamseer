<?php

namespace Boskee\TeamSeer;

class anyURI
{

    /**
     * @var anyURI $_
     */
    protected $_ = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var anyURI $href
     */
    protected $href = null;

    /**
     * @param anyURI $_
     * @param ID $id
     * @param anyURI $href
     */
    public function __construct($_, $id, $href)
    {
      $this->_ = $_;
      $this->id = $id;
      $this->href = $href;
    }

    /**
     * @return anyURI
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param anyURI $_
     * @return \Boskee\TeamSeer\anyURI
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \Boskee\TeamSeer\anyURI
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
     * @return \Boskee\TeamSeer\anyURI
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

}
