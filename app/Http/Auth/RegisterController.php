<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        dd($data);
        pasien::create([
            'NAMA_PASIEN'=>$data['name'],
            'TGL_LAHIR'=>$data['TGL_LAHIR'],
            'TEMPAT_LAHIR'=>$data['TEMPAT_LAHIR'],
            'JENIS_KELAMIN'=>$data['JENIS_KELAMIN'],
            'ALAMAT'=>$data['ALAMAT'],
            'KOTA_TINGGAL'=>$data['KOTA_TINGGAL'],
            'NO_TLP'=>$data['NO_TLP'],
            'PEKERJAAN'=>$data['PEKERJAAN'],
        ]);
        $pasien=DB::table('pasien')->where('NAMA_PASIEN',$data['name'])->get();
        foreach ($pasien as $key) {
            $ID_PASIEN=$key->ID_PASIEN;
        }
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),
            'role'=>"pasien",
            'ID_PASIEN'=>$ID_PASIEN,
        ]);

    }


    public function postregister(){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirm',
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
        return redirect('/login');
    }
}
