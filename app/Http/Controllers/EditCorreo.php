<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class EditCorreo extends Controller
{
    public function editarcorreo(Request $request)
    {
        $data = $request->input();
        $emails = $data['correo'];

        if(!empty($emails)){
            
            
            $id=$request->user()->id;
            DB::table('users')->where(['id' => $id])->update(['email' => $emails]);
            return redirect('tick');
    
        }else{
            
           
            return redirect('cross');
        }
        
        
 
        

    }
}
