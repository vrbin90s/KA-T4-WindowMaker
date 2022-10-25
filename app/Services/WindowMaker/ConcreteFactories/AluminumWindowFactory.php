<?php

namespace App\Services\WindowMaker\ConcreteFactories;

use App\Services\WindowMaker\AbstractInterface\WindowFactory;
use App\Services\WindowMaker\ConcreteClasses\Makers\Master;
use App\Services\WindowMaker\ConcreteClasses\Windows\AluminumWindow;
use App\Services\WindowMaker\ConcreteInterfaces\Window;
use App\Services\WindowMaker\ConcreteInterfaces\WindowFittingExpert;

class AluminumWindowFactory implements WindowFactory
{

    public function makeWindow(): Window
    {
        return new AluminumWindow();
    }

    public function makeWindowFittingExpert(): WindowFittingExpert
    {
        return new Master();
    }

}
