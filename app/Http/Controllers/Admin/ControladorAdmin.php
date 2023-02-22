<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ControladorAdmin extends Controller
{
    public function clientes(){
        return view('clientes');
    }

    public function facturacion(){
        return view('facturacion');
    }

    public function contabilidad(){
        return view('contabilidad');
    }
}
