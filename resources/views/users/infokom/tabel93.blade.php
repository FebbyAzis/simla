@extends('users.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Kepuasan Pengguna Lulusan</h1>
                      <p>SIMLA | UCIC</p>
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
          <h4 class="card-title">Tabel Data Kepuasan Pengguna Lulusan</h4>
       </div>
    </div>
    <div class="card-body">
       <p>Berikut adalah beberapa data Kepuasan Pengguna Lulusan yang tersimpan dalam SIMLA | UCIC.</p>
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
                  <th class="text-center p-5" rowspan="2">No</th>
                  <th class="text-center p-5" rowspan="2">Jenis Kemampuan</th>
                  <th class="text-center" colspan="4">Tingkat Kepuasan Pengguna (%)</th>
                  <th class="text-center p-5" rowspan="2">Rencana Tindak Lanjut oleh<br>UPPS/PS</th>
                  <th class="text-center p-5" rowspan="2">Action</th>
              </tr>
              <tr class="table-primary">
                <th class="text-center">Sangat Baik</th>
                <th class="text-center">Baik</th>
                <th class="text-center">Cukup</th>
                <th class="text-center">Kurang</th>
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
            </tr>
          </thead>
         
          <tbody>
            
            @foreach ($tabel93 as $no=>$item)
            <tr>
                
                <td class="text-center">{{$no+1}}</td>
                <td class="text-center">{{$item->jenis_kemampuan}}</td>
                <td class="text-center">{{$item->sangat_baik}}%</td>
                <td class="text-center">{{$item->baik}}%</td>
                <td class="text-center">{{$item->cukup}}%</td>
                <td class="text-center">{{$item->kurang}}%</td>
                <td class="text-center">{{$item->rencana_tindak_lanjut}}</td>
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

<form action="{{url('/tambah-kepuasan-pengguna-lulusan')}}" method="POST">
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
              <p>Isi form dibawah ini untuk menambahkan data Kepuasan Pengguna Lulusan.</p>
              <div class="col-md-12 p-1">
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Jenis Kemampuan</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="jenis_kemampuan" placeholder="..." required>
                </div>
                <p>Tingkat Kepuasan Pengguna (%) :</p>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Sangat Baik</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="sangat_baik" placeholder="Masukan nominal angka" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Baik</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="baik" placeholder="Masukan nominal angka" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Cukup</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="cukup" placeholder="Masukan nominal angka" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Kurang</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="kurang" placeholder="Masukan nominal angka" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="exampleInputText1">Rencana Tindak Lanjut oleh UPPS/PS</label>
                  <input type="text" class="form-control" id="exampleInputText1" name="rencana_tindak_lanjut" placeholder="..." required>
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

@foreach ($tabel93 as $item)
<!-- Modal -->
<form action="{{url('edit-kepuasan-pengguna-lulusan/'. $item->id)}}" method="POST">
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
                  <p>Ubah form dibawah ini untuk mengedit data Kepuasan Pengguna Lulusan.</p>
                  <div class="col-md-12 p-1">
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Jenis Kemampuan</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="jenis_kemampuan" value="{{$item->jenis_kemampuan}}" placeholder="..." required>
                    </div>
                    <p>Tingkat Kepuasan Pengguna (%) :</p>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Sangat Baik</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="sangat_baik" value="{{$item->sangat_baik}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Baik</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="baik" value="{{$item->baik}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Cukup</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="cukup" value="{{$item->cukup}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Kurang</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="kurang" value="{{$item->kurang}}" placeholder="..." required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Rencana Tindak Lanjut oleh UPPS/PS</label>
                      <input type="text" class="form-control" id="exampleInputText1" name="rencana_tindak_lanjut" value="{{$item->rencana_tindak_lanjut}}" placeholder="..." required>
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

  @foreach ($tabel93 as $item)
<!-- Modal -->
<form action="{{url('hapus-kepuasan-pengguna-lulusan/'. $item->id)}}" method="POST">
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
                  <p>Apakah anda yakin ingin menghapus Kepuasan Pengguna Lulusan?</p>
                 
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