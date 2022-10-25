<?php

namespace App\Services\WindowMaker\ConcreteClasses\Colors;

use App\Services\WindowMaker\ConcreteInterfaces\WindowColor;

class Blue implements WindowColor
{

    public function getColor(): string
    {
        return "blue";
    }
}
