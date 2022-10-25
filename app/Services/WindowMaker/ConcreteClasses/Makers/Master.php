<?php

namespace App\Services\WindowMaker\ConcreteClasses\Makers;

use App\Services\WindowMaker\ConcreteInterfaces\WindowFittingExpert;

class Master implements WindowFittingExpert
{
    public function getWindowFitterTitle(): string
    {
        return "Aluminum window master";
    }
}
