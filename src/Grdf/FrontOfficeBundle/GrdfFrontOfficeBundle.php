<?php

namespace Grdf\FrontOfficeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GrdfFrontOfficeBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}