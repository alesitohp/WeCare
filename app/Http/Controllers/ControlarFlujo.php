<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlarFlujo extends Controller
{
    public function control(Request $request)
    {
        $data = $request->input();
        $dato = $data['añadir'];
        if($dato=="Añadir"){
            

        }else if($dato=="Borrar"){


        }
        
        
 
        

    }
}
