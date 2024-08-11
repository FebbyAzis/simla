@extends('dekan.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Prodi Manajemen Bisnis</h1>
                      <p>Data Luaran Akreditasi pada program studi Manajemen</p>
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
    <div class="card" data-aos="fade-up" data-aos-delay="1000">
        <div class="flex-wrap card-header d-flex justify-content-between">
           <div class="header-title">
              <h4 class="card-title">Masa Studi Lulusan D3</h4>  
              <p>Grafik Masa Studi Lulusan Program Studi (Khusus Program Diploma Tiga)</p>          
           </div>
           <div class="dropdown">
              <a href="{{url('/masa-studi-lulusan-d3manajemen-bisnis')}}" class="btn btn-primary text-white">
                 Lihat Data
              </a>
              
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
              <h4 class="card-title">Waktu Tunggu Lulusan D3</h4>  
              <p>Grafik Waktu Tunggu Lulusan(Khusus Diploma Tiga)</p>          
           </div>
           <div class="dropdown">
              <a href="{{url('/waktu-tunggu-lulusan-d3manajemen-bisnis')}}" class="btn btn-primary text-white">
                 Lihat Data
              </a>
              
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
              <h4 class="card-title">Kesesuaian Bidang Kerja</h4>  
              <p>Grafik Kesesuaian Bidang Kerja Lulusan (Khusus Program<br>Diploma Tiga/Sarjana/Sarjana Terapan Magister/Magister Terapan)</p>          
           </div>
           <div class="dropdown">
              <a href="{{url('/kesesuaian-bidang-kerjamanajemen-bisnis')}}" class="btn btn-primary text-white">
                 Lihat Data
              </a>
              
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
           <div class="dropdown">
              <a href="{{url('/jangkauan-operasi-kerjamanajemen-bisnis')}}" class="btn btn-primary text-white">
                 Lihat Data
              </a>
              
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
           <div class="dropdown">
              <a href="{{url('/karya-ilmiah-mahasiswamanajemen-bisnis')}}" class="btn btn-primary text-white">
                 Lihat Data
              </a>
              
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
              <p>Grafik Total Data Produk/Jasa yang Dihasilkan Mahasiswa yang Diadopsi Oleh<br>Industri/Masyarakat 
                (Khusus Program Diploma Tiga/Sarjana Terapan/Magister<br>Terapan/Doktor Terapan)</p>          
           </div>
           <div class="dropdown">
            <a href="{{url('/produk-jasa-mahasiswamanajemen-bisnis')}}" class="btn btn-primary text-white">
               Lihat Data
            </a>
            
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
                (Khusus Program Sarjana/Sarjana<br>Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan)</p>          
           </div>
           <div class="dropdown">
            <a href="{{url('/luaran-mahasiswamanajemen-bisnis')}}" class="btn btn-primary text-white">
               Lihat Data
            </a>
            
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
           <div class="dropdown">
            <a href="{{url('/luaran-penelitianmanajemen-bisnis')}}" class="btn btn-primary text-white">
               Lihat Data
            </a>
            
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
           <div class="dropdown">
            <a href="{{url('/luaran-pkmmanajemen-bisnis')}}" class="btn btn-primary text-white">
               Lihat Data
            </a>
            
         </div>
        </div>
        <hr class="hr-horizontal">
        <div class="card-body">
            <canvas id="prodiChart4"></canvas>
        </div>
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

{{-- <script>
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
</script> --}}

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
       const ctx = document.getElementById('prodiChart1').getContext('2d');
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
       const ctx = document.getElementById('prodiChart2').getContext('2d');
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
       const ctx = document.getElementById('prodiChart3').getContext('2d');
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
       const ctx = document.getElementById('prodiChart4').getContext('2d');
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

@endsection