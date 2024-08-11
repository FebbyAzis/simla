@extends('dekan.layout.app')
@section('content')   

<div class="iq-navbar-header" style="height: 215px;">
  <div class="container-fluid iq-container" data-aos="fade-up" data-aos-delay="800">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>Prodi Desain Komunikasi Visual</h1>
                      <p>Data Luaran Akreditasi pada program studi Desain Komunikasi Visual</p>
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
                      <h4 class="card-title">IPK Lulusan</h4>  
                      <p>Grafik IPK Lulusan</p>          
                   </div>
                   <div class="dropdown">
                    <a href="{{url('/ipk-lulusan-desain-komunikasi-visual')}}" class="btn btn-primary text-white">
                       Lihat Data
                    </a>
                    
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
                   <div class="dropdown">
                    <a href="{{url('/kelulusan-tepat-waktu-desain-komunikasi-visual')}}" class="btn btn-primary text-white">
                       Lihat Data
                    </a>
                    
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
                   <div class="dropdown">
                    <a href="{{url('/kepuasan-pengguna-lulusan-desain-komunikasi-visual')}}" class="btn btn-primary text-white">
                       Lihat Data
                    </a>
                    
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
                   <div class="dropdown">
                    <a href="{{url('/masa-tunggu-lulusan-desain-komunikasi-visual')}}" class="btn btn-primary text-white">
                       Lihat Data
                    </a>
                    
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
                   <div class="dropdown">
                    <a href="{{url('/kesesuaian-bidang-kerja-lulusan-desain-komunikasi-visual')}}" class="btn btn-primary text-white">
                       Lihat Data
                    </a>
                    
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
                   <div class="dropdown">
                    <a href="{{url('/penelitian-dan-pkm-desain-komunikasi-visual')}}" class="btn btn-primary text-white">
                       Lihat Data
                    </a>
                    
                 </div>
                </div>
                <hr class="hr-horizontal">
                <div class="card-body">
                    <canvas id="infokomChart5"></canvas>
                </div>
             </div>
        </div>
    </div>
</div>

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