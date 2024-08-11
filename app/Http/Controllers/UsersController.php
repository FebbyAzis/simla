<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\IPK;
use App\Models\Prodi;
use App\Models\Periode;
use App\Models\Tabel8;
use App\Models\Tabel9;
use App\Models\Tabel12;
use App\Models\Tabel13;
use App\Models\Tabel14;
use App\Models\Tabel15;
use App\Models\Tabel16;
use App\Models\Tabel20;
use App\Models\Tabel21;
use App\Models\Tabel22;
use App\Models\Tabel23;
use App\Models\Tabel23b;
use App\Models\Tabel91;
use App\Models\Tabel92;
use App\Models\Tabel93;
use App\Models\Tabel94;
use App\Models\Tabel95;
use App\Models\Tabel96;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function dashboard_admin()
    {
        return view('admin.dashboard');
    }

    public function dashboard_users()
    {
        $user = Auth::user();
        $prodi = $user->prodi_id;
        $instrumen = Prodi::where('id', $user->prodi_id)->first();
        $instrumen2 = $instrumen->instrumen;
        // dd($instrumen2);
        $users = Tabel9::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        $users21 = Tabel21::where('prodi_id', $prodi)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users22 = Tabel22::where('prodi_id', $prodi)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23 = Tabel23::where('prodi_id', $prodi)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23b = Tabel23b::where('prodi_id', $prodi)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
       
        $data = [
            'labels' => $users->pluck('tahun_masuk'),
            'datasets' => [
                [
                    'label' => 'Jumlah Lulusan Akhir TS-6',
                    'backgroundColor' => '#f87979',
                    'data' => $users->pluck('akhir_ts6')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-5',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users->pluck('akhir_ts5')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-4',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users->pluck('akhir_ts4')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-3',
                    'backgroundColor' => '#6495ED',
                    'data' => $users->pluck('akhir_ts3')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-2',
                    'backgroundColor' => '#FF8C00',
                    'data' => $users->pluck('akhir_ts2')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-1',
                    'backgroundColor' => '#696969',
                    'data' => $users->pluck('akhir_ts1')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS',
                    'backgroundColor' => '#8B0000',
                    'data' => $users->pluck('akhir_ts')
                ]
            ]
        ];

        $users1 = Tabel13::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
        $data1 = [
            'labels' => $users1->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'WT < 6 Bulan',
                    'backgroundColor' => '#f87979',
                    'data' => $users1->pluck('wt6bln')
                ],
                [
                    'label' => '6 ≤ WT ≤ 18 bulan',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users1->pluck('wt6wt_18bln')
                ],
                [
                    'label' => 'WT > 18 Bulan',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users1->pluck('wt18bln')
                ],
            ]
        ];

        $users2 = Tabel14::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

        $data2 = [
            'labels' => $users2->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'WT < 3 Bulan',
                    'backgroundColor' => '#f87979',
                    'data' => $users2->pluck('wt3bln')
                ],
                [
                    'label' => '3 ≤ WT ≤ 6 bulan',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users2->pluck('wt3wt_6bln')
                ],
                [
                    'label' => 'WT > 6 Bulan',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users2->pluck('wt3bln')
                ],
            ]
        ];

        $users3 = Tabel15::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
        $data3 = [
            'labels' => $users3->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'Jumlah Lulusan Terlacak Tidak Sesuai Bidang Pekerjaan',
                    'backgroundColor' => '#f87979',
                    'data' => $users3->pluck('jumlah_lulusan_tidak_sesuai')
                ],
                [
                    'label' => 'Jumlah Lulusan Terlacak Sesuai Bidang Pekerjaan',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users3->pluck('jumlah_lulusan_sesuai')
                ],
            ]
        ];

        $users4 = Tabel16::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
        $data4 = [
            'labels' => $users4->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'Lokal/Wilayah/Berwirausaha Tidak Berizin',
                    'backgroundColor' => '#f87979',
                    'data' => $users4->pluck('lokal')
                ],
                [
                    'label' => 'Nasional/Berwirausaha Berizin',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users4->pluck('nasional')
                ],
                [
                    'label' => 'Multinasional/Internasional',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users4->pluck('internasional')
                ],
            ]
        ];

        $users5 = Tabel20::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
        $data5 = [
            'labels' => $users5->pluck('nama_mahasiswa'),
            'descriptions' => $users5->pluck('judul_artikel_sitasi'),
            'datasets' => [
                [
                    'label' => 'Jumlah Sitasi',
                    'backgroundColor' => '#f87979',
                    'data' => $users5->pluck('jumlah_sitasi')
                ],
            ]
        ];

        $users6 = Tabel8::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

        $data6 = [
            'labels' => $users6->pluck('tahun_masuk'),
            'datasets' => [
                [
                    'label' => 'Jumlah Lulusan Akhir TS-4',
                    'backgroundColor' => '#f87979',
                    'data' => $users6->pluck('akhir_ts4')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-3',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users6->pluck('akhir_ts3')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-2',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users6->pluck('akhir_ts2')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-1',
                    'backgroundColor' => '#6495ED',
                    'data' => $users6->pluck('akhir_ts1')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS',
                    'backgroundColor' => '#FF8C00',
                    'data' => $users6->pluck('akhir_ts')
                ]
            ]
        ];

        $users7 = Tabel12::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

        $data7 = [
            'labels' => $users7->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'WT < 3 Bulan',
                    'backgroundColor' => '#f87979',
                    'data' => $users7->pluck('wt3bln')
                ],
                [
                    'label' => '3 ≤ WT ≤ 6 bulan',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users7->pluck('wt3wt_6bln')
                ],
                [
                    'label' => 'WT > 6 Bulan',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users7->pluck('wt3bln')
                ],
            ]
        ];

        $users91 = Tabel91::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
        $data91 = [
            'labels' => $users91->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'IPK Minimal',
                    'backgroundColor' => '#f87979',
                    'data' => $users91->pluck('minimal')
                ],
                [
                    'label' => 'IPK Rata-rata',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users91->pluck('ratarata')
                ],
                [
                    'label' => 'IPK Maksimal',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users91->pluck('maksimal')
                ],
            ]
        ];

        $users92 = Tabel92::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
        $data92 = [
            'labels' => $users92->pluck('tahun_masuk'),
            'datasets' => [
                [
                    'label' => 'Jumlah Lulusan Akhir TS-6',
                    'backgroundColor' => '#f87979',
                    'data' => $users92->pluck('akhir_ts6')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-5',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users92->pluck('akhir_ts5')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-4',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users92->pluck('akhir_ts4')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-3',
                    'backgroundColor' => '#6495ED',
                    'data' => $users92->pluck('akhir_ts3')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-2',
                    'backgroundColor' => '#FF8C00',
                    'data' => $users92->pluck('akhir_ts2')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-1',
                    'backgroundColor' => '#696969',
                    'data' => $users92->pluck('akhir_ts1')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS',
                    'backgroundColor' => '#8B0000',
                    'data' => $users92->pluck('akhir_ts')
                ]
            ]
        ];

        $users93 = Tabel93::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
        $data93 = [
            'labels' => $users93->pluck('jenis_kemampuan'),
            'datasets' => [
                [
                    'label' => 'Tingkat Kepuasan Pengguna "Sangat Baik"',
                    'backgroundColor' => '#f87979',
                    'data' => $users93->pluck('sangat_baik')
                ],
                [
                    'label' => 'Tingkat Kepuasan Pengguna "Baik"',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users93->pluck('baik')
                ],
                [
                    'label' => 'Tingkat Kepuasan Pengguna "Cukup"',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users93->pluck('cukup')
                ],
                [
                    'label' => 'Tingkat Kepuasan Pengguna "Kurang"',
                    'backgroundColor' => '#6495ED',
                    'data' => $users93->pluck('kurang')
                ],
            ]
        ];

        $users94 = Tabel94::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
        $data94 = [
            'labels' => $users94->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'Rata-rata Waktu Tunggu (Bulan)"',
                    'backgroundColor' => '#f87979',
                    'data' => $users94->pluck('ratarata_waktu_tunggu')
                ]
            ]
        ];

        $users95 = Tabel95::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
        $data95 = [
            'labels' => $users95->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'Profesi Kerja Bidang Infokom',
                    'backgroundColor' => '#f87979',
                    'data' => $users95->pluck('profesi_kerja_infokom')
                ],
                [
                    'label' => 'Profesi Kerja Bidang Non Infokom',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users95->pluck('profesi_kerja_noninfokom')
                ],
            ]
        ];

        $users96 = Tabel96::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
        $data96 = [
            'labels' => $users96->pluck('nama_dtpr'),
            'datasets' => [
                [
                    'label' => 'Jumlah Publikasi Bertema Infokom',
                    'backgroundColor' => '#f87979',
                    'data' => $users96->pluck('jumlah_publikasi_infokom')
                ],
                [
                    'label' => 'Jumlah Penelitian Bertema Infokom',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users96->pluck('jumlah_penelitian_infokom')
                ],
                [
                    'label' => 'Jumlah Penelitian Bertema Infokom yang Mendapat HKI"',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users96->pluck('jumlah_penelitian_infokom_hki')
                ],
                [
                    'label' => 'Jumlah PkM Bertema Infokom yang DIadopsi Masyarakat"',
                    'backgroundColor' => '#6495ED',
                    'data' => $users96->pluck('jumlah_pkm_infokom')
                ],
                [
                    'label' => 'Jumlah PkM Bertema Infokom yang Mendapat HKI',
                    'backgroundColor' => '#FF8C00',
                    'data' => $users96->pluck('jumlah_pkm_infokom_hki')
                ],
            ]
        ];

        return view('users.dashboard', compact('users', 'users1', 'data', 'data1', 'users2', 'data2', 'users3', 'data3'
        , 'users4', 'data4', 'users5', 'data5', 'users6', 'data6', 'users7', 'data7', 'user', 'prodi', 'users21', 'users22'
        , 'users23', 'users23b', 'users91', 'data91', 'instrumen', 'instrumen2', 'users92', 'data92', 'users93', 'data93'
        , 'users94', 'data94', 'users95', 'data95', 'users96', 'data96'));
    }

    public function app_users()
    {
        $user = Auth::user();

        if ($user) {
            $prodi = Prodi::where('id', $user->prodi_id)->first();

            if ($prodi) {
                $instrumen = $prodi->instrumen;

                return view('users.layout.app', ['instrumen' => $instrumen, 'prodi' => $prodi]);
            } else {
                return response()->json(['message' => 'Prodi not found'], 404);
            }
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    }
    

    public function ipk_index()
    {
        $ipk = IPK::all();
        // dd($users);
        return view('users.ipk.index', compact('ipk'));
    }

    public function tabel8()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel8 = Tabel8::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel8', compact('tabel8', 'user', 'users', 'periode', 'prodi'));
    }
    
    public function tambah_tabel8(Request $request)
    {
        $save = new Tabel8;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_masuk = $request->tahun_masuk;
        $save->jumlah_mahasiswa_diterima = $request->jumlah_mahasiswa_diterima;
        $save->akhir_ts4 = $request->akhir_ts4;
        $save->akhir_ts3 = $request->akhir_ts3;
        $save->akhir_ts2 = $request->akhir_ts2;
        $save->akhir_ts1 = $request->akhir_ts1;
        $save->akhir_ts = $request->akhir_ts;
        $save->jumlah_lulusan_akhir_ts = $request->jumlah_lulusan_akhir_ts;
        $save->ratarata_masa_studi = $request->ratarata_masa_studi;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel8(Request $request, $id)
    {

        Tabel8::where('id', $id)->update([    
            'tahun_masuk' => $request->tahun_masuk,
            'jumlah_mahasiswa_diterima' => $request->jumlah_mahasiswa_diterima,
            'akhir_ts4' => $request->akhir_ts4,
            'akhir_ts3' => $request->akhir_ts3,
            'akhir_ts2' => $request->akhir_ts2,
            'akhir_ts1' => $request->akhir_ts1,
            'akhir_ts' => $request->akhir_ts,
            'jumlah_lulusan_akhir_ts' => $request->jumlah_lulusan_akhir_ts,
            'ratarata_masa_studi' => $request->ratarata_masa_studi,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel8($id)
    {
        $tabel8 = Tabel8::find($id);
        Tabel8::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel9()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel9 = Tabel9::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel9', compact('tabel9', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel9(Request $request)
    {
        $save = new Tabel9;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_masuk = $request->tahun_masuk;
        $save->jumlah_mahasiswa_diterima = $request->jumlah_mahasiswa_diterima;
        $save->akhir_ts6 = $request->akhir_ts6;
        $save->akhir_ts5 = $request->akhir_ts5;
        $save->akhir_ts4 = $request->akhir_ts4;
        $save->akhir_ts3 = $request->akhir_ts3;
        $save->akhir_ts2 = $request->akhir_ts2;
        $save->akhir_ts1 = $request->akhir_ts1;
        $save->akhir_ts = $request->akhir_ts;
        $save->jumlah_lulusan_akhir_ts = $request->jumlah_lulusan_akhir_ts;
        $save->ratarata_masa_studi = $request->ratarata_masa_studi;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel9(Request $request, $id)
    {

        Tabel9::where('id', $id)->update([    
            'tahun_masuk' => $request->tahun_masuk,
            'jumlah_mahasiswa_diterima' => $request->jumlah_mahasiswa_diterima,
            'akhir_ts6' => $request->akhir_ts6,
            'akhir_ts5' => $request->akhir_ts5,
            'akhir_ts4' => $request->akhir_ts4,
            'akhir_ts3' => $request->akhir_ts3,
            'akhir_ts2' => $request->akhir_ts2,
            'akhir_ts1' => $request->akhir_ts1,
            'akhir_ts' => $request->akhir_ts,
            'jumlah_lulusan_akhir_ts' => $request->jumlah_lulusan_akhir_ts,
            'ratarata_masa_studi' => $request->ratarata_masa_studi,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel9($id)
    {
        $tabel9 = Tabel9::find($id);
        Tabel9::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel12()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel12 = Tabel12::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel12', compact('tabel12', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel12(Request $request)
    {
        $save = new Tabel12;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->jumlah_lulusan_terlacak = $request->jumlah_lulusan_terlacak;
        $save->jumlah_lulusan_dipesan = $request->jumlah_lulusan_dipesan;
        $save->wt3bln = $request->wt3bln;
        $save->wt3wt_6bln = $request->wt3wt_6bln;
        $save->wt6bln = $request->wt6bln;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel12(Request $request, $id)
    {

        Tabel12::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'jumlah_lulusan_terlacak' => $request->jumlah_lulusan_terlacak,
            'jumlah_lulusan_dipesan' => $request->jumlah_lulusan_dipesan,
            'wt3bln' => $request->wt3bln,
            'wt3wt_6bln' => $request->wt3wt_6bln,
            'wt6bln' => $request->wt6bln,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel12($id)
    {
        $tabel12 = Tabel12::find($id);
        Tabel12::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel13()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel13 = Tabel13::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel13', compact('tabel13', 'user', 'users', 'prodi', 'periode'));
    }

    public function tambah_tabel13(Request $request)
    {
        $save = new Tabel13;
        $save->users_id = $request->users_id;
        $save->prodi_id = $request->prodi_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->jumlah_lulusan_terlacak = $request->jumlah_lulusan_terlacak;
        $save->jumlah_lulusan_dipesan = $request->jumlah_lulusan_dipesan;
        $save->wt6bln = $request->wt6bln;
        $save->wt6wt_18bln = $request->wt6wt_18bln;
        $save->wt18bln = $request->wt18bln;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel13(Request $request, $id)
    {

        Tabel13::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'jumlah_lulusan_terlacak' => $request->jumlah_lulusan_terlacak,
            'jumlah_lulusan_dipesan' => $request->jumlah_lulusan_dipesan,
            'wt6bln' => $request->wt6bln,
            'wt6wt_18bln' => $request->wt6wt_18bln,
            'wt18bln' => $request->wt18bln,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel13($id)
    {
        $tabel13 = Tabel13::find($id);
        Tabel13::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel14()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel14 = Tabel14::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel14', compact('tabel14', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel14(Request $request)
    {
        $save = new Tabel14;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->jumlah_lulusan_terlacak = $request->jumlah_lulusan_terlacak;
        $save->jumlah_lulusan_dipesan = $request->jumlah_lulusan_dipesan;
        $save->wt3bln = $request->wt3bln;
        $save->wt3wt_6bln = $request->wt3wt_6bln;
        $save->wt6bln = $request->wt6bln;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel14(Request $request, $id)
    {

        Tabel14::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'jumlah_lulusan_terlacak' => $request->jumlah_lulusan_terlacak,
            'jumlah_lulusan_dipesan' => $request->jumlah_lulusan_dipesan,
            'wt3bln' => $request->wt3bln,
            'wt3wt_6bln' => $request->wt3wt_6bln,
            'wt6bln' => $request->wt6bln,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel14($id)
    {
        $tabel14 = Tabel14::find($id);
        Tabel14::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel15()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel15 = Tabel15::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel15', compact('tabel15', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel15(Request $request)
    {
        $save = new Tabel15;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->jumlah_lulusan_terlacak = $request->jumlah_lulusan_terlacak;
        $save->jumlah_lulusan_tidak_sesuai = $request->jumlah_lulusan_tidak_sesuai;
        $save->jumlah_lulusan_sesuai = $request->jumlah_lulusan_sesuai;
        $save->kesesuaian_target_upps = $request->kesesuaian_target_upps;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel15(Request $request, $id)
    {

        Tabel15::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'jumlah_lulusan_terlacak' => $request->jumlah_lulusan_terlacak,
            'jumlah_lulusan_tidak_sesuai' => $request->jumlah_lulusan_tidak_sesuai,
            'jumlah_lulusan_sesuai' => $request->jumlah_lulusan_sesuai,
            'kesesuaian_target_upps' => $request->kesesuaian_target_upps,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel15($id)
    {
        $tabel15 = Tabel15::find($id);
        Tabel15::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }


    public function tabel16()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel16 = Tabel16::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel16', compact('tabel16', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel16(Request $request)
    {
        $save = new Tabel16;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->jumlah_lulusan_terlacak = $request->jumlah_lulusan_terlacak;
        $save->lokal = $request->lokal;
        $save->nasional = $request->nasional;
        $save->internasional = $request->internasional;
        $save->kesesuaian_target_upps = $request->kesesuaian_target_upps;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel16(Request $request, $id)
    {

        Tabel16::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'jumlah_lulusan_terlacak' => $request->jumlah_lulusan_terlacak,
            'lokal' => $request->lokal,
            'nasional' => $request->nasional,
            'internasional' => $request->internasional,
            'kesesuaian_target_upps' => $request->kesesuaian_target_upps,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel16($id)
    {
        $tabel16 = Tabel16::find($id);
        Tabel16::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel20()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel20 = Tabel20::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel20', compact('tabel20', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel20(Request $request)
    {
        $save = new Tabel20;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->nama_mahasiswa = $request->nama_mahasiswa;
        $save->judul_artikel_sitasi = $request->judul_artikel_sitasi;
        $save->jumlah_sitasi = $request->jumlah_sitasi;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel20(Request $request, $id)
    {

        Tabel20::where('id', $id)->update([    
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'judul_artikel_sitasi' => $request->judul_artikel_sitasi,
            'jumlah_sitasi' => $request->jumlah_sitasi,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel20($id)
    {
        $tabel20 = Tabel20::find($id);
        Tabel20::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel21()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel21 = Tabel21::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel21', compact('tabel21', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel21(Request $request)
    {
        $file = $request->file('bukti');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'bukti';
        $file->move($tujuan_upload,$nama_file);

        $save = new Tabel21;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->nama_mahasiswa = $request->nama_mahasiswa;
        $save->nama_produk = $request->nama_produk;
        $save->deskripsi_produk = $request->deskripsi_produk;
        $save->bukti = $nama_file;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel21(Request $request, $id)
    {

        $file = $request->file('bukti');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'bukti';
        $file->move($tujuan_upload,$nama_file);

        Tabel21::where('id', $id)->update([    
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'bukti' => $nama_file,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel21($id)
    {
        $tabel21 = Tabel21::find($id);
        Tabel21::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel22()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel22 = Tabel22::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel22', compact('tabel22', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel22(Request $request)
    {
        $save = new Tabel22;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->judul_luaran_penelitian = $request->judul_luaran_penelitian;
        $save->tahun = $request->tahun;
        $save->keterangan = $request->keterangan;
        $save->standar_pendidikan_perguruan_tinggi = $request->standar_pendidikan_perguruan_tinggi;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel22(Request $request, $id)
    {

        Tabel22::where('id', $id)->update([    
            'judul_luaran_penelitian' => $request->judul_luaran_penelitian,
            'tahun' => $request->tahun,
            'keterangan' => $request->keterangan,
            'standar_pendidikan_perguruan_tinggi' => $request->standar_pendidikan_perguruan_tinggi,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel22($id)
    {
        $tabel22 = Tabel22::find($id);
        Tabel22::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel23()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel23 = Tabel23::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel23', compact('tabel23', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel23(Request $request)
    {
        $save = new Tabel23;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->luaran_penelitian = $request->luaran_penelitian;
        $save->tahun = $request->tahun;
        $save->keterangan = $request->keterangan;
        $save->perguruan_tinggi_mandiri = $request->perguruan_tinggi_mandiri;
        $save->lembaga_dalam_negeri = $request->lembaga_dalam_negeri;
        $save->lembaga_luar_negeri = $request->lembaga_luar_negeri;
        $save->jurnal_nasional_tidak_terakreditasi = $request->jurnal_nasional_tidak_terakreditasi;
        $save->jurnal_nasional_terakreditasi = $request->jurnal_nasional_terakreditasi;
        $save->jurnal_internasional = $request->jurnal_internasional;
        $save->jurnal_internasional_bereputasi = $request->jurnal_internasional_bereputasi;
        $save->seminar_wilayah_lokal_perguruan_tinggi = $request->seminar_wilayah_lokal_perguruan_tinggi;
        $save->seminar_nasional = $request->seminar_nasional;
        $save->seminar_internasional = $request->seminar_internasional;
        $save->tulisan_dimedia_masa_wilayah = $request->tulisan_dimedia_masa_wilayah;
        $save->tulisan_dimedia_masa_nasional = $request->tulisan_dimedia_masa_nasional;
        $save->tulisan_dimedia_masa_internasional = $request->tulisan_dimedia_masa_internasional;
        $save->pagelaran_pameran_presentasi_tingkat_wilayah = $request->pagelaran_pameran_presentasi_tingkat_wilayah;
        $save->pagelaran_pameran_presentasi_tingkat_nasional = $request->pagelaran_pameran_presentasi_tingkat_nasional;
        $save->pagelaran_pameran_presentasi_tingkat_internasional = $request->pagelaran_pameran_presentasi_tingkat_internasional;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel23(Request $request, $id)
    {

        Tabel23::where('id', $id)->update([    
            'luaran_penelitian' => $request->luaran_penelitian,
            'tahun' => $request->tahun,
            'keterangan' => $request->keterangan,
            'perguruan_tinggi_mandiri' => $request->perguruan_tinggi_mandiri,
            'lembaga_dalam_negeri' => $request->lembaga_dalam_negeri,
            'lembaga_luar_negeri' => $request->lembaga_luar_negeri,
            'jurnal_nasional_tidak_terakreditasi' => $request->jurnal_nasional_tidak_terakreditasi,
            'jurnal_nasional_terakreditasi' => $request->jurnal_nasional_terakreditasi,
            'jurnal_internasional' => $request->jurnal_internasional,
            'jurnal_internasional_bereputasi' => $request->jurnal_internasional_bereputasi,
            'seminar_wilayah_lokal_perguruan_tinggi' => $request->seminar_wilayah_lokal_perguruan_tinggi,
            'seminar_nasional' => $request->seminar_nasional,
            'seminar_internasional' => $request->seminar_internasional,
            'tulisan_dimedia_masa_wilayah' => $request->tulisan_dimedia_masa_wilayah,
            'tulisan_dimedia_masa_nasional' => $request->tulisan_dimedia_masa_nasional,
            'tulisan_dimedia_masa_internasional' => $request->tulisan_dimedia_masa_internasional,
            'pagelaran_pameran_presentasi_tingkat_wilayah' => $request->pagelaran_pameran_presentasi_tingkat_wilayah,
            'pagelaran_pameran_presentasi_tingkat_nasional' => $request->pagelaran_pameran_presentasi_tingkat_nasional,
            'pagelaran_pameran_presentasi_tingkat_internasional' => $request->pagelaran_pameran_presentasi_tingkat_internasional,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel23($id)
    {
        $tabel23 = Tabel23::find($id);
        Tabel23::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel23b()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel23b = Tabel23b::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.lamemba.tabel23b', compact('tabel23b', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel23b(Request $request)
    {
        $save = new Tabel23b;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->luaran_pkm = $request->luaran_pkm;
        $save->tahun = $request->tahun;
        $save->keterangan = $request->keterangan;
        $save->perguruan_tinggi_mandiri = $request->perguruan_tinggi_mandiri;
        $save->lembaga_dalam_negeri = $request->lembaga_dalam_negeri;
        $save->lembaga_luar_negeri = $request->lembaga_luar_negeri;
        $save->jurnal_nasional_tidak_terakreditasi = $request->jurnal_nasional_tidak_terakreditasi;
        $save->jurnal_nasional_terakreditasi = $request->jurnal_nasional_terakreditasi;
        $save->jurnal_internasional = $request->jurnal_internasional;
        $save->jurnal_internasional_bereputasi = $request->jurnal_internasional_bereputasi;
        $save->seminar_wilayah_lokal_perguruan_tinggi = $request->seminar_wilayah_lokal_perguruan_tinggi;
        $save->seminar_nasional = $request->seminar_nasional;
        $save->seminar_internasional = $request->seminar_internasional;
        $save->tulisan_dimedia_masa_wilayah = $request->tulisan_dimedia_masa_wilayah;
        $save->tulisan_dimedia_masa_nasional = $request->tulisan_dimedia_masa_nasional;
        $save->tulisan_dimedia_masa_internasional = $request->tulisan_dimedia_masa_internasional;
        $save->pagelaran_pameran_presentasi_tingkat_wilayah = $request->pagelaran_pameran_presentasi_tingkat_wilayah;
        $save->pagelaran_pameran_presentasi_tingkat_nasional = $request->pagelaran_pameran_presentasi_tingkat_nasional;
        $save->pagelaran_pameran_presentasi_tingkat_internasional = $request->pagelaran_pameran_presentasi_tingkat_internasional;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel23b(Request $request, $id)
    {

        Tabel23b::where('id', $id)->update([    
            'luaran_pkm' => $request->luaran_pkm,
            'tahun' => $request->tahun,
            'keterangan' => $request->keterangan,
            'perguruan_tinggi_mandiri' => $request->perguruan_tinggi_mandiri,
            'lembaga_dalam_negeri' => $request->lembaga_dalam_negeri,
            'lembaga_luar_negeri' => $request->lembaga_luar_negeri,
            'jurnal_nasional_tidak_terakreditasi' => $request->jurnal_nasional_tidak_terakreditasi,
            'jurnal_nasional_terakreditasi' => $request->jurnal_nasional_terakreditasi,
            'jurnal_internasional' => $request->jurnal_internasional,
            'jurnal_internasional_bereputasi' => $request->jurnal_internasional_bereputasi,
            'seminar_wilayah_lokal_perguruan_tinggi' => $request->seminar_wilayah_lokal_perguruan_tinggi,
            'seminar_nasional' => $request->seminar_nasional,
            'seminar_internasional' => $request->seminar_internasional,
            'tulisan_dimedia_masa_wilayah' => $request->tulisan_dimedia_masa_wilayah,
            'tulisan_dimedia_masa_nasional' => $request->tulisan_dimedia_masa_nasional,
            'tulisan_dimedia_masa_internasional' => $request->tulisan_dimedia_masa_internasional,
            'pagelaran_pameran_presentasi_tingkat_wilayah' => $request->pagelaran_pameran_presentasi_tingkat_wilayah,
            'pagelaran_pameran_presentasi_tingkat_nasional' => $request->pagelaran_pameran_presentasi_tingkat_nasional,
            'pagelaran_pameran_presentasi_tingkat_internasional' => $request->pagelaran_pameran_presentasi_tingkat_internasional,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel23b($id)
    {
        $tabel23b = Tabel23b::find($id);
        Tabel23b::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel91()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel91 = Tabel91::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.infokom.tabel91', compact('tabel91', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel91(Request $request)
    {
        $save = new Tabel91;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->minimal = $request->minimal;
        $save->ratarata = $request->ratarata;
        $save->maksimal = $request->maksimal;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel91(Request $request, $id)
    {

        Tabel91::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'minimal' => $request->minimal,
            'ratarata' => $request->ratarata,
            'maksimal' => $request->maksimal,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel91($id)
    {
        $tabel91 = Tabel91::find($id);
        Tabel91::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel92()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel92 = Tabel92::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.infokom.tabel92', compact('tabel92', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel92(Request $request)
    {
        $save = new Tabel92;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_masuk = $request->tahun_masuk;
        $save->jumlah_mahasiswa_diterima = $request->jumlah_mahasiswa_diterima;
        $save->akhir_ts6 = $request->akhir_ts6;
        $save->akhir_ts5 = $request->akhir_ts5;
        $save->akhir_ts4 = $request->akhir_ts4;
        $save->akhir_ts3 = $request->akhir_ts3;
        $save->akhir_ts2 = $request->akhir_ts2;
        $save->akhir_ts1 = $request->akhir_ts1;
        $save->akhir_ts = $request->akhir_ts;
        $save->jumlah_lulusan_akhir_ts = $request->jumlah_lulusan_akhir_ts;
        $save->ratarata_masa_studi = $request->ratarata_masa_studi;
        $save->jumlah_mahasiswa_aktif = $request->jumlah_mahasiswa_aktif;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel92(Request $request, $id)
    {

        Tabel92::where('id', $id)->update([    
            'tahun_masuk' => $request->tahun_masuk,
            'jumlah_mahasiswa_diterima' => $request->jumlah_mahasiswa_diterima,
            'akhir_ts6' => $request->akhir_ts6,
            'akhir_ts5' => $request->akhir_ts5,
            'akhir_ts4' => $request->akhir_ts4,
            'akhir_ts3' => $request->akhir_ts3,
            'akhir_ts2' => $request->akhir_ts2,
            'akhir_ts1' => $request->akhir_ts1,
            'akhir_ts' => $request->akhir_ts,
            'jumlah_lulusan_akhir_ts' => $request->jumlah_lulusan_akhir_ts,
            'ratarata_masa_studi' => $request->ratarata_masa_studi,
            'jumlah_mahasiswa_aktif' => $request->jumlah_mahasiswa_aktif,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel92($id)
    {
        $tabel92 = Tabel92::find($id);
        Tabel92::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel93()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel93 = Tabel93::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.infokom.tabel93', compact('tabel93', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel93(Request $request)
    {
        $save = new Tabel93;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->jenis_kemampuan = $request->jenis_kemampuan;
        $save->sangat_baik = $request->sangat_baik;
        $save->baik = $request->baik;
        $save->cukup = $request->cukup;
        $save->kurang = $request->kurang;
        $save->rencana_tindak_lanjut = $request->rencana_tindak_lanjut;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel93(Request $request, $id)
    {

        Tabel93::where('id', $id)->update([    
            'jenis_kemampuan' => $request->jenis_kemampuan,
            'sangat_baik' => $request->sangat_baik,
            'baik' => $request->baik,
            'cukup' => $request->cukup,
            'kurang' => $request->kurang,
            'rencana_tindak_lanjut' => $request->rencana_tindak_lanjut,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel93($id)
    {
        $tabel93 = Tabel93::find($id);
        Tabel93::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel94()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel94 = Tabel94::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.infokom.tabel94', compact('tabel94', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel94(Request $request)
    {
        $save = new Tabel94;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->jumlah_lulusan_terlacak = $request->jumlah_lulusan_terlacak;
        $save->ratarata_waktu_tunggu = $request->ratarata_waktu_tunggu;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel94(Request $request, $id)
    {

        Tabel94::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'jumlah_lulusan_terlacak' => $request->jumlah_lulusan_terlacak,
            'ratarata_waktu_tunggu' => $request->ratarata_waktu_tunggu,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel94($id)
    {
        $tabel94 = Tabel94::find($id);
        Tabel94::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel95()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel95 = Tabel95::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.infokom.tabel95', compact('tabel95', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel95(Request $request)
    {
        $save = new Tabel95;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->tahun_lulus = $request->tahun_lulus;
        $save->jumlah_lulusan = $request->jumlah_lulusan;
        $save->jumlah_lulusan_terlacak = $request->jumlah_lulusan_terlacak;
        $save->profesi_kerja_infokom = $request->profesi_kerja_infokom;
        $save->profesi_kerja_noninfokom = $request->profesi_kerja_noninfokom;
        $save->internasional = $request->internasional;
        $save->nasional = $request->nasional;
        $save->wirausaha = $request->wirausaha;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel95(Request $request, $id)
    {

        Tabel95::where('id', $id)->update([    
            'tahun_lulus' => $request->tahun_lulus,
            'jumlah_lulusan' => $request->jumlah_lulusan,
            'jumlah_lulusan_terlacak' => $request->jumlah_lulusan_terlacak,
            'profesi_kerja_infokom' => $request->profesi_kerja_infokom,
            'profesi_kerja_noninfokom' => $request->profesi_kerja_noninfokom,
            'internasional' => $request->internasional,
            'nasional' => $request->nasional,
            'wirausaha' => $request->wirausaha,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel95($id)
    {
        $tabel95 = Tabel95::find($id);
        Tabel95::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function tabel96()
    {
        $user = auth()->id();
        $users = Auth::user();
        $prodi = $users->prodi_id;
        $tabel96 = Tabel96::where('prodi_id', $prodi)->where('status', 1)->orderBy('id', 'asc')->get();
        $periode = Periode::where('status_periode', 1)->first();

        return view('users.infokom.tabel96', compact('tabel96', 'user', 'users','prodi', 'periode'));
    }

    public function tambah_tabel96(Request $request)
    {
        $save = new Tabel96;
        $save->prodi_id = $request->prodi_id;
        $save->users_id = $request->users_id;
        $save->nama_dtpr = $request->nama_dtpr;
        $save->jumlah_publikasi_infokom = $request->jumlah_publikasi_infokom;
        $save->jumlah_penelitian_infokom = $request->jumlah_penelitian_infokom;
        $save->jumlah_penelitian_infokom_hki = $request->jumlah_penelitian_infokom_hki;
        $save->jumlah_pkm_infokom = $request->jumlah_pkm_infokom;
        $save->jumlah_pkm_infokom_hki = $request->jumlah_pkm_infokom_hki;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function edit_tabel96(Request $request, $id)
    {

        Tabel96::where('id', $id)->update([    
            'nama_dtpr' => $request->nama_dtpr,
            'jumlah_publikasi_infokom' => $request->jumlah_publikasi_infokom,
            'jumlah_penelitian_infokom' => $request->jumlah_penelitian_infokom,
            'jumlah_penelitian_infokom_hki' => $request->jumlah_penelitian_infokom_hki,
            'jumlah_pkm_infokom' => $request->jumlah_pkm_infokom,
            'jumlah_pkm_infokom_hki' => $request->jumlah_pkm_infokom_hki,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function hapus_tabel96($id)
    {
        $tabel96 = Tabel96::find($id);
        Tabel96::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

}
