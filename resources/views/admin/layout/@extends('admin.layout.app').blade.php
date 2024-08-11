@extends('admin.layout.app')
@section('content')
<div class="container-fluid">
    {{-- @if (session('Success'))
    <div class="mb-3 alert alert-left alert-success alert-dismissible fade show" role="alert">
        <span><b>Success</b> </span>
        <button type="button" class="btn-danger btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
    </div>
    @endif --}}
    @if (session('Success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('Success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (session('Successs'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('Successs')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    @if (session('Successss'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('Successss')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal2"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah pengguna</button>
    </div>
    <div class="col-md-12">
        <p class="mb-4">Berikut ini adalah daftar tabel data pengguna yang aktif di SIMLA UCIC.
        </p>
    </div>
    <!-- Content Row -->
    {{-- @dd($aktif) --}}
    <div class="row">
        
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengguna</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Pengguna</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Prodi</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                @foreach ($pengguna as $no=>$i)
                                <tr>
                                    <td class="text-center">{{$no+1}}</td>
                                    <td class="text-center">{{$i->name}}</td>
                                    <td class="text-center">{{$i->jabatan}}</td>
                                    @if ($i->prodi->nama_prodi == null)
                                    <td class="text-center">Belum Terdaftar</td>
                                    @else
                                    <td class="text-center">{{$i->prodi->nama_prodi}}</td>   
                                    @endif
                                    @if ($i->status == 1)
                                    <td class="text-center"><i class="fas fa-check text-success"></i> Aktif</td>
                                    @else
                                    <td class="text-center">Tidak Aktif</td>
                                    @endif
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal3{{$i->id}}">Edit</button> &nbsp;|&nbsp;
                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal1{{$i->id}}">HAPUS</button>   
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
<form action="{{url('hapus-pengguna/'. $item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="exampleModal1{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Prodi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah anda yakin ingin menghapus Instrumen ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
              <button type="submit" class="btn btn-primary">Ya</button>
            </div>
          </div>
        </div>
      </div>
    </form>
 @endforeach



 @foreach ($pengguna as $item)
<!-- Modal -->
<form action="{{url('edit-pengguna/'. $item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="exampleModal3{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Instrumen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Instrumen</label>
                    <input type="text" class="form-control" name="nama_instrumen" value="">
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
              <button type="submit" class="btn btn-primary">Ya</button>
            </div>
          </div>
        </div>
      </div>
    </form>
 @endforeach
@endsection

