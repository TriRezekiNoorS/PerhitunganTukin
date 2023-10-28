<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SatkerController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PengajuanPotonganController;
use App\Http\Controllers\PengajuanPajakController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\PotonganController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\JenisPotonganController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Post;
use App\Http\Controller\PenggunaController;

//Home
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


//Halaman
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/post-login',[ LoginController::class, 'postLogin' ])->name('post-login');

//Register
Route::get('/register',[LoginController::class,'Registerasi']);
Route::post('/simpan-register',[LoginController::class,'simpanregistrasi']);

//Logout
Route::get('/logout',[LoginController::class,'logout']);

//Multi User
Route::group(['middleware'=> ['auth', 'ceklevel:admin,pegawai']], function () {

//Satuan Kerja
Route::get('/satker',[ SatkerController::class, 'tampilHalamanSatker' ]);
Route::get('/satker1',[ SatkerController::class, 'tampilSatker1' ]);
Route::get('/inputsatker',[ SatkerController::class, 'tampilHalamanTambahSatker' ]);
Route::post('/simpan-satker',[ SatkerController::class, 'SimpanSatker' ]);
Route::get('/hapus-satker/{id}',[SatkerController::class, 'destroy' ]);
Route::get('/edit-satker/{id}',[SatkerController::class, 'ubahSatker' ]);
Route::post('/simpanperubahansatker/{id}',[SatkerController::class, 'simpanPerubahanSatker' ]);

//Pegawai
Route::get('/pegawai',[ PegawaiController::class, 'tampilHalamanPegawai' ]);
Route::get('/pegawai1',[ PegawaiController::class, 'tampilPegawai1' ]);
Route::get('/inputpegawai',[ PegawaiController::class, 'tampilHalamanTambahPegawai' ]);
Route::post('/simpanpegawai',[ PegawaiController::class, 'SimpanPegawai' ]);
Route::get('/edit-pegawai/{id}',[ PegawaiController::class, 'ubahPegawai' ]);
Route::get('/hapus-pegawai/{id}',[ PegawaiController::class, 'destroy' ]);
Route::post('/simpanperubahan/{id}',[ PegawaiController::class, 'simpanPerubahan' ]);

//Jabatan
Route::get('/jabatan',[JabatanController::class, 'tampilJabatan']);
Route::get('/inputjabatan',[JabatanController::class, 'tampilInputJabatan']);
Route::post('/simpanjabatan',[JabatanController::class, 'simpanJabatan']);
Route::get('/edit-jabatan/{id}',[JabatanController::class, 'ubahJabatan']);
Route::get('/hapus-jabatan/{id}',[JabatanController::class, 'destroy']);
Route::post('/simpan-jab/{id}',[JabatanController::class, 'SimpanPerubahanJabatan']);

//Golongan
Route::get('/golongan',[GolonganController::class, 'tampilGolongan']);
Route::get('/input-golongan',[GolonganController::class, 'tampilInputGolongan']);
Route::post('/simpangolongan',[GolonganController::class, 'simpanGolongan']);
Route::get('/hapus-golongan/{id}',[GolonganController::class, 'destroy']);
Route::get('/edit-golongan/{id}',[GolonganController::class, 'ubahGolongan']);
Route::post('/simpan-gol/{id}',[GolonganController::class, 'SimpanPerubahanGolongan']);

//Dropdown Kelas
Route::get('/kelas',[KelasController::class, 'tampilHalamanKelas']);
Route::get('/input_kelas',[KelasController::class, 'tampilInputKelas']);
Route::post('/simpan-kelas',[KelasController::class, 'simpanKelas']);
Route::get('/hapus-kelas/{id}',[KelasController::class, 'destroy']);
Route::get('/edit-kelas/{id}',[KelasController::class, 'ubahKelas']);
Route::post('/simpan-kel/{id}',[KelasController::class, 'SimpanPerubahanKelas']);

//Dropdown Grade
Route::get('/grade',[GradeController::class, 'tampilHalamangrade']);
Route::get('/input-grade',[GradeController::class, 'tampilInputGrade']);
Route::post('/simpan-grade',[GradeController::class, 'simpanGrade']);
Route::get('/hapus-grade/{id}',[GradeController::class, 'destroy']);
Route::get('/edit-grade/{id}',[GradeController::class, 'ubahGrade']);
Route::post('/simpan-grade/{id}',[GradeController::class, 'SimpanPerubahanGrade']);

//Dropdown Jenis Potongan
Route::get('/jenis-potongan',[JenisPotonganController::class, 'tampilJenisPotongan']);
Route::get('/input-jenispotongan',[JenisPotonganController::class, 'tampilInputJenisPotongan']);
Route::post('/simpan-jenispotongan',[JenisPotonganController::class, 'simpanJenisPotongan']);
Route::get('/hapus-jenispotongan/{id}',[JenisPotonganController::class, 'destroy']);

//Pengajuan Potongan
Route::get('/pengajuan_potongan',[PengajuanPotonganController::class,'TampilHalamanPengajuanPotongan']);
Route::get('/input-pengajuanpotongan',[PengajuanPotonganController::class,'tampilHalamanTambahPengajuanPotongan']);
Route::post('/simpan-pengajuanpotongan',[PengajuanPotonganController::class,'SimpanPengajuanPotongan']);
Route::get('/hapus-pengajuanpotongan/{id}',[PengajuanPotonganController::class,'destroy']);
Route::get('/edit-pengajuanpotongan/{id}',[PengajuanPotonganController::class,'ubahPengajuanPotongan']);
Route::post('/simpan-pengajuanpotongan/{id}',[PengajuanPotonganController::class,'simpanPerubahanPengajuanPotongan']);

//Pengajuan Pajak
Route::get('/pengajuanpajak',[PengajuanPajakController::class, 'TampilHalamanPengajuanPajak' ]);
Route::get('/input-pengajuanpajak',[PengajuanPajakController::class,'tampilHalamanTambahPengajuanPajak' ]);
Route::post('/simpan-pengajuanpajak',[PengajuanPajakController::class,'SimpanPengajuanPajak']);
Route::get('/hapus-pengajuanpajak/{id}',[PengajuanPajakController::class,'destroy']);
Route::get('/edit-pengajuanpajak/{id}',[PengajuanPajakController::class,'ubahPengajuanPajak']);
Route::post('/simpan-pengajuanpajak/{id}',[PengajuanPajakController::class,'simpanPerubahanPengajuanPajak']);

//Rekapitulasi
Route::get('/rekapitulasi', [RekapitulasiController::class, 'TampilHalamanRekapitulasi']);
Route::get('/input-rekap', [RekapitulasiController::class, 'tampilHalamanTambahRekapitulasi']);

//Hitung
Route::get('/hitung',[ PerhitunganController::class, 'tampilHalamanHitung' ]);
Route::get('/hitung1',[ PerhitunganController::class, 'tampilHitung1' ]);
Route::get('/inputhitung',[ PerhitunganController::class, 'tampilHalamanTambahHitung' ]);
Route::post('/simpanhitung',[ PerhitunganController::class, 'SimpanHitung' ]);
Route::get('/hapus-hitung/{id}',[ PerhitunganController::class, 'destroy' ]);

//Single Hitung
Route::get('/singlehitung/{id}',[ PerhitunganController::class, 'singleHitung' ]);


//Potongan 
Route::get('/potongan',[ PotonganController::class, 'tampilHalamanPotongan' ]);
Route::get('/potongan1',[ PotonganController::class, 'tampilPotongan1' ]);
Route::get('/inputpotongan',[ PotonganController::class, 'tampilInputPotongan' ]);
Route::post('/simpan-potongan',[ PotonganController::class, 'SimpanPotongan' ]);
Route::get('/hapus-potongan/{id}',[ PotonganController::class, 'destroy' ]);
Route::get('potongan/lampiran/{satker}', [ PotonganController::class, 'LampiranSatker' ])->name('potongan.lampiranSatker');
Route::get('/single-pajak1',[ PotonganController::class, 'tampilsinglePajak1' ]);

//single pajak dan potongan
Route::get('/Single-Perhitungan/{id}',[ PotonganController::class, 'singleperhitungan' ]);
Route::get('/single-pajak/{id}',[PajakController::class,'singlepajak']);

//Pajak
Route::get('/pajak',[ PajakController::class, 'tampilHalamanPajak']);
Route::get('/pajak1',[ PajakController::class, 'tampilPajak1']);
Route::get('/input-pajak',[ PajakController::class, 'tampilInputPajak']);
Route::post('/simpan-pajak',[ PajakController::class, 'SimpanPajak']);
Route::get('/hapus-pajak/{id}',[ PajakController::class, 'destroy']);
Route::get('/single-pajak2',[ PajakController::class, 'tampilSinglePajak2']);

//Laporan
Route::get('/laporan',[ LaporanController::class, 'tampilHalamanlaporan' ]);
Route::get('/validasi/{id}',[ LaporanController::class, 'ValidasiLaporan' ]);

Route::get('/status',[ LaporanController::class, 'tampilHalamanStatus' ]);

Route::get('/input-laporan',[ LaporanController::class, 'tampilInputlaporan' ]);
Route::post('/simpan-laporan',[ LaporanController::class, 'SimpanLaporan' ]);
Route::get('/hapus-laporan/{id}',[ LaporanController::class, 'destroy' ]);
Route::get('/cetak-laporan',[ LaporanController::class, 'tampilCetaklaporan' ])->name ('cetak-laporan');
Route::get('/cetak-pertanggal',[ LaporanController::class, 'CetakTanggal' ]);
Route::get('/cetak-pertanggal',[ LaporanController::class, 'CetakLaporanPertanggal' ])->name ('cetak-pertanggal');
});