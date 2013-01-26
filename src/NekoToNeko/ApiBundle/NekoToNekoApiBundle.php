<?php

namespace NekoToNeko\ApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NekoToNekoApiBundle extends Bundle
{
    public function getParent()  
    {  
        return 'FOSOAuthServerBundle';  
    }  
}
