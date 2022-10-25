<?php

namespace App\Services\WindowMaker\ConcreteInterfaces;

interface Window extends WindowColor
{
    public function getWindowType();
}
