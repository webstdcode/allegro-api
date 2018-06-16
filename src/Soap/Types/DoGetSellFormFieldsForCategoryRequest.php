<?php

namespace Ircykk\AllegroApi;

class DoGetSellFormFieldsForCategoryRequest
{

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @param string $webapiKey
     * @param int $countryId
     * @param int $categoryId
     */
    public function __construct($webapiKey = null, $countryId = null, $categoryId = null)
    {
      $this->webapiKey = $webapiKey;
      $this->countryId = $countryId;
      $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Ircykk\AllegroApi\DoGetSellFormFieldsForCategoryRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Ircykk\AllegroApi\DoGetSellFormFieldsForCategoryRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \Ircykk\AllegroApi\DoGetSellFormFieldsForCategoryRequest
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

}
