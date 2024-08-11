@extends('users.layout.app')
@section('content')   

@if (AUTH::user()->jabatan =='Belum Terdaftar')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Instrumen</h1>
                        <p>SIMLA UCIC</p>
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
            <h4 class="card-title">Tabel Data Instrumen</h4>
         </div>
      </div>
      <div class="card-body">
         <p class="text-danger"> Anda Belum Terdaftar</p>
         <hr class="hr-horizontal mb-3">
      </div>
   </div>
  </div>
  
  
  </div>
  </div>   
@else
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Instrumen</h1>
                        <p>SIMLA UCIC</p>
                    </div>
                    <div>
  
                      <a type="button" class="btn btn-link btn-soft-light text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor">
                              </path>                            
                          </svg>                                                
                          Tambah Instrumen
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
            <h4 class="card-title">Tabel Data Instrumen</h4>
         </div>
      </div>
      <div class="card-body">
         <p>Berikut adalah tabel data instrumen yang digunakan sebagai sumber data untuk melakukan input data.</p>
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
         <div class="table-responsive">
            <table id="datatable" class="table table-striped" data-toggle="data-table">
              <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Instrumen</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           
            <tbody>
                @foreach ($ipk as $no=>$i)
                <tr>
                    
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
@endif




@endsection