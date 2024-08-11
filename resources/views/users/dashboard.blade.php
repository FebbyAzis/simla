@extends('users.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Dashboard</h1>
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
<div class="row row-cols-1">
<div class="overflow-hidden d-slider1 ">
{{-- <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
      <div class="card-body">
         <div class="progress-widget">
            <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
               <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                  <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
               </svg>
            </div>
            <div class="progress-detail">
               <p  class="mb-2">Total Sales</p>
               <h4 class="counter">$560K</h4>
            </div>
         </div>
      </div>
   </li>
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
      <div class="card-body">
         <div class="progress-widget">
            <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
               <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
               </svg>
            </div>
            <div class="progress-detail">
               <p  class="mb-2">Total Profit</p>
               <h4 class="counter">$185K</h4>
            </div>
         </div>
      </div>
   </li>
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
      <div class="card-body">
         <div class="progress-widget">
            <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
               <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
               </svg>
            </div>
            <div class="progress-detail">
               <p  class="mb-2">Total Cost</p>
               <h4 class="counter">$375K</h4>
            </div>
         </div>
      </div>
   </li>
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
      <div class="card-body">
         <div class="progress-widget">
            <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
               <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                  <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
               </svg>
            </div>
            <div class="progress-detail">
               <p  class="mb-2">Revenue</p>
               <h4 class="counter">$742K</h4>
            </div>
         </div>
      </div>
   </li>
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
      <div class="card-body">
         <div class="progress-widget">
            <div id="circle-progress-05" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
               <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                  <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
               </svg>
            </div>
            <div class="progress-detail">
               <p  class="mb-2">Net Income</p>
               <h4 class="counter">$150K</h4>
            </div>
         </div>
      </div>
   </li>
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
      <div class="card-body">
         <div class="progress-widget">
            <div id="circle-progress-06" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
               <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
               </svg>
            </div>
            <div class="progress-detail">
               <p  class="mb-2">Today</p>
               <h4 class="counter">$4600</h4>
            </div>
         </div>
      </div>
   </li>
   <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
      <div class="card-body">
         <div class="progress-widget">
            <div id="circle-progress-07" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
               <svg class="card-slie-arrow icon-24 " width="24" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
               </svg>
            </div>
            <div class="progress-detail">
               <p  class="mb-2">Members</p>
               <h4 class="counter">11.2M</h4>
            </div>
         </div>
      </div>
   </li>
</ul> --}}
<div class="swiper-button swiper-button-next"></div>
<div class="swiper-button swiper-button-prev"></div>
</div>
</div>
</div>

@if ($instrumen->instrumen_id == 9)
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                <div class="flex-wrap card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">IPK Lulusan</h4>  
                      <p>Grafik IPK Lulusan</p>          
                   </div>
      
                </div>
                <hr class="hr-horizontal">
                <div class="card-body">
                    <canvas id="infokomChart"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                <div class="flex-wrap card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Kelulusan Tepat Waktu</h4>  
                      <p>Grafik Kelulusan Tepat Waktu</p>          
                   </div>
      
                </div>
                <hr class="hr-horizontal">
                <div class="card-body">
                    <canvas id="infokomChart1"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                <div class="flex-wrap card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Kepuasan Pengguna</h4>  
                      <p>Grafik Kepuasan Pengguna Lulusan</p>          
                   </div>
      
                </div>
                <hr class="hr-horizontal">
                <div class="card-body">
                    <canvas id="infokomChart2"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                <div class="flex-wrap card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Masa Tunggu Lulusan</h4>  
                      <p>Grafik Rata-rata Masa tunggu Lulusan untuk Bekerja Pertama Kali</p>          
                   </div>
      
                </div>
                <hr class="hr-horizontal">
                <div class="card-body">
                    <canvas id="infokomChart3"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                <div class="flex-wrap card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Kesesuaian Bidang Kerja</h4>  
                      <p>Grafik Kesesuaian Bidang Kerja Lulusan</p>          
                   </div>
      
                </div>
                <hr class="hr-horizontal">
                <div class="card-body">
                    <canvas id="infokomChart4"></canvas>
                </div>
             </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="card" data-aos="fade-up" data-aos-delay="1000">
                <div class="flex-wrap card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Penelitian dan PkM</h4>  
                      <p>Grafik Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR</p>          
                   </div>
      
                </div>
                <hr class="hr-horizontal">
                <div class="card-body">
                    <canvas id="infokomChart5"></canvas>
                </div>
             </div>
        </div>
    </div>
@endif
@if ($prodi == 2)
<div class="row">
    <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Masa Studi Lulusan</h4>  
                 <p>Grafik Masa Studi Lulusan Program Studi (Khusus Program Sarjana dan Sarjana Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Waktu Tunggu Lulusan S1</h4>  
                 <p>Grafik Waktu Tunggu Lulusan(Khusus Program Sarjana)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart1"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Waktu Tunggu Lulusan D4</h4>  
                 <p>Grafik Waktu Tunggu Lulusan(Khusus Program Sarjana Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart2"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Kesesuaian Bidang Kerja</h4>  
                 <p>Grafik Kesesuaian Bidang Kerja Lulusan (Khusus Program<br>Diploma Tiga/Sarjana/Sarjana Terapan Magister/Magister Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart3"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Jangkauan Operasi Kerja</h4>  
                 <p>Grafik Jangkauan Operasi Kerja Lulusan (Khusus Program Diploma Tiga/<br>Sarjana/Sarjana Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart4"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Karya Ilmiah Mahasiswa</h4>  
                 <p>Grafik Karya Ilmiah Mahasiswa yang Disitasi (Khusus Program Magister dan Doktor)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart5"></canvas>
           </div>
        </div>
   </div>

   <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Produk/Jasa Mahasiswa</h4>  
              <p>Grafik Total Data Produk/Jasa yang Dihasilkan Mahasiswa yang Diadopsi Oleh Industri/Masyarakat 
                (Khusus Program Diploma Tiga/Sarjana Terapan/Magister Terapan/Doktor Terapan)</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart1"></canvas>
        </div>
     </div>
 </div>

 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran Mahasiswa</h4>  
              <p>Luaran Penelitian/Pkm yang Dihasilkan Mahasiswa 
                (Khusus Program Sarjana/Sarjana Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan)</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart2"></canvas>
        </div>
     </div>
 </div>
 
 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran Penelitian</h4>  
              <p>Luaran Penelitian/PkM yang Dihasilkan oleh Dosen</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart3"></canvas>
        </div>
     </div>
 </div>

 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran PkM</h4>  
              <p>Luaran Penelitian/PkM yang Dihasilkan oleh Dosen</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart11"></canvas>
        </div>
     </div>
 </div>
 </div>
@endif

@if ($prodi == 4)
<div class="row">
    <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Masa Studi Lulusan</h4>  
                 <p>Grafik Masa Studi Lulusan Program Studi (Khusus Program Sarjana dan Sarjana Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Waktu Tunggu Lulusan S1</h4>  
                 <p>Grafik Waktu Tunggu Lulusan(Khusus Program Sarjana)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart1"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Waktu Tunggu Lulusan D4</h4>  
                 <p>Grafik Waktu Tunggu Lulusan(Khusus Program Sarjana Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart2"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Kesesuaian Bidang Kerja</h4>  
                 <p>Grafik Kesesuaian Bidang Kerja Lulusan (Khusus Program<br>Diploma Tiga/Sarjana/Sarjana Terapan Magister/Magister Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart3"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Jangkauan Operasi Kerja</h4>  
                 <p>Grafik Jangkauan Operasi Kerja Lulusan (Khusus Program Diploma Tiga/<br>Sarjana/Sarjana Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart4"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Karya Ilmiah Mahasiswa</h4>  
                 <p>Grafik Karya Ilmiah Mahasiswa yang Disitasi (Khusus Program Magister dan Doktor)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart5"></canvas>
           </div>
        </div>
   </div>

   <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Produk/Jasa Mahasiswa</h4>  
              <p>Grafik Total Data Produk/Jasa yang Dihasilkan Mahasiswa yang Diadopsi Oleh Industri/Masyarakat 
                (Khusus Program Diploma Tiga/Sarjana Terapan/Magister Terapan/Doktor Terapan)</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart4"></canvas>
        </div>
     </div>
 </div>

 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran Mahasiswa</h4>  
              <p>Luaran Penelitian/Pkm yang Dihasilkan Mahasiswa 
                (Khusus Program Sarjana/Sarjana Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan)</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart5"></canvas>
        </div>
     </div>
 </div>
 
 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran Penelitian </h4>  
              <p>Luaran Penelitian/PkM yang Dihasilkan oleh Dosen</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart6"></canvas>
        </div>
     </div>
 </div>

 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran PkM</h4>  
              <p>Luaran Penelitian/PkM yang Dihasilkan oleh Dosen</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart12"></canvas>
        </div>
     </div>
 </div>
 </div>
@endif

@if ($prodi == 1)
<div class="row">
    <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Masa Studi Lulusan D3</h4>  
                 <p>Grafik Masa Studi Lulusan Program Studi (Khusus Program Diploma Tiga)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart6"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Waktu Tunggu Lulusan D3</h4>  
                 <p>Grafik Waktu Tunggu Lulusan(Khusus Program Diploma Tiga)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart7"></canvas>
           </div>
        </div>
   </div>
   
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Kesesuaian Bidang Kerja</h4>  
                 <p>Grafik Kesesuaian Bidang Kerja Lulusan (Khusus Program<br>Diploma Tiga/Sarjana/Sarjana Terapan Magister/Magister Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart3"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Jangkauan Operasi Kerja</h4>  
                 <p>Grafik Jangkauan Operasi Kerja Lulusan (Khusus Program Diploma Tiga/<br>Sarjana/Sarjana Terapan)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart4"></canvas>
           </div>
        </div>
   </div>
   
   <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Karya Ilmiah Mahasiswa</h4>  
                 <p>Grafik Karya Ilmiah Mahasiswa yang Disitasi (Khusus Program Magister dan Doktor)</p>          
              </div>
 
           </div>
           <hr class="hr-horizontal">
           <div class="card-body">
               <canvas id="userChart5"></canvas>
           </div>
        </div>
   </div>

   <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Produk/Jasa Mahasiswa</h4>  
              <p>Grafik Total Data Produk/Jasa yang Dihasilkan Mahasiswa yang Diadopsi Oleh Industri/Masyarakat 
                (Khusus Program Diploma Tiga/Sarjana Terapan/Magister Terapan/Doktor Terapan)</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart7"></canvas>
        </div>
     </div>
 </div>

 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran Mahasiswa</h4>  
              <p>Luaran Penelitian/Pkm yang Dihasilkan Mahasiswa 
                (Khusus Program Sarjana/Sarjana Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan)</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart8"></canvas>
        </div>
     </div>
 </div>
 
 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran Penelitian</h4>  
              <p>Luaran Penelitian/PkM yang Dihasilkan oleh Dosen</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart9"></canvas>
        </div>
     </div>
 </div>

 <div class="col-md-12 col-lg-12">
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Total Data Luaran PkM</h4>  
              <p>Luaran Penelitian/PkM yang Dihasilkan oleh Dosen</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart10"></canvas>
        </div>
     </div>
 </div>
 </div>
@endif




</div>
</div>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
    </div>


    <script>
      document.addEventListener('DOMContentLoaded', function () {
          var ctx = document.getElementById('userChart').getContext('2d');
          var chartData = @json($data);
  
          var userChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: chartData.labels,
                  datasets: chartData.datasets
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      });
  </script>
  
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var ctx = document.getElementById('userChart1').getContext('2d');
          var chartData = @json($data1);
  
          var userChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: chartData.labels,
                  datasets: chartData.datasets
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      });
  </script>
  
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var ctx = document.getElementById('userChart2').getContext('2d');
          var chartData = @json($data2);
  
          var userChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: chartData.labels,
                  datasets: chartData.datasets
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      });
  </script>
  
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var ctx = document.getElementById('userChart3').getContext('2d');
          var chartData = @json($data3);
  
          var userChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: chartData.labels,
                  datasets: chartData.datasets
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      });
  </script>
  
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var ctx = document.getElementById('userChart4').getContext('2d');
          var chartData = @json($data4);
  
          var userChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: chartData.labels,
                  datasets: chartData.datasets
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      });
  </script>
  
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var ctx = document.getElementById('userChart5').getContext('2d');
          var chartData = @json($data5);
  
          var userChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: chartData.labels,
                  descriptions: chartData.descriptions,
                  datasets: chartData.datasets
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      });
  </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('userChart6').getContext('2d');
        var chartData = @json($data6);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                descriptions: chartData.descriptions,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('userChart7').getContext('2d');
        var chartData = @json($data7);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                descriptions: chartData.descriptions,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart1').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Akuntansi',
                   data: @json($users21->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart2').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Akuntansi',
                   data: @json($users22->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart3').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Akuntansi',
                   data: @json($users23->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>  

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart4').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen',
                   data: @json($users21->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart5').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen',
                   data: @json($users22->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart6').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen',
                   data: @json($users23->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart7').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen Bisnis',
                   data: @json($users21->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(144, 99, 255, 0.2)',
                   borderColor: 'rgba(144, 99, 255, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart8').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen Bisnis',
                   data: @json($users22->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(144, 99, 255, 0.2)',
                   borderColor: 'rgba(144, 99, 255, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart9').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen Bisnis',
                   data: @json($users23->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(144, 99, 255, 0.2)',
                   borderColor: 'rgba(144, 99, 255, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart10').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen Bisnis',
                   data: @json($users23b->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(144, 99, 255, 0.2)',
                   borderColor: 'rgba(144, 99, 255, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart11').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Akuntansi',
                   data: @json($users23b->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
       const ctx = document.getElementById('prodiChart12').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Manajemen',
                   data: @json($users23b->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    });
 </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('infokomChart').getContext('2d');
        var chartData = @json($data91);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('infokomChart1').getContext('2d');
        var chartData = @json($data92);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('infokomChart2').getContext('2d');
        var chartData = @json($data93);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('infokomChart3').getContext('2d');
        var chartData = @json($data94);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('infokomChart4').getContext('2d');
        var chartData = @json($data95);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('infokomChart5').getContext('2d');
        var chartData = @json($data96);

        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: chartData.datasets
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection