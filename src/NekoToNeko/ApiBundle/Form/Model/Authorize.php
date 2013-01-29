<?php

namespace NekoToNeko\ApiBundle\Form\Model;

use FOS\OAuthServerBundle\Form\Model\Authorize as BaseAuthorize;

class Authorize extends BaseAuthorize
{
    protected $allowAccess;
    
    public function getAllowAccess()
    {
        return $this->allowAccess;
    }

    public function setAllowAccess($allowAccess)
    {
        $this->allowAccess = $allowAccess;
    }
}
