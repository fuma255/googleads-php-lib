<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updatePackagesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\Package[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\Package[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\Package[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\Package[]|null $rval
     * @return \Google\AdsApi\AdManager\v201902\updatePackagesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
