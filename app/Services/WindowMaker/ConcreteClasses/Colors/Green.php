<?php

namespace App\Services\WindowMaker\ConcreteClasses\Colors;

use App\Services\WindowMaker\ConcreteInterfaces\WindowColor;

class Green implements WindowColor
{

    public function getColor(): string
    {
        return "green";
    }
}
