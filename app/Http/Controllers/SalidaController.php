<?php

namespace App\Http\Controllers;

use App\Models\Entradas;
use App\Models\Salida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class SalidaController extends Controller
{
    public function salidareg(Request $request)
    {
        $salida=new Salida();
        $salida->name=$request->input('alumnos2');
        $salida->bano=$request->input('banos1');
        $salida->save();
        return redirect('dashboard');

    }
}
