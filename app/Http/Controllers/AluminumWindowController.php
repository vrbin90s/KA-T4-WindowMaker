<?php

namespace App\Http\Controllers;

use App\Services\WindowMaker\ConcreteClasses\Colors\Blue;
use App\Services\WindowMaker\ConcreteFactories\AluminumWindowFactory;
use Illuminate\Http\Request;

class AluminumWindowController extends Controller
{
    public function makeWindow()
    {
        $aluminumWindowFactory = new AluminumWindowFactory();

        $window = $aluminumWindowFactory->makeWindow();
        $maker = $aluminumWindowFactory->makeWindowFittingExpert();

        return view('aluminumWindow', [
            'windowType' => $window->getWindowType(),
            'windowColor' => $window->getColor(),
            'windowMaker' => $maker->getWindowFitterTitle()
        ]);
    }
}
