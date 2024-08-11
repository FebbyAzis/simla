<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periode;
use App\Models\Prodi;
use App\Models\Users;
use App\Models\Instrumen;

class AdminController extends Controller
{
    public function periodeIndex()
    {
        $periode = Periode::where('status', 1)->orderBy('id', 'desc')->get();
        $aktif = Periode::where('status_periode', 1)->first();

        return view('admin.periode', compact('periode', 'aktif'));
    }

    public function periodeTambah(Request $request)
    {
        $save = new Periode;
        $save->tahun = $request->tahun;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function hapusPeriode($id)
    {
        $periode = Periode::find($id);
        Periode::where('id', $id)->update(['status' => 0]);
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function periodeAktif($id)
    {
        $periode = Periode::find($id);
       
        Periode::where('status_periode', 1)->update(['status_periode' => 0]);
        Periode::where('id', $id)->update(['status_periode' => 1]);
        return redirect()->back()->with('Succes', 'Periode telah diperbarui!');
    }

    public function instrumenIndex()
    {
        $instrumen = Instrumen::where('status', 1)->orderBy('id', 'desc')->get();

        return view('admin.instrumen', compact('instrumen'));
    }

    public function instrumenTambah(Request $request)
    {
        $save = new Instrumen;
        $save->nama_instrumen = $request->nama_instrumen;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function hapusInstrumen($id)
    {
        $instrumen = Instrumen::find($id);
        Instrumen::where('id', $id)->delete();
        return redirect()->back()->with('Successs', 'Data berhasil dihapus!');
    }

    public function editInstrumen(Request $request, $id)
    {

        Instrumen::where('id', $id)->update([    
            'nama_instrumen' => $request->nama_instrumen,
        ]);

        return redirect()->back()->with('Successss', 'Data berhasil diubah');
    }

    public function prodiIndex()
    {
        $prodi = Prodi::where('status', 1)->orderBy('id', 'desc')->get();
        $instrumen = Instrumen::where('status', 1)->get();
        $SI = Users::where('status', 1)->where('prodi_id', 6)->count();
        $TI = Users::where('status', 1)->where('prodi_id', 8)->count();
        $DKV = Users::where('status', 1)->where('prodi_id', 7)->count();
        $MI = Users::where('status', 1)->where('prodi_id', 5)->count();
        $M = Users::where('status', 1)->where('prodi_id', 4)->count();
        $MKaryawan = Users::where('status', 1)->where('prodi_id', 3)->count();
        $A = Users::where('status', 1)->where('prodi_id', 2)->count();
        $MB = Users::where('status', 1)->where('prodi_id', 1)->count();

        return view('admin.prodi', compact('prodi', 'instrumen', 'SI', 'TI', 'DKV', 'MI', 'M', 'MKaryawan', 'A', 'MB'));
    }

    public function tambahProdi(Request $request)
    {

        $save = new Prodi;
        $save->instrumen_id = $request->instrumen_id;
        $save->nama_prodi = $request->nama_prodi;
        $save->program = $request->program;
        $save->fakultas = $request->fakultas;
        $save->save();
        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');

        return redirect()->back()->with('Success', 'Data berhasil ditambahkan!');
    }

    public function penggunaIndex()
    {
        $pengguna = Users::whereIn('role', [2, 3])->where('status', 1)->orderBy('id', 'desc')->get();
        $prodi = Prodi::all();
        // dd($pengguna);
        return view('admin.pengguna', compact('pengguna', 'prodi'));
    }

    public function daftarPengguna(Request $request, $id)
    {

        Users::where('id', $id)->update([    
            'prodi_id' => $request->prodi_id,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->back()->with('SuccessPengguna', 'Pengguna berhasil ditambahkan!');
    }

    
}
