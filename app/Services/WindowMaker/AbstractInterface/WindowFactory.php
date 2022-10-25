<?php

namespace App\Services\WindowMaker\AbstractInterface;

use App\Services\WindowMaker\ConcreteInterfaces\Window;
use App\Services\WindowMaker\ConcreteInterfaces\WindowFittingExpert;

interface WindowFactory
{
    public function makeWindow(): Window;
    public function makeWindowFittingExpert(): WindowFittingExpert;
}
