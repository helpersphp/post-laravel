<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidarFormularioController extends Controller
{
    public function mostrarFormulario()
    {
    	return view('validacion-de-formulario/form');
    }
}
