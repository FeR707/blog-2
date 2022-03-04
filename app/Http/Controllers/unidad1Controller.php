<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unidad1Controller extends Controller
{
    public function unidad1()
    {
        return view('unidad1');
    }
    public function red()
    {
        return view('red');
    }
    public function concepto()
    {
        return view('conceptoCliente');
    }


}
