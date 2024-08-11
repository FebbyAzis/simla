@extends('dekan.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Penelitian dan PkM</h1>
                      <p>Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR</p>
                  </div>
                  <div>

                    <a href="{{url('/prodi-teknik-informatika')}}" class="btn btn-link btn-soft-light text-white">
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
          <h4 class="card-title">Tabel Data Penelitian dan PkM</h4>
       </div>
    </div>
    <div class="card-body">
       <p>Berikut adalah beberapa data Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR yang tersimpan dalam SIMLA | UCIC.</p>
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
                  <th class="text-center p-5">No</th>
                  <th class="text-center p-5">Nama DTPR</th>
                  <th class="text-center p-5">Jumlah Publikasi<br>Bertema Infokom</th>
                  <th class="text-center p-5">Jumlah Penelitian<br>Bertema Infokom</th>
                  <th class="text-center p-5">Jumlah Penelitian Bertema Infokom<br>yang Mendapat HKI</th>
                  <th class="text-center p-5">Jumlah PkM Bertema Infokom<br>yang Diadopsi Masyarakat</th>
                  <th class="text-center p-5">Jumlah PkM Bertema Infokom<br>yang Mendapat HKI</th>
                  
              </tr>
              <tr class="table-primary">
                <td class="text-center">0</td>
                <td class="text-center">1</td>
                <td class="text-center">2</td>
                <td class="text-center">3</td>
                <td class="text-center">4</td>
                <td class="text-center">5</td>
                <td class="text-center">6</td>
                
            </tr>
          </thead>
         
          <tbody>
            
            @foreach ($tabel96 as $no=>$item)
            <tr>
                <td class="text-center">{{$no+1}}</td>
                <td class="text-center">{{$item->nama_dtpr}}</td>
                <td class="text-center">{{$item->jumlah_publikasi_infokom}}</td>
                <td class="text-center">{{$item->jumlah_penelitian_infokom}}</td>
                <td class="text-center">{{$item->jumlah_penelitian_infokom_hki}}</td>
                <td class="text-center">{{$item->jumlah_pkm_infokom}}</td>
                <td class="text-center">{{$item->jumlah_pkm_infokom_hki}}</td>
                
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