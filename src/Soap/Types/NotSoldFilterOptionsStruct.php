<?php

namespace Ircykk\AllegroApi;

class NotSoldFilterOptionsStruct
{

    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    /**
     * @var int $filterFromEnd
     */
    protected $filterFromEnd = null;

    /**
     * @var int $filterAutoListing
     */
    protected $filterAutoListing = null;

    /**
     * @var FilterPriceStruct $filterPrice
     */
    protected $filterPrice = null;

    /**
     * @var int $filterDurationType
     */
    protected $filterDurationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getFilterFormat()
    {
      return $this->filterFormat;
    }

    /**
     * @param int $filterFormat
     * @return \Ircykk\AllegroApi\NotSoldFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
      $this->filterFormat = $filterFormat;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterFromEnd()
    {
      return $this->filterFromEnd;
    }

    /**
     * @param int $filterFromEnd
     * @return \Ircykk\AllegroApi\NotSoldFilterOptionsStruct
     */
    public function setFilterFromEnd($filterFromEnd)
    {
      $this->filterFromEnd = $filterFromEnd;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterAutoListing()
    {
      return $this->filterAutoListing;
    }

    /**
     * @param int $filterAutoListing
     * @return \Ircykk\AllegroApi\NotSoldFilterOptionsStruct
     */
    public function setFilterAutoListing($filterAutoListing)
    {
      $this->filterAutoListing = $filterAutoListing;
      return $this;
    }

    /**
     * @return FilterPriceStruct
     */
    public function getFilterPrice()
    {
      return $this->filterPrice;
    }

    /**
     * @param FilterPriceStruct $filterPrice
     * @return \Ircykk\AllegroApi\NotSoldFilterOptionsStruct
     */
    public function setFilterPrice($filterPrice)
    {
      $this->filterPrice = $filterPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterDurationType()
    {
      return $this->filterDurationType;
    }

    /**
     * @param int $filterDurationType
     * @return \Ircykk\AllegroApi\NotSoldFilterOptionsStruct
     */
    public function setFilterDurationType($filterDurationType)
    {
      $this->filterDurationType = $filterDurationType;
      return $this;
    }

}
