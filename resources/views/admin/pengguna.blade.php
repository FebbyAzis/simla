@extends('admin.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Pengguna</h1>
                      <p>SIMLA UCIC</p>
                  </div>
                  <div>

                    <a type="button" class="btn btn-link btn-soft-light text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor">
                            </path>                            
                        </svg>                                                
                        Tambah Pengguna
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
          <h4 class="card-title">Tabel Data Pengguna</h4>
       </div>
    </div>
    <div class="card-body">
       <p>Berikut ini adalah daftar tabel data pengguna yang aktif di SIMLA UCIC.</p>
       <hr class="hr-horizontal mb-3">
        @if (session('Success'))
          <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
            <span><b>Success!</b> {{session('Success')}}</span>
            <button type="button" class="btn-close btn-close-green" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session('SuccessPengguna'))
          <div class="alert alert-left alert-success alert-dismissible fade show mb-3" role="alert">
            <span><b>Success!</b> {{session('SuccessPengguna')}}</span>
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
       <div class="table-responsive">
          <table id="datatable" class="table table-striped" data-toggle="data-table">
            <thead>
              <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Nama Pengguna</th>
                  <th class="text-center">Prodi</th>
                  <th class="text-center">Jabatan</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
              </tr>
          </thead>
         
          <tbody>
              @foreach ($pengguna as $no=>$i)
              <tr>
                  <td class="text-center">{{$no+1}}</td>
                  <td class="text-center">{{$i->name}}</td>
                  
                  @if ($i->prodi_id == 9)
                  <td class="text-center">Belum Terdaftar</td>
                  @else
                  <td class="text-center">({{$i->prodi->program}}) {{$i->prodi->nama_prodi}}</td>   
                  @endif
                  <td class="text-center">{{$i->jabatan}}</td>
                  @if ($i->status == 1)
                  <td class="text-center">
                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="primary" xmlns="http://www.w3.org/2000/svg">                                
                      <path opacity="0.4" d="M16.3405 1.99976H7.67049C4.28049 1.99976 2.00049 4.37976 2.00049 7.91976V16.0898C2.00049 19.6198 4.28049 21.9998 7.67049 21.9998H16.3405C19.7305 21.9998 22.0005 19.6198 22.0005 16.0898V7.91976C22.0005 4.37976 19.7305 1.99976 16.3405 1.99976Z" fill="currentColor">
                        </path>                                
                        <path d="M10.8134 15.248C10.5894 15.248 10.3654 15.163 10.1944 14.992L7.82144 12.619C7.47944 12.277 7.47944 11.723 7.82144 11.382C8.16344 11.04 8.71644 11.039 9.05844 11.381L10.8134 13.136L14.9414 9.00796C15.2834 8.66596 15.8364 8.66596 16.1784 9.00796C16.5204 9.34996 16.5204 9.90396 16.1784 10.246L11.4324 14.992C11.2614 15.163 11.0374 15.248 10.8134 15.248Z" fill="currentColor">
                          </path>                                
                        </svg>                             
                        Aktif</td>
                  @else
                  <td class="text-center">Tidak Aktif</td>
                  @endif
                  <td class="text-center">
                      
                      @if ($i->prodi_id == 9)
                      &nbsp;|&nbsp; <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$i->id}}">Daftarkan</button>  
                      @else
                      &nbsp;|&nbsp; <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{$i->id}}">Edit</button>  
                      @endif
                      
                      <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal1{{$i->id}}">Non-Aktifkan</button> 
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


@foreach ($pengguna as $item)
<!-- Modal -->
<form action="{{url('daftar-pengguna/'. $item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="staticBackdrop2{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Edit Instrumen</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <p>Ubah form dibawah ini untuk mengedit data instrumen.</p>
                  <div class="col-md-12 p-1">
                    <div class="form-group">
                      <label class="form-label" for="exampleInputText1">Nama Pengguna</label>
                      <input type="text" class="form-control" id="exampleInputText1" value="{{$item->name}}" readonly>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="choices-single-default">Prodi</label>
                      <select class="form-select" data-trigger name="prodi_id" id="choices-single-default" required>
                        <option>-</option>
                        @foreach ($prodi as $p)
                        <option value="{{$p->id}}">{{$p->program}}-{{$p->nama_prodi}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="choices-single-default">Jabatan</label>
                    <select class="form-select" data-trigger name="jabatan" id="choices-single-default" required>
                      <option>-</option>
                      <option value="Dekan">Dekan Fakultas</option>
                      <option value="Kaprodi">Kepala Prodi</option>
                      {{-- <option value="Dosen">Dosen</option>
                      <option value="Mahasiswa">Mahasiswa</option> --}}
                    </select>
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


@endsection