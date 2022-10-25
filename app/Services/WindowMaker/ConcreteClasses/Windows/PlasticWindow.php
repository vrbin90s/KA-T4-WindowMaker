<?php

namespace App\Services\WindowMaker\ConcreteClasses\Windows;

use App\Services\WindowMaker\ConcreteClasses\Colors\Red;
use App\Services\WindowMaker\ConcreteInterfaces\Window;

class PlasticWindow implements Window
{

    public function getWindowType(): string
    {
        return  "plastic window";
    }


    public function getColor(): string
    {
        $color = new Red();

        return $color->getColor();
    }
}
