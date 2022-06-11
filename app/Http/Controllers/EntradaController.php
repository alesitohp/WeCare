<?php

namespace App\Http\Controllers;

use App\Models\Entradas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class EntradaController extends Controller
{
    public function entradareg(Request $request)
    {
        $entrada=new Entradas();
        $entrada->name=$request->input('alumnos');
        $entrada->bano=$request->input('banos');
        $entrada->save();
        return redirect('dashboard');

    }
}
