<?php

namespace Ircykk\AllegroApi;

class FilterRelationType
{

    /**
     * @var ArrayOfString $relationAnd
     */
    protected $relationAnd = null;

    /**
     * @var ArrayOfString $relationOr
     */
    protected $relationOr = null;

    /**
     * @var ArrayOfString $relationExclude
     */
    protected $relationExclude = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getRelationAnd()
    {
      return $this->relationAnd;
    }

    /**
     * @param ArrayOfString $relationAnd
     * @return \Ircykk\AllegroApi\FilterRelationType
     */
    public function setRelationAnd($relationAnd)
    {
      $this->relationAnd = $relationAnd;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getRelationOr()
    {
      return $this->relationOr;
    }

    /**
     * @param ArrayOfString $relationOr
     * @return \Ircykk\AllegroApi\FilterRelationType
     */
    public function setRelationOr($relationOr)
    {
      $this->relationOr = $relationOr;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getRelationExclude()
    {
      return $this->relationExclude;
    }

    /**
     * @param ArrayOfString $relationExclude
     * @return \Ircykk\AllegroApi\FilterRelationType
     */
    public function setRelationExclude($relationExclude)
    {
      $this->relationExclude = $relationExclude;
      return $this;
    }

}
