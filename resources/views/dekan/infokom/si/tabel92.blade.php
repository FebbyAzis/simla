@extends('dekan.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Kelulusan Tepat Waktu</h1>
                      <p>SIMLA | UCIC</p>
                  </div>
                  <div>

                    <a href="{{url('/prodi-sistem-informasi')}}" class="btn btn-link btn-soft-light text-white">
                      <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75024C6.892 2.75024 2.75 6.89124 2.75 12.0002C2.75 17.1082 6.892 21.2502 12 21.2502C17.108 21.2502 21.25 17.1082 21.25 12.0002C21.25 6.89124 17.108 2.75024 12 2.75024Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                              </path>                                    
                          <path d="M13.4424 8.52905L9.95638 12.0001L13.4424 15.4711" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                          </path>                                
                      </svg>                                                                                                        
                      Kembali
                  </a>
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
          <h4 class="card-title">Tabel Data Kelulusan Tepat Waktu</h4>
       </div>
    </div>
    <div class="card-body">
       <p>Berikut adalah beberapa data Kelulusan Tepat Waktu yang tersimpan dalam SIMLA | UCIC.</p>
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
                  <th class="text-center p-5" rowspan="2">Tahun Masuk</th>
                  <th class="text-center p-5" rowspan="2">Jumlah Mahasiswa<br>Diterima</th>
                  <th class="text-center" colspan="7">Jumlah Mahasiswa yang Lulusa pada</th>
                  <th class="text-center p-5" rowspan="2">Jumlah Lulusan<br>s.d. Akhir TS</th>
                  <th class="text-center p-5" rowspan="2">Rata- rata<br>Masa Studi</th>
                  <th class="text-center p-5" rowspan="2">Jumlah Mahasiswa<br>yang Masih Aktif</th>
                  
              </tr>
              <tr class="table-primary">
                <th class="text-center">Akhir TS-6</th>
                <th class="text-center">Akhir TS-5</th>
                <th class="text-center">Akhir TS-4</th>
                <th class="text-center">Akhir TS-3</th>
                <th class="text-center">Akhir TS-2</th>
                <th class="text-center">Akhir TS-1</th>
                <th class="text-center">Akhir TS</th>
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
                
            </tr>
          </thead>
         
          <tbody>
            
            @foreach ($tabel92 as $item)
            <tr>
                
                <td class="text-center">{{$item->tahun_masuk}}</td>
                <td class="text-center">{{$item->jumlah_mahasiswa_diterima}}</td>
                <td class="text-center">{{$item->akhir_ts6}}</td>
                <td class="text-center">{{$item->akhir_ts5}}</td>
                <td class="text-center">{{$item->akhir_ts4}}</td>
                <td class="text-center">{{$item->akhir_ts3}}</td>
                <td class="text-center">{{$item->akhir_ts2}}</td>
                <td class="text-center">{{$item->akhir_ts1}}</td>
                <td class="text-center">{{$item->akhir_ts}}</td>
                <td class="text-center">{{$item->jumlah_lulusan_akhir_ts}}</td>
                <td class="text-center">{{$item->ratarata_masa_studi}}</td>
                <td class="text-center">{{$item->jumlah_mahasiswa_aktif}}</td>
                
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