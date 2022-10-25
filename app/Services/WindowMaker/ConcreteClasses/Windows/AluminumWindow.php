<?php

namespace App\Services\WindowMaker\ConcreteClasses\Windows;

use App\Services\WindowMaker\ConcreteClasses\Colors\Blue;
use App\Services\WindowMaker\ConcreteInterfaces\Window;

class AluminumWindow implements Window
{

    public function getWindowType(): string
    {
        return "aluminum window";
    }

    public function getColor(): string
    {
        $color = new Blue();

        return $color->getColor();
    }
}
