<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DekanController;
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
    return view('auth.login');
});

Route::get('/register-dekan', function () {
    return view('auth.register_dekan');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/dashboard-admin', [UsersController::class, 'dashboard_admin']);
    Route::get('/periode', [AdminController::class, 'periodeIndex']);
    Route::post('/tambah-periode', [AdminController::class, 'periodeTambah']);
    Route::put('/hapus-periode/{id}', [AdminController::class, 'hapusPeriode']);
    Route::put('/ubah-periode/{id}', [AdminController::class, 'periodeAktif']);
    Route::get('/instrumen', [AdminController::class, 'instrumenIndex']);
    Route::post('/tambah-instrumen', [AdminController::class, 'instrumenTambah']);
    Route::put('/hapus-instrumen/{id}', [AdminController::class, 'hapusInstrumen']);
    Route::put('/edit-instrumen/{id}', [AdminController::class, 'editInstrumen']);
    Route::get('/prodi', [AdminController::class, 'prodiIndex']);
    Route::post('/tambah-prodi', [AdminController::class, 'tambahProdi']);
    Route::get('/pengguna', [AdminController::class, 'penggunaIndex']);
    Route::put('/daftar-pengguna/{id}', [AdminController::class, 'daftarPengguna']);
});

Route::middleware(['auth', 'users'])->group(function(){
    Route::get('/dashboard-users', [UsersController::class, 'dashboard_users']);
    Route::get('/ipk', [UsersController::class, 'ipk_index']);
    Route::get('/masa-studi-lulusan-d3', [UsersController::class, 'tabel8']);
    Route::post('/tambah-masa-studi-lulusan-d3', [UsersController::class, 'tambah_tabel8']);
    Route::put('/hapus-masa-studi-lulusan-d3/{id}', [UsersController::class, 'hapus_tabel8']);
    Route::put('/edit-masa-studi-lulusan-d3/{id}', [UsersController::class, 'edit_tabel8']);
    Route::get('/masa-studi-lulusan', [UsersController::class, 'tabel9']);
    Route::post('/tambah-masa-studi-lulusan', [UsersController::class, 'tambah_tabel9']);
    Route::put('/hapus-masa-studi-lulusan/{id}', [UsersController::class, 'hapus_tabel9']);
    Route::put('/edit-masa-studi-lulusan/{id}', [UsersController::class, 'edit_tabel9']);
    Route::get('/waktu-tunggu-lulusan-d3', [UsersController::class, 'tabel12']);
    Route::post('/tambah-waktu-tunggu-lulusan-d3', [UsersController::class, 'tambah_tabel12']);
    Route::put('/hapus-waktu-tunggu-lulusan-d3/{id}', [UsersController::class, 'hapus_tabel12']);
    Route::put('/edit-waktu-tunggu-lulusan-d3/{id}', [UsersController::class, 'edit_tabel12']);
    Route::get('/waktu-tunggu-lulusan-s1', [UsersController::class, 'tabel13']);
    Route::post('/tambah-waktu-tunggu-lulusan-s1', [UsersController::class, 'tambah_tabel13']);
    Route::put('/hapus-waktu-tunggu-lulusan-s1/{id}', [UsersController::class, 'hapus_tabel13']);
    Route::put('/edit-waktu-tunggu-lulusan-s1/{id}', [UsersController::class, 'edit_tabel13']);
    Route::get('/waktu-tunggu-lulusan-d4', [UsersController::class, 'tabel14']);
    Route::post('/tambah-waktu-tunggu-lulusan-d4', [UsersController::class, 'tambah_tabel14']);
    Route::put('/hapus-waktu-tunggu-lulusan-d4/{id}', [UsersController::class, 'hapus_tabel14']);
    Route::put('/edit-waktu-tunggu-lulusan-d4/{id}', [UsersController::class, 'edit_tabel14']);
    Route::get('/kesesuaian-bidang-kerja', [UsersController::class, 'tabel15']);
    Route::post('/tambah-kesesuaian-bidang-kerja', [UsersController::class, 'tambah_tabel15']);
    Route::put('/hapus-kesesuaian-bidang-kerja/{id}', [UsersController::class, 'hapus_tabel15']);
    Route::put('/edit-kesesuaian-bidang-kerja/{id}', [UsersController::class, 'edit_tabel15']);
    Route::get('/jangkauan-operasi-kerja', [UsersController::class, 'tabel16']);
    Route::post('/tambah-jangkauan-operasi-kerja', [UsersController::class, 'tambah_tabel16']);
    Route::put('/hapus-jangkauan-operasi-kerja/{id}', [UsersController::class, 'hapus_tabel16']);
    Route::put('/edit-jangkauan-operasi-kerja/{id}', [UsersController::class, 'edit_tabel16']);
    Route::get('/karya-ilmiah-mahasiswa', [UsersController::class, 'tabel20']);
    Route::post('/tambah-karya-ilmiah-mahasiswa', [UsersController::class, 'tambah_tabel20']);
    Route::put('/hapus-karya-ilmiah-mahasiswa/{id}', [UsersController::class, 'hapus_tabel20']);
    Route::put('/edit-karya-ilmiah-mahasiswa/{id}', [UsersController::class, 'edit_tabel20']);
    Route::get('/produk-jasa-mahasiswa', [UsersController::class, 'tabel21']);
    Route::post('/tambah-produk-jasa-mahasiswa', [UsersController::class, 'tambah_tabel21']);
    Route::put('/hapus-produk-jasa-mahasiswa/{id}', [UsersController::class, 'hapus_tabel21']);
    Route::put('/edit-produk-jasa-mahasiswa/{id}', [UsersController::class, 'edit_tabel21']);
    Route::get('/luaran-mahasiswa', [UsersController::class, 'tabel22']);
    Route::post('/tambah-luaran-mahasiswa', [UsersController::class, 'tambah_tabel22']);
    Route::put('/hapus-luaran-mahasiswa/{id}', [UsersController::class, 'hapus_tabel22']);
    Route::put('/edit-luaran-mahasiswa/{id}', [UsersController::class, 'edit_tabel22']);
    Route::get('/luaran-penelitian', [UsersController::class, 'tabel23']);
    Route::post('/tambah-luaran-penelitian', [UsersController::class, 'tambah_tabel23']);
    Route::put('/hapus-luaran-penelitian/{id}', [UsersController::class, 'hapus_tabel23']);
    Route::put('/edit-luaran-penelitian/{id}', [UsersController::class, 'edit_tabel23']);
    Route::get('/luaran-pkm', [UsersController::class, 'tabel23b']);
    Route::post('/tambah-luaran-pkm', [UsersController::class, 'tambah_tabel23b']);
    Route::put('/hapus-luaran-pkm/{id}', [UsersController::class, 'hapus_tabel23b']);
    Route::put('/edit-luaran-pkm/{id}', [UsersController::class, 'edit_tabel23b']);
    Route::get('/ipk-lulusan', [UsersController::class, 'tabel91']);
    Route::post('/tambah-ipk-lulusan', [UsersController::class, 'tambah_tabel91']);
    Route::put('/hapus-ipk-lulusan/{id}', [UsersController::class, 'hapus_tabel91']);
    Route::put('/edit-ipk-lulusan/{id}', [UsersController::class, 'edit_tabel91']);
    Route::get('/kelulusan-tepat-waktu', [UsersController::class, 'tabel92']);
    Route::post('/tambah-kelulusan-tepat-waktu', [UsersController::class, 'tambah_tabel92']);
    Route::put('/hapus-kelulusan-tepat-waktu/{id}', [UsersController::class, 'hapus_tabel92']);
    Route::put('/edit-kelulusan-tepat-waktu/{id}', [UsersController::class, 'edit_tabel92']);
    Route::get('/kepuasan-pengguna-lulusan', [UsersController::class, 'tabel93']);
    Route::post('/tambah-kepuasan-pengguna-lulusan', [UsersController::class, 'tambah_tabel93']);
    Route::put('/hapus-kepuasan-pengguna-lulusan/{id}', [UsersController::class, 'hapus_tabel93']);
    Route::put('/edit-kepuasan-pengguna-lulusan/{id}', [UsersController::class, 'edit_tabel93']);
    Route::get('/masa-tunggu-lulusan', [UsersController::class, 'tabel94']);
    Route::post('/tambah-masa-tunggu-lulusan', [UsersController::class, 'tambah_tabel94']);
    Route::put('/hapus-masa-tunggu-lulusan/{id}', [UsersController::class, 'hapus_tabel94']);
    Route::put('/edit-masa-tunggu-lulusan/{id}', [UsersController::class, 'edit_tabel94']);
    Route::get('/kesesuaian-bidang-kerja-lulusan', [UsersController::class, 'tabel95']);
    Route::post('/tambah-kesesuaian-bidang-kerja-lulusan', [UsersController::class, 'tambah_tabel95']);
    Route::put('/hapus-kesesuaian-bidang-kerja-lulusan/{id}', [UsersController::class, 'hapus_tabel95']);
    Route::put('/edit-kesesuaian-bidang-kerja-lulusan/{id}', [UsersController::class, 'edit_tabel95']);
    Route::get('/penelitian-dan-pkm', [UsersController::class, 'tabel96']);
    Route::post('/tambah-penelitian-dan-pkm', [UsersController::class, 'tambah_tabel96']);
    Route::put('/hapus-penelitian-dan-pkm/{id}', [UsersController::class, 'hapus_tabel96']);
    Route::put('/edit-penelitian-dan-pkm/{id}', [UsersController::class, 'edit_tabel96']);
});

Route::middleware(['auth', 'dekan'])->group(function(){
    Route::get('/dashboard-dekan', [DekanController::class, 'dashboard_dekan']);
    Route::get('/prodi-akuntansi', [DekanController::class, 'prodi_akuntansi']);
    Route::get('/masa-studi-lulusan-akuntansi', [DekanController::class, 'tabel9_akuntansi']);
    Route::get('/waktu-tunggu-lulusan-s1-akuntansi', [DekanController::class, 'tabel13_akuntansi']);
    Route::get('/waktu-tunggu-lulusan-d4-akuntansi', [DekanController::class, 'tabel14_akuntansi']);
    Route::get('/kesesuaian-bidang-kerja-akuntansi', [DekanController::class, 'tabel15_akuntansi']);
    Route::get('/jangkauan-operasi-kerja-akuntansi', [DekanController::class, 'tabel16_akuntansi']);
    Route::get('/karya-ilmiah-mahasiswa-akuntansi', [DekanController::class, 'tabel20_akuntansi']);
    Route::get('/produk-jasa-mahasiswa-akuntansi', [DekanController::class, 'tabel21_akuntansi']);
    Route::get('/luaran-mahasiswa-akuntansi', [DekanController::class, 'tabel22_akuntansi']);
    Route::get('/luaran-penelitian-akuntansi', [DekanController::class, 'tabel23_akuntansi']);
    Route::get('/luaran-pkm-akuntansi', [DekanController::class, 'tabel23b_akuntansi']);
    Route::get('/prodi-manajemen', [DekanController::class, 'prodi_manajemen']);
    Route::get('/masa-studi-lulusan-manajemen', [DekanController::class, 'tabel9_manajemen']);
    Route::get('/waktu-tunggu-lulusan-s1-manajemen', [DekanController::class, 'tabel13_manajemen']);
    Route::get('/waktu-tunggu-lulusan-d4-manajemen', [DekanController::class, 'tabel14_manajemen']);
    Route::get('/kesesuaian-bidang-kerja-manajemen', [DekanController::class, 'tabel15_manajemen']);
    Route::get('/jangkauan-operasi-kerja-manajemen', [DekanController::class, 'tabel16_manajemen']);
    Route::get('/karya-ilmiah-mahasiswa-manajemen', [DekanController::class, 'tabel20_manajemen']);
    Route::get('/produk-jasa-mahasiswa-manajemen', [DekanController::class, 'tabel21_manajemen']);
    Route::get('/luaran-mahasiswa-manajemen', [DekanController::class, 'tabel22_manajemen']);
    Route::get('/luaran-penelitian-manajemen', [DekanController::class, 'tabel23_manajemen']);
    Route::get('/luaran-pkm-manajemen', [DekanController::class, 'tabel23b_manajemen']);
    Route::get('/prodimanajemen-bisnis', [DekanController::class, 'prodi_manajemen_bisnis']);
    Route::get('/masa-studi-lulusan-d3manajemen-bisnis', [DekanController::class, 'tabel8_manajemen_bisnis']);
    Route::get('/waktu-tunggu-lulusan-d3manajemen-bisnis', [DekanController::class, 'tabel12_manajemen_bisnis']);
    Route::get('/kesesuaian-bidang-kerjamanajemen-bisnis', [DekanController::class, 'tabel15_manajemen_bisnis']);
    Route::get('/jangkauan-operasi-kerjamanajemen-bisnis', [DekanController::class, 'tabel16_manajemen_bisnis']);
    Route::get('/karya-ilmiah-mahasiswamanajemen-bisnis', [DekanController::class, 'tabel20_manajemen_bisnis']);
    Route::get('/produk-jasa-mahasiswamanajemen-bisnis', [DekanController::class, 'tabel21_manajemen_bisnis']);
    Route::get('/luaran-mahasiswamanajemen-bisnis', [DekanController::class, 'tabel22_manajemen_bisnis']);
    Route::get('/luaran-penelitianmanajemen-bisnis', [DekanController::class, 'tabel23_manajemen_bisnis']);
    Route::get('/luaran-pkmmanajemen-bisnis', [DekanController::class, 'tabel23b_manajemen_bisnis']);
    Route::get('/prodi-teknik-informatika', [DekanController::class, 'prodi_teknik_informatika']);
    Route::get('/prodi-desain-komunikasi-visual', [DekanController::class, 'prodi_desain_komunikasi_visual']);
    Route::get('/prodi-sistem-informasi', [DekanController::class, 'prodi_sistem_informasi']);
    Route::get('/prodi-manajemen-informatika', [DekanController::class, 'prodi_manajemen_informatika']);
    Route::get('/prodi-komputerisasi-akuntansi', [DekanController::class, 'prodi_komputerisasi_akuntansi']);
    Route::get('/ipk-lulusan-sistem-informasi', [DekanController::class, 'tabel91_sistem_informasi']);
    Route::get('/kelulusan-tepat-waktu-sistem-informasi', [DekanController::class, 'tabel92_sistem_informasi']);
    Route::get('/kepuasan-pengguna-lulusan-sistem-informasi', [DekanController::class, 'tabel93_sistem_informasi']);
    Route::get('/masa-tunggu-lulusan-sistem-informasi', [DekanController::class, 'tabel94_sistem_informasi']);
    Route::get('/kesesuaian-bidang-kerja-lulusan-sistem-informasi', [DekanController::class, 'tabel95_sistem_informasi']);
    Route::get('/penelitian-dan-pkm-sistem-informasi', [DekanController::class, 'tabel96_sistem_informasi']);
    Route::get('/ipk-lulusan-teknik-informatika', [DekanController::class, 'tabel91_teknik_informatika']);
    Route::get('/kelulusan-tepat-waktu-teknik-informatika', [DekanController::class, 'tabel92_teknik_informatika']);
    Route::get('/kepuasan-pengguna-lulusan-teknik-informatika', [DekanController::class, 'tabel93_teknik_informatika']);
    Route::get('/masa-tunggu-lulusan-teknik-informatika', [DekanController::class, 'tabel94_teknik_informatika']);
    Route::get('/kesesuaian-bidang-kerja-lulusan-teknik-informatika', [DekanController::class, 'tabel95_teknik_informatika']);
    Route::get('/penelitian-dan-pkm-teknik-informatika', [DekanController::class, 'tabel96_teknik_informatika']);
    Route::get('/ipk-lulusan-desain-komunikasi-visual', [DekanController::class, 'tabel91_desain_komunikasi_visual']);
    Route::get('/kelulusan-tepat-waktu-desain-komunikasi-visual', [DekanController::class, 'tabel92_desain_komunikasi_visual']);
    Route::get('/kepuasan-pengguna-lulusan-desain-komunikasi-visual', [DekanController::class, 'tabel93_desain_komunikasi_visual']);
    Route::get('/masa-tunggu-lulusan-desain-komunikasi-visual', [DekanController::class, 'tabel94_desain_komunikasi_visual']);
    Route::get('/kesesuaian-bidang-kerja-lulusan-desain-komunikasi-visual', [DekanController::class, 'tabel95_desain_komunikasi_visual']);
    Route::get('/penelitian-dan-pkm-desain-komunikasi-visual', [DekanController::class, 'tabel96_desain_komunikasi_visual']);
    Route::get('/ipk-lulusan-manajemen-informatika', [DekanController::class, 'tabel91_manajemen_informatika']);
    Route::get('/kelulusan-tepat-waktu-manajemen-informatika', [DekanController::class, 'tabel92_manajemen_informatika']);
    Route::get('/kepuasan-pengguna-lulusan-manajemen-informatika', [DekanController::class, 'tabel93_manajemen_informatika']);
    Route::get('/masa-tunggu-lulusan-manajemen-informatika', [DekanController::class, 'tabel94_manajemen_informatika']);
    Route::get('/kesesuaian-bidang-kerja-lulusan-manajemen-informatika', [DekanController::class, 'tabel95_manajemen_informatika']);
    Route::get('/penelitian-dan-pkm-manajemen-informatika', [DekanController::class, 'tabel96_manajemen_informatika']);
    Route::get('/ipk-lulusan-komputerisasi-akuntansi', [DekanController::class, 'tabel91_komputerisasi_akuntansi']);
    Route::get('/kelulusan-tepat-waktu-komputerisasi-akuntansi', [DekanController::class, 'tabel92_komputerisasi_akuntansi']);
    Route::get('/kepuasan-pengguna-lulusan-komputerisasi-akuntansi', [DekanController::class, 'tabel93_komputerisasi_akuntansi']);
    Route::get('/masa-tunggu-lulusan-komputerisasi-akuntansi', [DekanController::class, 'tabel94_komputerisasi_akuntansi']);
    Route::get('/kesesuaian-bidang-kerja-lulusan-komputerisasi-akuntansi', [DekanController::class, 'tabel95_komputerisasi_akuntansi']);
    Route::get('/penelitian-dan-pkm-komputerisasi-akuntansi', [DekanController::class, 'tabel96_komputerisasi_akuntansi']);
});
