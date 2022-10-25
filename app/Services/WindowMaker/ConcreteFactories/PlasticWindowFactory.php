<?php

namespace App\Services\WindowMaker\ConcreteFactories;

use App\Services\WindowMaker\AbstractInterface\WindowFactory;
use App\Services\WindowMaker\ConcreteClasses\Makers\Expert;
use App\Services\WindowMaker\ConcreteClasses\Windows\PlasticWindow;
use App\Services\WindowMaker\ConcreteInterfaces\Window;
use App\Services\WindowMaker\ConcreteInterfaces\WindowFittingExpert;

class PlasticWindowFactory implements WindowFactory
{

    public function makeWindow(): Window
    {
        return new PlasticWindow();
    }

    public function makeWindowFittingExpert(): WindowFittingExpert
    {
        return new Expert();
    }

}
