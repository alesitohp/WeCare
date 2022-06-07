<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Mail\Correo;
use Illuminate\Support\Facades\Mail;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        if(Auth::check()){
            if (Auth::user()->rol =='usuario') {
                return view('main');
            }
            else{
                return view('auth.registration');
            }
            
            }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function settings()
    {
        if(Auth::check()){
            return view('settings');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
                        
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);

       
        $mailable = new Correo;
        Mail::to("aarroyo@ptvtelecom.com")->send($mailable);
        
        
        
        
        
        
        return redirect("login")->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('main');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
      ]);
      $user->assignRole('usuario');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    
    
}
?>
<script>
function delayRedirect(){
    document.getElementById('delayMsg').innerHTML = 'Please wait youll be redirected after <span id="countDown">5</span> seconds....';
    var count = 5;
    setInterval(function(){
        count--;
        document.getElementById('countDown').innerHTML = count;
        if (count == 0) {
            window.location = 'https://www.google.com'; 
        }
    },1000);
}
</script>