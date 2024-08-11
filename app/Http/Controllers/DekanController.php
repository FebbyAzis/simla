<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class DekanController extends Controller
{
    public function dashboard_dekan()   
    {
        $user = Auth::user();
        $prodi = $user->prodi_id;
        // dd($prodi);
        $users1 = [1, 2, 4];
        $users = Tabel8::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users2 = Tabel9::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users3 = Tabel9::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users4 = Tabel12::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users5 = Tabel13::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users6 = Tabel13::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users7 = Tabel14::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users8 = Tabel14::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users9 = Tabel15::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users10 = Tabel15::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users11 = Tabel15::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users12 = Tabel16::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users13 = Tabel16::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users14 = Tabel16::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users15 = Tabel20::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users16 = Tabel20::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users17 = Tabel20::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users18 = Tabel21::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users19 = Tabel21::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users20 = Tabel21::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users21 = Tabel22::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users22 = Tabel22::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23 = Tabel22::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users24 = Tabel23::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users25 = Tabel23::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users26 = Tabel23::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users27 = Tabel23b::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users28 = Tabel23b::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users29 = Tabel23b::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel91a = Tabel91::where('prodi_id', 5)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel91b = Tabel91::where('prodi_id', 6)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel91c = Tabel91::where('prodi_id', 7)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel91d = Tabel91::where('prodi_id', 8)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel91e = Tabel91::where('prodi_id', 12)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel92a = Tabel92::where('prodi_id', 5)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel92b = Tabel92::where('prodi_id', 6)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel92c = Tabel92::where('prodi_id', 7)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel92d = Tabel92::where('prodi_id', 8)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel92e = Tabel92::where('prodi_id', 12)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel93a = Tabel93::where('prodi_id', 5)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel93b = Tabel93::where('prodi_id', 6)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel93c = Tabel93::where('prodi_id', 7)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel93d = Tabel93::where('prodi_id', 8)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel93e = Tabel93::where('prodi_id', 12)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel94a = Tabel94::where('prodi_id', 5)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel94b = Tabel94::where('prodi_id', 6)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel94c = Tabel94::where('prodi_id', 7)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel94d = Tabel94::where('prodi_id', 8)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel94e = Tabel94::where('prodi_id', 12)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel95a = Tabel95::where('prodi_id', 5)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel95b = Tabel95::where('prodi_id', 6)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel95c = Tabel95::where('prodi_id', 7)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel95d = Tabel95::where('prodi_id', 8)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel95e = Tabel95::where('prodi_id', 12)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel96a = Tabel96::where('prodi_id', 5)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel96b = Tabel96::where('prodi_id', 6)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel96c = Tabel96::where('prodi_id', 7)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel96d = Tabel96::where('prodi_id', 8)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $tabel96e = Tabel96::where('prodi_id', 12)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        return view('dekan.dashboard', compact('users', 'users1', 'users2', 'users3', 'users4', 'users5', 'users6', 'users7', 'users8', 'users9', 'users10'
        , 'users11', 'users12', 'users13', 'users14', 'users15', 'users16', 'users17', 'users18', 'users19', 'users20', 'users21', 'users22', 'users23'
        , 'users24', 'users25', 'users26', 'users27', 'users28', 'users29', 'tabel91a', 'tabel91b', 'tabel91c', 'tabel91d', 'tabel91e'
        , 'tabel92a', 'tabel92b', 'tabel92c', 'tabel92d', 'tabel92e', 'tabel93a', 'tabel93b', 'tabel93c', 'tabel93d', 'tabel93e'
        , 'tabel94a', 'tabel94b', 'tabel94c', 'tabel94d', 'tabel94e', 'tabel95a', 'tabel95b', 'tabel95c', 'tabel95d', 'tabel95e'
        , 'tabel96a', 'tabel96b', 'tabel96c', 'tabel96d', 'tabel96e', 'user', 'prodi'));
    }

    public function prodi_akuntansi()
    {
        $users = Tabel9::where('prodi_id', 2)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        $users21 = Tabel21::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users22 = Tabel22::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23 = Tabel23::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23b = Tabel23b::where('prodi_id', 2)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');

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

        $users1 = Tabel13::where('prodi_id', 2)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

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

        $users2 = Tabel14::where('prodi_id', 2)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

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

        $users3 = Tabel15::where('prodi_id', 2)->where('status', 1)->orderBy('id', 'desc')->paginate(5);

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

        $users4 = Tabel16::where('prodi_id', 2)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

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

        $users5 = Tabel20::where('prodi_id', 2)->where('status', 1)->orderBy('id', 'desc')->paginate(5);

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

        return view('dekan.lamemba.prodi_ak', compact('users', 'users1', 'data', 'data1', 'users2', 'data2', 'users3', 'data3'
        , 'users4', 'data4', 'users5', 'data5', 'users21', 'users22', 'users23', 'users23b'));
    }

    public function tabel9_akuntansi()
    {
        $tabel9 = Tabel9::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel9', compact('tabel9'));
    }

    public function tabel13_akuntansi()
    {
        $tabel13 = Tabel13::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel13', compact('tabel13'));
    }

    public function tabel14_akuntansi()
    {
        $tabel14 = Tabel14::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel14', compact('tabel14'));
    }

    public function tabel15_akuntansi()
    {
        $tabel15 = Tabel15::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel15', compact('tabel15'));
    }

    public function tabel16_akuntansi()
    {
        $tabel16 = Tabel16::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel16', compact('tabel16'));
    }

    public function tabel20_akuntansi()
    {
        $tabel20 = Tabel20::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel20', compact('tabel20'));
    }

    public function tabel21_akuntansi()
    {
        $tabel21 = Tabel21::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel21', compact('tabel21'));
    }

    public function tabel22_akuntansi()
    {
        $tabel22 = Tabel22::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel22', compact('tabel22'));
    }

    public function tabel23_akuntansi()
    {
        $tabel23 = Tabel23::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel23', compact('tabel23'));
    }

    public function tabel23b_akuntansi()
    {
        $tabel23b = Tabel23b::where('prodi_id', 2)->where('status', 1)->get();
        return view('dekan.lamemba.ak.tabel23b', compact('tabel23b'));
    }

    public function prodi_manajemen()
    {
        $users = Tabel9::where('prodi_id', 4)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        $users21 = Tabel21::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users22 = Tabel22::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23 = Tabel23::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23b = Tabel23b::where('prodi_id', 4)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');

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

        $users1 = Tabel13::where('prodi_id', 4)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

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

        $users2 = Tabel14::where('prodi_id', 4)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

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

        $users3 = Tabel15::where('prodi_id', 4)->where('status', 1)->orderBy('id', 'desc')->paginate(5);

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

        $users4 = Tabel16::where('prodi_id', 4)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

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

        $users5 = Tabel20::where('prodi_id', 4)->where('status', 1)->orderBy('id', 'desc')->paginate(5);

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

        return view('dekan.lamemba.prodi_mnj', compact('users', 'users1', 'data', 'data1', 'users2', 'data2', 'users3', 'data3'
        , 'users4', 'data4', 'users5', 'data5', 'users21', 'users22', 'users23' , 'users23b'));
    }

    public function tabel9_manajemen()
    {
        $tabel9 = Tabel9::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel9', compact('tabel9'));
    }

    public function tabel13_manajemen()
    {
        $tabel13 = Tabel13::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel13', compact('tabel13'));
    }

    public function tabel14_manajemen()
    {
        $tabel14 = Tabel14::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel14', compact('tabel14'));
    }

    public function tabel15_manajemen()
    {
        $tabel15 = Tabel15::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel15', compact('tabel15'));
    }

    public function tabel16_manajemen()
    {
        $tabel16 = Tabel16::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel16', compact('tabel16'));
    }

    public function tabel20_manajemen()
    {
        $tabel20 = Tabel20::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel20', compact('tabel20'));
    }

    public function tabel21_manajemen()
    {
        $tabel21 = Tabel21::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel21', compact('tabel21'));
    }

    public function tabel22_manajemen()
    {
        $tabel22 = Tabel22::where('prodi_id', 4)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel22', compact('tabel22'));
    }

    public function tabel23_manajemen()
    {
        $tabel23 = Tabel23::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel23', compact('tabel23'));
    }

    public function tabel23b_manajemen()
    {
        $tabel23b = Tabel23b::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mnj.tabel23b', compact('tabel23b'));
    }

    public function prodi_manajemen_bisnis()
    {
        $users = Tabel8::where('prodi_id', 1)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        $users21 = Tabel21::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users22 = Tabel22::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23 = Tabel23::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');
        $users23b = Tabel23b::where('prodi_id', 1)->where('status', 1)->selectRaw('prodi_id, count(*) as total')->groupBy('prodi_id')->pluck('total', 'prodi_id');

        $data = [
            'labels' => $users->pluck('tahun_masuk'),
            'datasets' => [
                [
                    'label' => 'Jumlah Lulusan Akhir TS-4',
                    'backgroundColor' => '#f87979',
                    'data' => $users->pluck('akhir_ts4')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-3',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users->pluck('akhir_ts3')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-2',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users->pluck('akhir_ts2')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS-1',
                    'backgroundColor' => '#6495ED',
                    'data' => $users->pluck('akhir_ts1')
                ],
                [
                    'label' => 'Jumlah Lulusan Akhir TS',
                    'backgroundColor' => '#FF8C00',
                    'data' => $users->pluck('akhir_ts')
                ]
            ]
        ];

        $users1 = Tabel12::where('prodi_id', 1)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

        $data1 = [
            'labels' => $users1->pluck('tahun_lulus'),
            'datasets' => [
                [
                    'label' => 'WT < 3 Bulan',
                    'backgroundColor' => '#f87979',
                    'data' => $users1->pluck('wt3bln')
                ],
                [
                    'label' => '3 ≤ WT ≤ 6 bulan',
                    'backgroundColor' => '#00FFFF',
                    'data' => $users1->pluck('wt3wt_6bln')
                ],
                [
                    'label' => 'WT > 6 Bulan',
                    'backgroundColor' => '#8A2BE2',
                    'data' => $users1->pluck('wt3bln')
                ],
            ]
        ];

        $users3 = Tabel15::where('prodi_id', 1)->where('status', 1)->orderBy('id', 'desc')->paginate(5);

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

        $users4 = Tabel16::where('prodi_id', 1)->where('status', 1)->orderBy('id', 'desc')->paginate(3);

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

        $users5 = Tabel20::where('prodi_id', 1)->where('status', 1)->orderBy('id', 'desc')->paginate(5);

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

        return view('dekan.lamemba.prodi_mb', compact('users', 'users1', 'data', 'data1', 'users3', 'data3'
        , 'users4', 'data4', 'users5', 'data5', 'users21', 'users22', 'users23' , 'users23b'));
    }

    public function tabel8_manajemen_bisnis()
    {
        $tabel8 = Tabel8::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel8', compact('tabel8'));
    }

    public function tabel12_manajemen_bisnis()
    {
        $tabel12 = Tabel12::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel12', compact('tabel12'));
    }

    public function tabel14_manajemen_bisnis()
    {
        $tabel14 = Tabel14::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel14', compact('tabel14'));
    }

    public function tabel15_manajemen_bisnis()
    {
        $tabel15 = Tabel15::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel15', compact('tabel15'));
    }

    public function tabel16_manajemen_bisnis()
    {
        $tabel16 = Tabel16::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel16', compact('tabel16'));
    }

    public function tabel20_manajemen_bisnis()
    {
        $tabel20 = Tabel20::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel20', compact('tabel20'));
    }

    public function tabel21_manajemen_bisnis()
    {
        $tabel21 = Tabel21::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel21', compact('tabel21'));
    }

    public function tabel22_manajemen_bisnis()
    {
        $tabel22 = Tabel22::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel22', compact('tabel22'));
    }

    public function tabel23_manajemen_bisnis()
    {
        $tabel23 = Tabel23::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel23', compact('tabel23'));
    }

    public function tabel23b_manajemen_bisnis()
    {
        $tabel23b = Tabel23b::where('prodi_id', 1)->where('status', 1)->get();
        return view('dekan.lamemba.mb.tabel23b', compact('tabel23b'));
    }

    public function prodi_teknik_informatika()
    {
        $users91 = Tabel91::where('prodi_id', 8)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users92 = Tabel92::where('prodi_id', 8)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
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

        $users93 = Tabel93::where('prodi_id', 8)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users94 = Tabel94::where('prodi_id', 8)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users95 = Tabel95::where('prodi_id', 8)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users96 = Tabel96::where('prodi_id', 8)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        return view('dekan.infokom.prodi_ti', compact('users91', 'data91', 'users92', 'data92', 'users93', 'data93'
        , 'users94', 'data94', 'users95', 'data95', 'users96', 'data96'));
    }

    public function prodi_desain_komunikasi_visual()
    {
        $users91 = Tabel91::where('prodi_id', 7)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users92 = Tabel92::where('prodi_id', 7)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
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

        $users93 = Tabel93::where('prodi_id', 7)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users94 = Tabel94::where('prodi_id', 7)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users95 = Tabel95::where('prodi_id', 7)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users96 = Tabel96::where('prodi_id', 7)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        return view('dekan.infokom.prodi_dkv', compact('users91', 'data91', 'users92', 'data92', 'users93', 'data93'
        , 'users94', 'data94', 'users95', 'data95', 'users96', 'data96'));
    }

    public function prodi_sistem_informasi()
    {
        $users91 = Tabel91::where('prodi_id', 6)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users92 = Tabel92::where('prodi_id', 6)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
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

        $users93 = Tabel93::where('prodi_id', 6)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users94 = Tabel94::where('prodi_id', 6)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users95 = Tabel95::where('prodi_id', 6)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users96 = Tabel96::where('prodi_id', 6)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        return view('dekan.infokom.prodi_si', compact('users91', 'data91', 'users92', 'data92', 'users93', 'data93'
        , 'users94', 'data94', 'users95', 'data95', 'users96', 'data96'));
    }

    public function prodi_manajemen_informatika()
    {
        $users91 = Tabel91::where('prodi_id', 5)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users92 = Tabel92::where('prodi_id', 5)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
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

        $users93 = Tabel93::where('prodi_id', 5)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users94 = Tabel94::where('prodi_id', 5)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users95 = Tabel95::where('prodi_id', 5)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users96 = Tabel96::where('prodi_id', 5)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        return view('dekan.infokom.prodi_mi', compact('users91', 'data91', 'users92', 'data92', 'users93', 'data93'
        , 'users94', 'data94', 'users95', 'data95', 'users96', 'data96'));
    }

    public function prodi_komputerisasi_akuntansi()
    {
        $users91 = Tabel91::where('prodi_id', 12)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users92 = Tabel92::where('prodi_id', 12)->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        
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

        $users93 = Tabel93::where('prodi_id', 12)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users94 = Tabel94::where('prodi_id', 12)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users95 = Tabel95::where('prodi_id', 12)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        $users96 = Tabel96::where('prodi_id', 12)->where('status', 1)->orderBy('id', 'desc')->paginate(5);
        
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

        return view('dekan.infokom.prodi_ka', compact('users91', 'data91', 'users92', 'data92', 'users93', 'data93'
        , 'users94', 'data94', 'users95', 'data95', 'users96', 'data96'));
    }

    public function tabel91_sistem_informasi()
    {
        $tabel91 = Tabel91::where('prodi_id', 6)->where('status', 1)->get();
        return view('dekan.infokom.si.tabel91', compact('tabel91'));
    }

    public function tabel92_sistem_informasi()
    {
        $tabel92 = Tabel92::where('prodi_id', 6)->where('status', 1)->get();
        return view('dekan.infokom.si.tabel92', compact('tabel92'));
    }

    public function tabel93_sistem_informasi()
    {
        $tabel93 = Tabel93::where('prodi_id', 6)->where('status', 1)->get();
        return view('dekan.infokom.si.tabel93', compact('tabel93'));
    }

    public function tabel94_sistem_informasi()
    {
        $tabel94 = Tabel94::where('prodi_id', 6)->where('status', 1)->get();
        return view('dekan.infokom.si.tabel94', compact('tabel94'));
    }

    public function tabel95_sistem_informasi()
    {
        $tabel95 = Tabel95::where('prodi_id', 6)->where('status', 1)->get();
        return view('dekan.infokom.si.tabel95', compact('tabel95'));
    }

    public function tabel96_sistem_informasi()
    {
        $tabel96 = Tabel96::where('prodi_id', 6)->where('status', 1)->get();
        return view('dekan.infokom.si.tabel96', compact('tabel96'));
    }

    public function tabel91_teknik_informatika()
    {
        $tabel91 = Tabel91::where('prodi_id', 8)->where('status', 1)->get();
        return view('dekan.infokom.ti.tabel91', compact('tabel91'));
    }

    public function tabel92_teknik_informatika()
    {
        $tabel92 = Tabel92::where('prodi_id', 8)->where('status', 1)->get();
        return view('dekan.infokom.ti.tabel92', compact('tabel92'));
    }

    public function tabel93_teknik_informatika()
    {
        $tabel93 = Tabel93::where('prodi_id', 8)->where('status', 1)->get();
        return view('dekan.infokom.ti.tabel93', compact('tabel93'));
    }

    public function tabel94_teknik_informatika()
    {
        $tabel94 = Tabel94::where('prodi_id', 8)->where('status', 1)->get();
        return view('dekan.infokom.ti.tabel94', compact('tabel94'));
    }

    public function tabel95_teknik_informatika()
    {
        $tabel95 = Tabel95::where('prodi_id', 8)->where('status', 1)->get();
        return view('dekan.infokom.ti.tabel95', compact('tabel95'));
    }

    public function tabel96_teknik_informatika()
    {
        $tabel96 = Tabel96::where('prodi_id', 8)->where('status', 1)->get();
        return view('dekan.infokom.ti.tabel96', compact('tabel96'));
    }

    public function tabel91_desain_komunikasi_visual()
    {
        $tabel91 = Tabel91::where('prodi_id', 7)->where('status', 1)->get();
        return view('dekan.infokom.dkv.tabel91', compact('tabel91'));
    }

    public function tabel92_desain_komunikasi_visual()
    {
        $tabel92 = Tabel92::where('prodi_id', 7)->where('status', 1)->get();
        return view('dekan.infokom.dkv.tabel92', compact('tabel92'));
    }

    public function tabel93_desain_komunikasi_visual()
    {
        $tabel93 = Tabel93::where('prodi_id', 7)->where('status', 1)->get();
        return view('dekan.infokom.dkv.tabel93', compact('tabel93'));
    }

    public function tabel94_desain_komunikasi_visual()
    {
        $tabel94 = Tabel94::where('prodi_id', 7)->where('status', 1)->get();
        return view('dekan.infokom.dkv.tabel94', compact('tabel94'));
    }

    public function tabel95_desain_komunikasi_visual()
    {
        $tabel95 = Tabel95::where('prodi_id', 7)->where('status', 1)->get();
        return view('dekan.infokom.dkv.tabel95', compact('tabel95'));
    }

    public function tabel96_desain_komunikasi_visual()
    {
        $tabel96 = Tabel96::where('prodi_id', 7)->where('status', 1)->get();
        return view('dekan.infokom.dkv.tabel96', compact('tabel96'));
    }

    public function tabel91_manajemen_informatika()
    {
        $tabel91 = Tabel91::where('prodi_id', 5)->where('status', 1)->get();
        return view('dekan.infokom.mi.tabel91', compact('tabel91'));
    }

    public function tabel92_manajemen_informatika()
    {
        $tabel92 = Tabel92::where('prodi_id', 5)->where('status', 1)->get();
        return view('dekan.infokom.mi.tabel92', compact('tabel92'));
    }

    public function tabel93_manajemen_informatika()
    {
        $tabel93 = Tabel93::where('prodi_id', 5)->where('status', 1)->get();
        return view('dekan.infokom.mi.tabel93', compact('tabel93'));
    }

    public function tabel94_manajemen_informatika()
    {
        $tabel94 = Tabel94::where('prodi_id', 5)->where('status', 1)->get();
        return view('dekan.infokom.mi.tabel94', compact('tabel94'));
    }

    public function tabel95_manajemen_informatika()
    {
        $tabel95 = Tabel95::where('prodi_id', 5)->where('status', 1)->get();
        return view('dekan.infokom.mi.tabel95', compact('tabel95'));
    }

    public function tabel96_manajemen_informatika()
    {
        $tabel96 = Tabel96::where('prodi_id', 5)->where('status', 1)->get();
        return view('dekan.infokom.mi.tabel96', compact('tabel96'));
    }

    public function tabel91_komputerisasi_akuntansi()
    {
        $tabel91 = Tabel91::where('prodi_id', 12)->where('status', 1)->get();
        return view('dekan.infokom.ka.tabel91', compact('tabel91'));
    }

    public function tabel92_komputerisasi_akuntansi()
    {
        $tabel92 = Tabel92::where('prodi_id', 12)->where('status', 1)->get();
        return view('dekan.infokom.ka.tabel92', compact('tabel92'));
    }

    public function tabel93_komputerisasi_akuntansi()
    {
        $tabel93 = Tabel93::where('prodi_id', 12)->where('status', 1)->get();
        return view('dekan.infokom.ka.tabel93', compact('tabel93'));
    }

    public function tabel94_komputerisasi_akuntansi()
    {
        $tabel94 = Tabel94::where('prodi_id', 12)->where('status', 1)->get();
        return view('dekan.infokom.ka.tabel94', compact('tabel94'));
    }

    public function tabel95_komputerisasi_akuntansi()
    {
        $tabel95 = Tabel95::where('prodi_id', 12)->where('status', 1)->get();
        return view('dekan.infokom.ka.tabel95', compact('tabel95'));
    }

    public function tabel96_komputerisasi_akuntansi()
    {
        $tabel96 = Tabel96::where('prodi_id', 12)->where('status', 1)->get();
        return view('dekan.infokom.ka.tabel96', compact('tabel96'));
    }
}
