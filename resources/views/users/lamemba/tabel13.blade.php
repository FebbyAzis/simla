@extends('users.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Waktu Tunggu Lulusan S1</h1>
                      <p>Waktu Tunggu Lulusan (Khusus Program Sarjana)</p>
                  </div>
                  <div>

                    <a type="button" class="btn btn-link btn-soft-light text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor">
                            </path>                            
                        </svg>                                                
                        Tambah Data
                    </a>

                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Launch static backdrop modal
                        </button> --}}
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="iq-header-img">
      <img src="{{asset('images/dashboard/top-header.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
      <img src="{{asset('images/dashboard/top-header1.png')}}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
      <img src="{{asset('images/dashboard/top-header2.png')}}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
      <img src="{{asset('images/dashboard/top-header3.png')}}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
      <img src="{{asset('images/dashboard/top-header4.png')}}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
      <img src="{{asset('images/dashboard/top-header5.png')}}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
  </div>
</div>          <!-- Nav Header Component End -->
<!--Nav End-->
</div>

<div class="container-fluid content-inner mt-n5 py-0">
  
<div class="row">
<div class="col-md-12 col-lg-12">
  <div class="card" data-aos="fade-up" data-aos-delay="900">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Tabel Data Waktu Tunggu Lulusan (Khusus Program Sarjana)</h4>
       </div>
    </div>
    <div class="card-body">
       <p>Berikut adalah beberapa data Waktu Tunggu Lulusan (Khusus Program Sarjana) yang tersimpan dalam SIMLA | UCIC.</p>
       <hr class="hr-horizontal mb-3">
        @if (session('Success'))
          <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
            <span><b>Success!</b> {{session('Success')}}</span>
            <button type="button" class="btn-close btn-close-green" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session('Successs'))
        <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
          <span><b>Success!</b> {{session('Successs')}}</span>
          <button type="button" class="btn-close btn-close-green" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session('Successss'))
      <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
        <span><b>Success!</b> {{session('Successss')}}</span>
        <button type="button" class="btn-close btn-close-green" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
       <div class="table-info">
          <table id="datatable" class="table table-striped" data-toggle="data-table">
            <thead>
              <tr class="table-info">
                  <th class="text-center p-5" rowspan="2">Tahun Lulus</th>
                  <th class="text-center p-5" rowspan="2">Jumlah Lulusan</th>
                  <th class="text-center p-5" rowspan="2">Jumlah Lulusan<br>yang Dipesan<br>Sebelum Lulus</th>
                  <th class="text-center p-5" rowspan="2">Tahun Perolehan</th>
                  <th class="text-center" colspan="3">Jumlah Lulusan Terlacak dengan Waktu Tunggu<br>Mendapatkan Pekerjaan</th>
                  <th class="text-center p-5" rowspan="2">Standar Pendidikan<br>Tinggi yang ditetapkan<br>oleh Perguruan Tinggi</th>
                  <th class="text-center p-5" rowspan="2">Action</th>
              </tr>
              <tr class="table-primary">
                <th class="text-center">WT < 6 Bulan</th>
                <th class="text-center">6 ≤ WT ≤ 18<br>Bulan</th>
                <th class="text-center">WT > 18 Bulan</th>
              
              </tr>
              <tr class="table-primary">
                <td class="text-center">0</td>
                <td class="text-center">1</td>
                <td class="text-center">2</td>
                <td class="text-center">3</td>
                <td class="text-center">4</td>
                <td class="text-center">5</td>
                <td class="text-center">6</td>
                <td class="text-center">7</td>
                <td class="text-center">8</td>
            </tr>
          </thead>
         
          <tbody>
            
            @foreach ($tabel13 as $item)
            <tr>
                
                <td class="text-center">{{$item->tahun_lulus}}</td>
                <td class="text-center">{{$item->jumlah_lulusan}}</td>
                <td class="text-center">{{$item->jumlah_lulusan_terlacak}}</td>
                <td class="text-center">{{$item->jumlah_lulusan_dipesan}}</td>
                <td class="text-center">{{$item->wt6bln}}</td>
                <td class="text-center">{{$item->wt6wt_18bln}}</td>
                <td class="text-center">{{$item->wt18bln}}</td>
                <td class="text-center">{{$item->standar_pendidikan_perguruan_tinggi}}</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$item->id}}">EDIT</button> &nbsp;|&nbsp;
                  <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop3{{$item->id}}">HAPUS</button>   
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
       </div>
    </div>
 </div>
</div>


</div>
</div>

<form action="{{url('/tambah-waktu-tunggu-lulusan-s1')}}" method="POST">
  @csrf
  @method('POST')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <p>Isi form dibawah ini untuk menambahkan data Waktu Tunggu Lulusan (Khusus Program Sarjana).</p>
              <div class="col-md-12 p-1">
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Tahun Lulus</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="tahun_lulus" placeholder="..." required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Jumlah Lulusan</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="jumlah_lulusan" placeholder="..." required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Jumlah Lulusan yang Terlacak</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="jumlah_lulusan_terlacak" placeholder="..." required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Jumlah Lulusan yang Dipesan Sebelum Lulus</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="jumlah_lulusan_dipesan" placeholder="..." required>
                </div>
                <p>Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan :</p>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">WT < 6 Bulan</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="wt6bln" placeholder="..." required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">6 ≤ WT ≤ 18 bulan</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="wt6wt_18bln" placeholder="..." required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">WT > 18 Bulan</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="wt18bln" placeholder="..." required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Standar Pendidikan Tinggi yang ditetapkan oleh Perguruan Tinggi</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="standar_pendidikan_perguruan_tinggi" placeholder="..." required>
                </div>
                <input type="hidden" value="{{$user}}" name="users_id">
                <input type="hidden" value="{{$prodi}}" name="prodi_id">
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
      </div>
  </div>
  </div>
</form>

@foreach ($tabel13 as $item)
<!-- Modal -->
<form action="{{url('edit-waktu-tunggu-lulusan-s1/'. $item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="staticBackdrop2{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <p>Ubah form dibawah ini untuk mengedit data Waktu Tunggu Lulusan (Khusus Program Sarjana).</p>
                  <div class="col-md-12 p-1">
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Tahun Lulus</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="tahun_lulus" value="{{$item->tahun_lulus}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Jumlah Lulusan</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="jumlah_lulusan" value="{{$item->jumlah_lulusan}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Jumlah Lulusan yang Terlacak</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="jumlah_lulusan_terlacak" value="{{$item->jumlah_lulusan_terlacak}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Jumlah Lulusan yang Dipesan Sebelum Lulus</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="jumlah_lulusan_dipesan" value="{{$item->jumlah_lulusan_dipesan}}" placeholder="..." required>
                    </div>
                    <p>Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan :</p>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">WT < 6 Bulan</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="wt6bln" value="{{$item->wt6bln}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">6 ≤ WT ≤ 18 bulan</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="wt6wt_18bln" value="{{$item->wt6wt_18bln}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">WT > 18 Bulan</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="wt18bln" value="{{$item->wt18bln}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Standar Pendidikan Tinggi yang ditetapkan oleh Perguruan Tinggi</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="standar_pendidikan_perguruan_tinggi" value="{{$item->standar_pendidikan_perguruan_tinggi}}" placeholder="..." required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </div>
      </div>
      </div>
  </form>
  @endforeach

  @foreach ($tabel13 as $item)
<!-- Modal -->
<form action="{{url('hapus-waktu-tunggu-lulusan-s1/'. $item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="staticBackdrop3{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <p>Apakah anda yakin ingin menghapus Waktu Tunggu Lulusan (Khusus Program Sarjana)?</p>
                 
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                  <button type="submit" class="btn btn-primary">Ya</button>
              </div>
          </div>
      </div>
      </div>
  </form>
  @endforeach
@endsection