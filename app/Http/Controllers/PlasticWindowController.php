<?php

namespace App\Http\Controllers;

use App\Services\WindowMaker\ConcreteFactories\PlasticWindowFactory;
use Illuminate\Http\Request;

class PlasticWindowController extends Controller
{
    public function makeWindow()
    {
        $plasticWindowFactory = new PlasticWindowFactory();

        $window = $plasticWindowFactory->makeWindow();
        $maker = $plasticWindowFactory->makeWindowFittingExpert();

        return view('plasticWindow', [
            'windowType' => $window->getWindowType(),
            'windowColor' => $window->getColor(),
            'windowMaker' => $maker->getWindowFitterTitle()

        ]);
    }
}
