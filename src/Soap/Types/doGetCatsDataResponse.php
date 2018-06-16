<?php

namespace Ircykk\AllegroApi;

class doGetCatsDataResponse
{

    /**
     * @var ArrayOfCatinfotype $catsList
     */
    protected $catsList = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @var string $verStr
     */
    protected $verStr = null;

    /**
     * @param ArrayOfCatinfotype $catsList
     * @param int $verKey
     * @param string $verStr
     */
    public function __construct($catsList = null, $verKey = null, $verStr = null)
    {
      $this->catsList = $catsList;
      $this->verKey = $verKey;
      $this->verStr = $verStr;
    }

    /**
     * @return ArrayOfCatinfotype
     */
    public function getCatsList()
    {
      return $this->catsList;
    }

    /**
     * @param ArrayOfCatinfotype $catsList
     * @return \Ircykk\AllegroApi\doGetCatsDataResponse
     */
    public function setCatsList($catsList)
    {
      $this->catsList = $catsList;
      return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
      return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return \Ircykk\AllegroApi\doGetCatsDataResponse
     */
    public function setVerKey($verKey)
    {
      $this->verKey = $verKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerStr()
    {
      return $this->verStr;
    }

    /**
     * @param string $verStr
     * @return \Ircykk\AllegroApi\doGetCatsDataResponse
     */
    public function setVerStr($verStr)
    {
      $this->verStr = $verStr;
      return $this;
    }

}
