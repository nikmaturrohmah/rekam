<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasienController;
use App\Http\Controllers\petugasadminController;
use App\Http\Controllers\dokterController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\resepobatController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\detailresepController;
use App\Http\Controllers\RekamPasienController;
use App\Http\Controllers\adminltepasienController;
use App\Http\Auth\RegisterController;
use App\Http\Auth\LoginController;
use App\Http\Controllers\AuthController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('purple', function () {
    return view('purple');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('coba', function () {
    return view('coba');
});
Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('adminlte', function () {
    return view('adminlte');
});
Route::get('adminltepasien', function () {
    return view('adminltepasien');
});

Route::get('/admin/register', function () {
    return view('login');
});

Route::post('/postregister', [AuthController::class, 'postregister']);

//login
Route::get('/cek', [AuthController::class, 'cek']);

//Pasien
Route::get('pasien', [pasienController::class, 'pasien']);
Route::get('/pasien/cari', [pasienController::class, 'pasien']);
Route::get('pasien/tambahpasien', [pasienController::class, 'tambahpasien']);
Route::get('pasien/simpan', [pasienController::class, 'simpan']);
Route::get('pasien/edit/{ID_PASIEN}', [pasienController::class, 'edit']);
Route::POST('pasien/update/{ID_PASIEN}', [pasienController::class, 'update']);
Route::get('pasien/softdel/{id}', [pasienController::class, 'softdel']);

//pasien1
Route::get('pasien1', [adminltepasienController::class, 'pasien']);
Route::get('pasien1/tambahpasien', [adminltepasienController::class, 'tambahpasien']);
Route::get('pasien1/simpan', [adminltepasienController::class, 'simpan']);
Route::get('/pasien1/edit/{ID_PASIEN}', [adminltepasienController::class, 'edit']);
Route::get('/pasien1/update', [adminltepasienController::class, 'update']);
Route::get('pasien1/softdel/{id}', [adminltepasienController::class, 'softdel']);

//obat
Route::get('obat', [obatController::class, 'obat']);
Route::get('/obat/cari', [obatController::class, 'obat']);
Route::get('obat/tambahobat', [obatController::class, 'tambahobat']);
Route::get('/obat/simpan', [obatController::class, 'simpan']);
Route::get('obat/edit/{ID_OBAT}', [obatController::class, 'edit']);
route::get('obat/update/{ID_OBAT}',[obatController::class, 'update']);
Route::get('obat/softdel/{id}', [obatController::class, 'softdel']);

//dokter
Route::get('dokter', [dokterController::class, 'dokter']);
Route::get('/dokter/cari', [dokterController::class, 'dokter']);
Route::get('dokter/tambahdokter', [dokterController::class, 'tambahdokter']);
Route::get('dokter/simpan', [dokterController::class, 'simpan']);
Route::get('dokter/edit/{ID_DOKTER}', [dokterController::class, 'edit']);
route::POST('dokter/update/{ID_DOKTER}', [dokterController::class, 'update']);
Route::get('dokter/softdel/{id}', [dokterController::class, 'softdel']);

//petugasAdmin
Route::get('petugasadmin', [petugasadminController::class, 'petugasadmin']);
Route::get('/petugasadmin/cari', [petugasadminController::class, 'petugasadmin']);
Route::get('petugasadmin/tambahpetugasadmin', [petugasadminController::class, 'tambahpetugasadmin']);
Route::get('petugasadmin/simpan', [petugasadminController::class, 'simpan']);
Route::get('/petugasadmin/edit/{ID_PETUGAS}', [petugasadminController::class, 'edit']);
Route::POST('petugasadmin/update/{ID_PETUGAS}',[petugasadminController::class, 'update']);
Route::get('petugasadmin/softdel/{id}', [petugasadminController::class, 'softdel']);

//resep_obat
Route::get('/resepobat', [resepobatController::class, 'index']);
Route::get('/resepobat/cari', [resepobatController::class, 'index']);
Route::get('/resepobat/tambah', [resepobatController::class, 'tambah']);
Route::post('/resepobat/resepobat/simpan', [resepobatController::class, 'simpan']);
Route::get('/resepobat/edit/{id}', [resepobatController::class, 'edit']);
route::post('/resepobat/update/{ID_RESEP}',[resepobatController::class, 'update']);
Route::get('/resepobat/softdel/{id}', [resepobatController::class, 'softdel']);

//rekam_medis
Route::get('rekammedis', [RekamController::class, 'index']);
Route::get('/rekammedis/cari', [RekamController::class, 'index']);
Route::get('/rekammedis/tambah', [RekamController::class, 'tambah']);
Route::post('/rekammedis/simpan', [RekamController::class, 'simpan']);
Route::get('/rekammedis/edit/{id}', [RekamController::class, 'edit']);
Route::post('/rekammedis/update/{id}',[RekamController::class, 'update']);
Route::get('/rekammedis/softdel/{id}', [RekamController::class, 'softdel']);

//detail
Route::get('detailresep', [detailresepController::class, 'detailresep']);
Route::get('detailresep', [detailresepController::class, 'index']);
Route::get('detailresep/tambah', [detailresepController::class, 'tambah']);
Route::post('detailresep/simpan', [detailresepController::class, 'simpan']);
Route::get('detailresep/edit/{id}', [detailresepController::class, 'edit']);
Route::post('detailresep/update/{id}',[detailresepController::class, 'update']);
Route::get('detailresep/hapus/{id}', [detailresepController::class, 'hapus']);

//rekam medis pasien
Route::get('rekammedispasien', [RekamPasienController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/home', [App\Http\Controllers\adminltepasienController::class, 'index'])->name('home');
