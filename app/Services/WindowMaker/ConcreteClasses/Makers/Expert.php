<?php

namespace App\Services\WindowMaker\ConcreteClasses\Makers;

use App\Services\WindowMaker\ConcreteInterfaces\WindowFittingExpert;

class Expert implements WindowFittingExpert
{
    public function getWindowFitterTitle(): string
    {
        return "Plastic window expert";
    }
}
