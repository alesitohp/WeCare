<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class EditContra extends Controller
{
    public function editarcontra(Request $request)
    {
        $data = $request->input();
        $contra = $data['enviar1'];

        if(!empty($contra)){
            
            
            $id=$request->user()->id;
            DB::table('users')->where(['id' => $id])->update(['password' => Hash::make($data['enviar1'])]);
            return redirect('tickpass');
    
        }else{

            return redirect('crosspass');
        }
        
        
 
        

    }
}
