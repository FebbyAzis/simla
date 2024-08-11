@extends('dekan.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Luaran Penelitian</h1>
                      <p>Luaran Penelitian/PkM yang Dihsailkan oleh Dosen</p>
                  </div>
                  <div>

                    <a href="{{url('/prodi-akuntansi')}}" class="btn btn-link btn-soft-light text-white">
                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75024C6.892 2.75024 2.75 6.89124 2.75 12.0002C2.75 17.1082 6.892 21.2502 12 21.2502C17.108 21.2502 21.25 17.1082 21.25 12.0002C21.25 6.89124 17.108 2.75024 12 2.75024Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>                                    
                            <path d="M13.4424 8.52905L9.95638 12.0001L13.4424 15.4711" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>                                
                        </svg>                                                                                                        
                        Kembali
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
          <h4 class="card-title">Tabel Data Luaran Penelitian/PkM yang Dihsailkan oleh Dosen</h4>
       </div>
    </div>
    <div class="card-body">
       <p>Berikut adalah beberapa data Luaran Penelitian/PkM yang Dihsailkan oleh Dosen yang tersimpan dalam SIMLA | UCIC.</p>
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
                  <th class="text-center p-5" rowspan="2">Luaran Penelitian</th>
                  <th class="text-center p-5" rowspan="2">Tahun (YYYY)</th>
                  <th class="text-center p-5" rowspan="2">Keterangan</th>
                  <th class="text-center p-5" colspan="3">Sumber Pembiayaan</th>
                  <th class="text-center" colspan="13">Jenis Publikasi*</th>
                  
              </tr>
              <tr class="table-primary">
                <th class="text-center">a) Perguruan<br>Tinggi<br>b) Mandiri</th>
                <th class="text-center">Lembaga<br>dalam Negeri<br>(Diluar PT)</th>
                <th class="text-center">Lembaga Luar<br>Negeri</th>
                <th class="text-center">Jurnal<br>Nasional<br>tidak<br>Terakreditasi</th>
                <th class="text-center">Jurnal<br>Nasional<br>Terakreditasi</th>
                <th class="text-center">Jurnal<br>Interasional</th>
                <th class="text-center">Jurnal<br>Interasional<br>Bereputasi</th>
                <th class="text-center">Seminar<br>Wilayah/Lolal<br>Perguruan<br>Tinggi</th>
                <th class="text-center">Seminar<br>Nasional</th>
                <th class="text-center">Seminar<br>Internasional</th>
                <th class="text-center">Tulisann di<br>Media Masa<br>Wilayah</th>
                <th class="text-center">Tulisann di<br>Media Masa<br>Nasional</th>
                <th class="text-center">Tulisann di<br>Media Masa<br>Internasional</th>
                <th class="text-center">Pagelaran/Pameran/<br>Presentasi dalam<br>Forum di<br>Tingkat Wilayah</th>
                <th class="text-center">Pagelaran/Pameran/<br>Presentasi dalam<br>Forum di<br>Tingkat Nasional</th>
                <th class="text-center">Pagelaran/Pameran/<br>Presentasi dalam<br>Forum di<br>Tingkat Internasional</th>
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
                <td class="text-center">9</td>
                <td class="text-center">10</td>
                <td class="text-center">11</td>
                <td class="text-center">12</td>
                <td class="text-center">13</td>
                <td class="text-center">14</td>
                <td class="text-center">15</td>
                <td class="text-center">16</td>
                <td class="text-center">17</td>
                <td class="text-center">18</td>
                <td class="text-center">19</td>
                
            </tr>
          </thead>
         
          <tbody>
            
            @foreach ($tabel23 as $no=>$item)
            <tr>
                
                <td class="text-center">{{$no+1}}</td>
                <td class="text-center">{{$item->luaran_penelitian}}</td>
                <td class="text-center">{{$item->tahun}}</td>
                <td class="text-center">{{$item->keterangan}}</td>
                <td class="text-center">{{$item->perguruan_tinggi_mandiri}}</td>
                <td class="text-center">{{$item->lembaga_dalam_negeri}}</td>
                <td class="text-center">{{$item->lembaga_luar_negeri}}</td>
                <td class="text-center">{{$item->jurnal_nasional_tidak_terakreditasi}}</td>
                <td class="text-center">{{$item->jurnal_nasional_terakreditasi}}</td>
                <td class="text-center">{{$item->jurnal_internasional}}</td>
                <td class="text-center">{{$item->jurnal_internasional_bereputasi}}</td>
                <td class="text-center">{{$item->seminar_wilayah_lokal_perguruan_tinggi}}</td>
                <td class="text-center">{{$item->seminar_nasional}}</td>
                <td class="text-center">{{$item->seminar_internasional}}</td>
                <td class="text-center">{{$item->tulisan_dimedia_masa_wilayah}}</td>
                <td class="text-center">{{$item->tulisan_dimedia_masa_nasional}}</td>
                <td class="text-center">{{$item->tulisan_dimedia_masa_internasional}}</td>
                <td class="text-center">{{$item->pagelaran_pameran_presentasi_tingkat_wilayah}}</td>
                <td class="text-center">{{$item->pagelaran_pameran_presentasi_tingkat_nasional}}</td>
                <td class="text-center">{{$item->pagelaran_pameran_presentasi_tingkat_internasional}}</td>
               
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

@endsection