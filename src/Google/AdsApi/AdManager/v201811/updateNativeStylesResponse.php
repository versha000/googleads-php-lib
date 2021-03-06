<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateNativeStylesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201811\NativeStyle[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201811\NativeStyle[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201811\NativeStyle[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201811\NativeStyle[] $rval
     * @return \Google\AdsApi\AdManager\v201811\updateNativeStylesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
