<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; //untuk input::get
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\pasien;
use App\Models\User;


use Redirect; //untuk redirect



class AuthController extends Controller
{
    public function Login()
    {
    	return view('auth.login2')->with('sukses','Anda Berhasil Login');
    }

    public function postlogin(Request $request)
    {
      // echo "$request->email.$request->password "; die;
    	if(Auth::attempt($request->only('email','password'))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            //dd($akun);
            if($akun->role =='admin'){
                Auth::guard('admin')->LoginUsingId($akun->id);
                return redirect('/adminlte')->with('sukses','Anda Berhasil Login');
            } else if($akun->role =='pasien'){
                Auth::guard('pasien')->LoginUsingId($akun->id);
                return redirect('/adminltepasien')->with('sukses','Anda Berhasil Login');
            }elseif ($akun->role =='pasien') {
            }
    	}
    	return redirect('auth/login')->with('error','Akun Belum Terdaftar');
    }

    public function logout()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        } else if(Auth::guard('pasien')->check()){
            Auth::guard('pasien')->logout();
        }
    	return redirect('auth/login')->with('sukses','Anda Telah Logout');
    }

    public function cek()

    {   

        /*$input = $request->all();



        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required',

        ]);


        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))

        {*/

            if (auth()->user()->role == 'admin') {

                return redirect('/adminlte');

            }else{

                return redirect('/adminltepasien');

            }

        /*}
        else{

            return redirect()->route('login')

                ->with('error','Email-Address And Password Are Wrong.');

        }
*/


    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pasien' => ['required', 'max:7'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'TGL_LAHIR' => ['required'],
            'TEMPAT_LAHIR'=>['required'],
            'JENIS_KELAMIN'=>['required'],
            'ALAMAT'=>['required'],
            'KOTA_TINGGAL'=>['required'],
            'NO_TLP'=>['required'],
            'PEKERJAAN'=>['required'],
        ]);
    }
    
    public function postregister(Request $request){
        /*$request->validate([ 'title' => 'required|unique:posts|max:255', 'author.name' => 'required', 'author.description' => 'required', ]);*/
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            'TGL_LAHIR'=>'required',
            'TEMPAT_LAHIR'=>'required',
            'JENIS_KELAMIN'=>'required',
            'ALAMAT'=>'required',
            'KOTA_TINGGAL'=>'required',
            'NO_TLP'=>'required',
            'PEKERJAAN'=>'required',
        ]);
        pasien::create([
            'NAMA_PASIEN'=>$request->name,
            'TGL_LAHIR'=>$request->TGL_LAHIR,
            'TEMPAT_LAHIR'=>$request->TEMPAT_LAHIR,
            'JENIS_KELAMIN'=>$request->JENIS_KELAMIN,
            'ALAMAT'=>$request->ALAMAT,
            'KOTA_TINGGAL'=>$request->KOTA_TINGGAL,
            'NO_TLP'=>$request->NO_TLP,
            'PEKERJAAN'=>$request->PEKERJAAN,
        ]);
        $pasien=DB::table('pasien')->where('NAMA_PASIEN',$request->name)->get();
        foreach ($pasien as $key) {
            $ID_PASIEN=$key->ID_PASIEN;
        }
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>"pasien",
            'ID_PASIEN'=>$ID_PASIEN,
        ]);
        return redirect('login');
    }
}

