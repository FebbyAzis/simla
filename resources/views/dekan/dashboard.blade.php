@extends('dekan.layout.app')
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
@if ($prodi == 10)
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <div class="flex-wrap card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Total Data IPK Lulusan</h4>  
                  <p>Grafik Total Data IPK Lulusan</p>          
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
                  <h4 class="card-title">Total Data Kelulusan Tepat Waktu</h4>  
                  <p>Grafik Total Data Kelulusan Tepat Waktu</p>          
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
                  <h4 class="card-title">Total Data Kepuasan Pengguna</h4>  
                  <p>Grafik Total Data Kepuasan Pengguna Lulusan</p>          
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
                  <h4 class="card-title">Total Data Masa Tunggu Lulusan</h4>  
                  <p>Grafik Total Data Rata-rata Masa tunggu Lulusan untuk Bekerja Pertama Kali</p>          
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
                  <h4 class="card-title">Total Data Kesesuaian Bidang Kerja</h4>  
                  <p>Grafik Total Data Kesesuaian Bidang Kerja Lulusan</p>          
               </div>
     
            </div>
            <hr class="hr-horizontal">
            <div class="card-body">
                <canvas id="infokomChart5"></canvas>
            </div>
         </div>
     </div>

     <div class="col-md-12 col-lg-12">
        <div class="card" data-aos="fade-up" data-aos-delay="1000">
            <div class="flex-wrap card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Total Data Penelitian dan PkM</h4>  
                  <p>Grafik Total Data Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR</p>          
               </div>
     
            </div>
            <hr class="hr-horizontal">
            <div class="card-body">
                <canvas id="infokomChart6"></canvas>
            </div>
         </div>
     </div>
</div>
@endif

@if ($prodi == 11)
<div class="row">
    <div class="col-md-12 col-lg-12">
       <div class="card" data-aos="fade-up" data-aos-delay="1000">
           <div class="flex-wrap card-header d-flex justify-content-between">
              <div class="header-title">
                 <h4 class="card-title">Total Data Masa Studi Lulusan D3</h4>  
                 <p>Grafik Total Data Masa Studi Lulusan Program Studi (Khusus Program Diploma Tiga)</p>          
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
                 <h4 class="card-title">Total Data Masa Studi Lulusan</h4>  
                 <p>Grafik Total Data Masa Studi Lulusan Program Studi (Khusus Program Sarjana dan Sarjana Terapan)</p>          
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
              <h4 class="card-title">Total Data Waktu Tunggu Lulusan D3</h4>  
              <p>Grafik Total Data Waktu Tunggu Lulusan(Khusus Diploma Tiga)</p>          
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
              <h4 class="card-title">Total Data Waktu Tunggu Lulusan S1</h4>  
              <p>Grafik Total Data Waktu Tunggu Lulusan(Khusus Program Sarjana)</p>          
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
              <h4 class="card-title">Total Data Waktu Tunggu Lulusan D4</h4>  
              <p>Grafik Total Data Waktu Tunggu Lulusan(Khusus Program Sarjana Terapan)</p>          
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
              <h4 class="card-title">Total Data Kesesuaian Bidang Kerja</h4>  
              <p>Grafik Total Data Kesesuaian Bidang Kerja Lulusan (Khusus Program
                Diploma Tiga/Sarjana/Sarjana Terapan Magister/Magister Terapan)</p>          
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
              <h4 class="card-title">Total Data Jangkauan Operasi Kerja</h4>  
              <p>Grafik Total Data Jangkauan Operasi Kerja Lulusan (Khusus Program Diploma Tiga/
                Sarjana/Sarjana Terapan)</p>          
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
              <h4 class="card-title">Total Data Karya Ilmiah Mahasiswa</h4>  
              <p>Grafik Total Data Karya Ilmiah Mahasiswa yang Disitasi (Khusus Program Magister dan Doktor)</p>          
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
              <h4 class="card-title">Total Data Produk/Jasa Mahasiswa</h4>  
              <p>Grafik Total Data Produk/Jasa yang Dihasilkan Mahasiswa yang Diadopsi Oleh Industri/Masyarakat 
                (Khusus Program Diploma Tiga/Sarjana Terapan/Magister Terapan/Doktor Terapan)</p>          
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
              <h4 class="card-title">Total Data Luaran Mahasiswa</h4>  
              <p>Luaran Penelitian/Pkm yang Dihasilkan Mahasiswa 
                (Khusus Program Sarjana/Sarjana Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan)</p>          
           </div>
 
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart10"></canvas>
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
            <canvas id="prodiChart11"></canvas>
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
</div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
      const ctx = document.getElementById('prodiChart1').getContext('2d');
   const prodiChart = new Chart(ctx, {
       type: 'bar',
       data: {
           labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
           datasets: [
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users->values()), // Mengambil total data akuntansi per prodi_id
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
      const ctx = document.getElementById('prodiChart2').getContext('2d');
   const prodiChart = new Chart(ctx, {
       type: 'bar',
       data: {
           labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
           datasets: [
               {
                   label: 'Prodi Akuntansi',
                   data: @json($users2->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users3->values()), // Mengambil total data manajemen per prodi_id
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
      const ctx = document.getElementById('prodiChart3').getContext('2d');
   const prodiChart = new Chart(ctx, {
       type: 'bar',
       data: {
           labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
           datasets: [
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users4->values()), // Mengambil total data akuntansi per prodi_id
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
      const ctx = document.getElementById('prodiChart4').getContext('2d');
   const prodiChart = new Chart(ctx, {
       type: 'bar',
       data: {
           labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
           datasets: [
               {
                   label: 'Prodi Akuntansi',
                   data: @json($users5->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users6->values()), // Mengambil total data manajemen per prodi_id
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
                   label: 'Prodi Akuntansi',
                   data: @json($users7->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users8->values()), // Mengambil total data manajemen per prodi_id
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
                   label: 'Prodi Akuntansi',
                   data: @json($users9->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users10->values()), // Mengambil total data manajemen per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users11->values()), // Mengambil total data manajemen per prodi_id
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
      const ctx = document.getElementById('prodiChart7').getContext('2d');
   const prodiChart = new Chart(ctx, {
       type: 'bar',
       data: {
           labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
           datasets: [
               {
                   label: 'Prodi Akuntansi',
                   data: @json($users12->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users13->values()), // Mengambil total data manajemen per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users14->values()), // Mengambil total data manajemen per prodi_id
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
                   label: 'Prodi Akuntansi',
                   data: @json($users15->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users16->values()), // Mengambil total data manajemen per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users17->values()), // Mengambil total data manajemen per prodi_id
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
                   label: 'Prodi Akuntansi',
                   data: @json($users18->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users19->values()), // Mengambil total data manajemen per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users20->values()), // Mengambil total data manajemen per prodi_id
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
                   label: 'Prodi Akuntansi',
                   data: @json($users21->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users22->values()), // Mengambil total data manajemen per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users23->values()), // Mengambil total data manajemen per prodi_id
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
                   data: @json($users24->values()), // Mengambil total data akuntansi per prodi_id
                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                   borderColor: 'rgba(54, 162, 235, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen',
                   data: @json($users25->values()), // Mengambil total data manajemen per prodi_id
                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
               },
               {
                   label: 'Prodi Manajemen Bisnis',
                   data: @json($users26->values()), // Mengambil total data manajemen per prodi_id
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
       const ctx = document.getElementById('prodiChart12').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Akuntansi',
                    data: @json($users27->values()), // Mengambil total data akuntansi per prodi_id
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen',
                    data: @json($users28->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen Bisnis',
                    data: @json($users29->values()), // Mengambil total data manajemen per prodi_id
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
       const ctx = document.getElementById('infokomChart1').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Teknik Informatika',
                    data: @json($tabel91d->values()), // Mengambil total data akuntansi per prodi_id
                    backgroundColor: 'rgba(248,121,121, 0.2)',
                    borderColor: 'rgba(248,121,121, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Desain Komunikasi Visual',
                    data: @json($tabel91c->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(0, 255, 254, 0.2)',
                    borderColor: 'rgba(0, 255, 254, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Sistem Informasi',
                    data: @json($tabel91b->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(138, 43, 226, 0.2)',
                    borderColor: 'rgba(138, 43, 226, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen Informatika',
                    data: @json($tabel91a->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(100, 149, 237, 0.2)',
                    borderColor: 'rgba(100, 149, 237, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Komputerisasi Akuntansi',
                    data: @json($tabel91e->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(255, 140, 0, 0.2)',
                    borderColor: 'rgba(255, 140, 0, 1)',
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
       const ctx = document.getElementById('infokomChart2').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Teknik Informatika',
                    data: @json($tabel92d->values()), // Mengambil total data akuntansi per prodi_id
                    backgroundColor: 'rgba(248,121,121, 0.2)',
                    borderColor: 'rgba(248,121,121, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Desain Komunikasi Visual',
                    data: @json($tabel92c->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(0, 255, 254, 0.2)',
                    borderColor: 'rgba(0, 255, 254, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Sistem Informasi',
                    data: @json($tabel92b->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(138, 43, 226, 0.2)',
                    borderColor: 'rgba(138, 43, 226, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen Informatika',
                    data: @json($tabel92a->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(100, 149, 237, 0.2)',
                    borderColor: 'rgba(100, 149, 237, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Komputerisasi Akuntansi',
                    data: @json($tabel92e->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(255, 140, 0, 0.2)',
                    borderColor: 'rgba(255, 140, 0, 1)',
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
       const ctx = document.getElementById('infokomChart3').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Teknik Informatika',
                    data: @json($tabel93d->values()), // Mengambil total data akuntansi per prodi_id
                    backgroundColor: 'rgba(248,121,121, 0.2)',
                    borderColor: 'rgba(248,121,121, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Desain Komunikasi Visual',
                    data: @json($tabel93c->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(0, 255, 254, 0.2)',
                    borderColor: 'rgba(0, 255, 254, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Sistem Informasi',
                    data: @json($tabel93b->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(138, 43, 226, 0.2)',
                    borderColor: 'rgba(138, 43, 226, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen Informatika',
                    data: @json($tabel93a->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(100, 149, 237, 0.2)',
                    borderColor: 'rgba(100, 149, 237, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Komputerisasi Akuntansi',
                    data: @json($tabel93e->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(255, 140, 0, 0.2)',
                    borderColor: 'rgba(255, 140, 0, 1)',
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
       const ctx = document.getElementById('infokomChart4').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Teknik Informatika',
                    data: @json($tabel94d->values()), // Mengambil total data akuntansi per prodi_id
                    backgroundColor: 'rgba(248,121,121, 0.2)',
                    borderColor: 'rgba(248,121,121, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Desain Komunikasi Visual',
                    data: @json($tabel94c->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(0, 255, 254, 0.2)',
                    borderColor: 'rgba(0, 255, 254, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Sistem Informasi',
                    data: @json($tabel94b->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(138, 43, 226, 0.2)',
                    borderColor: 'rgba(138, 43, 226, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen Informatika',
                    data: @json($tabel94a->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(100, 149, 237, 0.2)',
                    borderColor: 'rgba(100, 149, 237, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Komputerisasi Akuntansi',
                    data: @json($tabel94e->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(255, 140, 0, 0.2)',
                    borderColor: 'rgba(255, 140, 0, 1)',
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
       const ctx = document.getElementById('infokomChart5').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Teknik Informatika',
                    data: @json($tabel95d->values()), // Mengambil total data akuntansi per prodi_id
                    backgroundColor: 'rgba(248,121,121, 0.2)',
                    borderColor: 'rgba(248,121,121, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Desain Komunikasi Visual',
                    data: @json($tabel95c->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(0, 255, 254, 0.2)',
                    borderColor: 'rgba(0, 255, 254, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Sistem Informasi',
                    data: @json($tabel95b->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(138, 43, 226, 0.2)',
                    borderColor: 'rgba(138, 43, 226, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen Informatika',
                    data: @json($tabel95a->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(100, 149, 237, 0.2)',
                    borderColor: 'rgba(100, 149, 237, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Komputerisasi Akuntansi',
                    data: @json($tabel95e->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(255, 140, 0, 0.2)',
                    borderColor: 'rgba(255, 140, 0, 1)',
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
       const ctx = document.getElementById('infokomChart6').getContext('2d');
    const prodiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Data Prodi'], // Mengambil semua prodi_id yang ada
            datasets: [
                {
                    label: 'Prodi Teknik Informatika',
                    data: @json($tabel96d->values()), // Mengambil total data akuntansi per prodi_id
                    backgroundColor: 'rgba(248,121,121, 0.2)',
                    borderColor: 'rgba(248,121,121, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Desain Komunikasi Visual',
                    data: @json($tabel96c->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(0, 255, 254, 0.2)',
                    borderColor: 'rgba(0, 255, 254, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Sistem Informasi',
                    data: @json($tabel96b->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(138, 43, 226, 0.2)',
                    borderColor: 'rgba(138, 43, 226, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Manajemen Informatika',
                    data: @json($tabel96a->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(100, 149, 237, 0.2)',
                    borderColor: 'rgba(100, 149, 237, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Prodi Komputerisasi Akuntansi',
                    data: @json($tabel96e->values()), // Mengambil total data manajemen per prodi_id
                    backgroundColor: 'rgba(255, 140, 0, 0.2)',
                    borderColor: 'rgba(255, 140, 0, 1)',
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
@endsection