<?php

namespace App\Http\Controllers;

use App\Temperatura;
use Illuminate\Http\Request;

class TemperaturaController extends BaseController
{
    public function __construct()
    {
        $this->classe = Temperatura::class;
    }

    public function listJon(Request $request)
    {
        $listTemperatures = $this->classe::get();

        return [
            "serial" => "201905AC",
            "label" => "Câmara de sorvete",
            "temperature_min" => -30,
            "temperature_max" => -17,
            "measurements" => $listTemperatures
        ];
    }


}
