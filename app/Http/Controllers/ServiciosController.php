<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /** 
     * @param Illuminate\Http\Request Srequest
     * @return Tluminate\HttpResponse
     * 
    */
    public function servicios(){
        $servicios=[
            ['titulo'=> 'servicio 01'],
            ['titulo'=> 'servicio 02'],
            ['titulo'=> 'servicio 03'],
            ['titulo'=> 'servicio 04'],
            ['titulo'=> 'servicio 05'],
        ];
        return view('servicios',compact('servicios'));
    }
}
