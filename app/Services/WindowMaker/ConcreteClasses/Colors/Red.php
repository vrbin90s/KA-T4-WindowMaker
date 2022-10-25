<?php

namespace App\Services\WindowMaker\ConcreteClasses\Colors;

use App\Services\WindowMaker\ConcreteInterfaces\WindowColor;

class Red implements WindowColor
{

    public function getColor(): string
    {
        return "red";
    }
}
