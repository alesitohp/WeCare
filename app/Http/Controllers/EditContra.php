<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

class EditContra extends Controller
{
    public function editarcontra(Request $request)
    {
        $data = $request->input();
        $contra = $data['contra'];

        if(!empty($contra)){
            
            
            $id=$request->user()->id;
            DB::table('users')->where(['id' => $id])->update(['password' => Hash::make($data['contra'])]);
            return redirect('tickpass');
    
        }else{

            return redirect('crosspass');
        }
        
        
 
        

    }
}
