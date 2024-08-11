
@php
    use App\Models\Periode;
    use App\Models\Prodi;
    use App\Models\Users;
    use App\Models\User;
    use App\Models\Instrumen;
    use Illuminate\Support\Facades\Auth;

$user = Auth::user();

 if ($user) {
     $prodi = Prodi::where('id', $user->prodi_id)->first();

     if ($prodi) {
         $instrumen = $prodi->instrumen;

      
     } else {
         return response()->json(['message' => 'Prodi not found'], 404);
     }
 } else {
     return response()->json(['message' => 'Unauthorized'], 401);
 }

@endphp


<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SIMLA | UCIC</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('css/core/libs.min.css')}}" />
      
      <!-- Aos Animation Css -->
      <link rel="stylesheet" href="{{asset('vendor/aos/dist/aos.css')}}" />
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{asset('css/hope-ui.min.css?v=2.0.0')}}" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('css/custom.min.css?v=2.0.0')}}" />
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{asset('css/dark.min.css')}}"/>
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{asset('css/customizer.min.css')}}" />
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{asset('css/rtl.min.css')}}"/>

      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      
  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    </div>
    <!-- loader END -->
    
    <aside class="sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all ">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{asset('dashboard/index.html')}}" class="navbar-brand">
                <!--Logo start-->
                <!--logo End-->
                
                <!--Logo start-->
                <div class="logo-main">
                    <img src="{{asset('logo_ucic.png')}}" width="100px" alt="">
                    <div class="logo-normal">
                        
                    </div>
                    <div class="logo-mini">
                        
                    </div>
                </div>
                <!--logo End-->
                
                <h4 class="logo-title text-center text-secondary">SIMLA<br>UCIC</h4>
            </a>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu mb-5" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">HOME</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dashboard-dekan*') ? 'active' : '' }}" aria-current="page" href="{{url('dashboard-dekan')}}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>


                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">MASTER</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>


                    @if ($instrumen->nama_instrumen == 'LAM Infokom')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('prodi-teknik-informatika*') ? 'active' : '' }}
                            {{ request()->is('ipk-lulusan-teknik-informatika*') ? 'active' : '' }} 
                            {{ request()->is('kelulusan-tepat-waktu-teknik-informatika*') ? 'active' : '' }}
                            {{ request()->is('kepuasan-pengguna-lulusan-teknik-informatika*') ? 'active' : '' }}
                            {{ request()->is('masa-tunggu-lulusan-teknik-informatika*') ? 'active' : '' }}
                            {{ request()->is('kesesuaian-bidang-kerja-lulusan-teknik-informatika*') ? 'active' : '' }}
                            {{ request()->is('penelitian-dan-pkm-teknik-informatika*') ? 'active' : '' }}
                            " aria-current="page" href="{{url('prodi-teknik-informatika')}}">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name">Teknik Informatika</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('prodi-desain-komunikasi-visual*') ? 'active' : '' }}
                            {{ request()->is('ipk-lulusan-desain-komunikasi-visual*') ? 'active' : '' }} 
                            {{ request()->is('kelulusan-tepat-waktu-desain-komunikasi-visual*') ? 'active' : '' }}
                            {{ request()->is('kepuasan-pengguna-lulusan-desain-komunikasi-visual*') ? 'active' : '' }}
                            {{ request()->is('masa-tunggu-lulusan-desain-komunikasi-visual*') ? 'active' : '' }}
                            {{ request()->is('kesesuaian-bidang-kerja-lulusan-desain-komunikasi-visual*') ? 'active' : '' }}
                            {{ request()->is('penelitian-dan-pkm-desain-komunikasi-visual*') ? 'active' : '' }}
                            " aria-current="page" href="{{url('prodi-desain-komunikasi-visual')}}">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name"><small>Desain Komunikasi Visual</small></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('prodi-sistem-informasi*') ? 'active' : '' }}
                            {{ request()->is('ipk-lulusan-sistem-informasi*') ? 'active' : '' }} 
                            {{ request()->is('kelulusan-tepat-waktu-sistem-informasi*') ? 'active' : '' }}
                            {{ request()->is('kepuasan-pengguna-lulusan-sistem-informasi*') ? 'active' : '' }}
                            {{ request()->is('masa-tunggu-lulusan-sistem-informasi*') ? 'active' : '' }}
                            {{ request()->is('kesesuaian-bidang-kerja-lulusan-sistem-informasi*') ? 'active' : '' }}
                            {{ request()->is('penelitian-dan-pkm-sistem-informasi*') ? 'active' : '' }}
                            " aria-current="page" href="{{url('prodi-sistem-informasi')}}">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name">Sistem Informasi</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('prodi-manajemen-informatika*') ? 'active' : '' }}
                            {{ request()->is('ipk-lulusan-manajemen-informatika*') ? 'active' : '' }} 
                            {{ request()->is('kelulusan-tepat-waktu-manajemen-informatika*') ? 'active' : '' }}
                            {{ request()->is('kepuasan-pengguna-lulusan-manajemen-informatika*') ? 'active' : '' }}
                            {{ request()->is('masa-tunggu-lulusan-manajemen-informatika*') ? 'active' : '' }}
                            {{ request()->is('kesesuaian-bidang-kerja-lulusan-manajemen-informatika*') ? 'active' : '' }}
                            {{ request()->is('penelitian-dan-pkm-manajemen-informatika*') ? 'active' : '' }}
                            " aria-current="page" href="{{url('prodi-manajemen-informatika')}}">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name"><small>Manajemen Informatika</small></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('prodi-komputerisasi-akuntansi*') ? 'active' : '' }}
                            {{ request()->is('ipk-lulusan-komputerisasi-akuntansi*') ? 'active' : '' }} 
                            {{ request()->is('kelulusan-tepat-waktu-komputerisasi-akuntansi*') ? 'active' : '' }}
                            {{ request()->is('kepuasan-pengguna-lulusan-komputerisasi-akuntansi*') ? 'active' : '' }}
                            {{ request()->is('masa-tunggu-lulusan-komputerisasi-akuntansi*') ? 'active' : '' }}
                            {{ request()->is('kesesuaian-bidang-kerja-lulusan-komputerisasi-akuntansi*') ? 'active' : '' }}
                            {{ request()->is('penelitian-dan-pkm-komputerisasi-akuntansi*') ? 'active' : '' }}
                            " aria-current="page" href="{{url('prodi-komputerisasi-akuntansi')}}">
                            <i class="icon">
                                <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                    <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                    <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                </svg>
                            </i>
                            <span class="item-name"><small>Komputerisasi Akuntansi</small></span>
                        </a>
                    </li>
                            
                    @elseif($instrumen->nama_instrumen == 'LAMEMBA')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('prodi-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('masa-studi-lulusan-akuntansi*') ? 'active' : '' }} 
                                {{ request()->is('waktu-tunggu-lulusan-s1-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('waktu-tunggu-lulusan-d4-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('kesesuaian-bidang-kerja-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('jangkauan-operasi-kerja-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('karya-ilmiah-mahasiswa-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('produk-jasa-mahasiswa-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('luaran-mahasiswa-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('luaran-penelitian-akuntansi*') ? 'active' : '' }}
                                {{ request()->is('luaran-pkm-akuntansi*') ? 'active' : '' }}
                                " aria-current="page" href="{{url('prodi-akuntansi')}}">
                                <i class="icon">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                        <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                        <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Prodi Akuntansi</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('prodi-manajemen*') ? 'active' : '' }} 
                                {{ request()->is('masa-studi-lulusan-manajemen*') ? 'active' : '' }} 
                                {{ request()->is('waktu-tunggu-lulusan-s1-manajemen*') ? 'active' : '' }}
                                {{ request()->is('waktu-tunggu-lulusan-d4-manajemen*') ? 'active' : '' }}
                                {{ request()->is('kesesuaian-bidang-kerja-manajemen*') ? 'active' : '' }}
                                {{ request()->is('jangkauan-operasi-kerja-manajemen*') ? 'active' : '' }}
                                {{ request()->is('karya-ilmiah-mahasiswa-manajemen*') ? 'active' : '' }}
                                {{ request()->is('produk-jasa-mahasiswa-manajemen*') ? 'active' : '' }}
                                {{ request()->is('luaran-mahasiswa-manajemen*') ? 'active' : '' }}
                                {{ request()->is('luaran-penelitian-manajemen*') ? 'active' : '' }}
                                {{ request()->is('luaran-pkm-manajemen*') ? 'active' : '' }}
                                " aria-current="page" href="{{url('prodi-manajemen')}}">
                                
                                <i class="icon">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                        <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                        <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name">Prodi Manajemen</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('prodimanajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('masa-studi-lulusan-d3manajemen-bisnis*') ? 'active' : '' }} 
                                {{ request()->is('waktu-tunggu-lulusan-d3manajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('kesesuaian-bidang-kerjamanajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('jangkauan-operasi-kerjamanajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('karya-ilmiah-mahasiswamanajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('produk-jasa-mahasiswamanajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('luaran-mahasiswamanajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('luaran-penelitianmanajemen-bisnis*') ? 'active' : '' }}
                                {{ request()->is('luaran-pkmmanajemen-bisnis*') ? 'active' : '' }}" 
                                aria-current="page" href="{{url('prodimanajemen-bisnis')}}">
                                <i class="icon">
                                    <svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24" fill="none">
                                        <path d="M2 5C2 4.44772 2.44772 4 3 4H8.66667H21C21.5523 4 22 4.44772 22 5V8H15.3333H8.66667H2V5Z" fill="currentColor" stroke="currentColor"/>
                                        <path d="M6 8H2V11M6 8V20M6 8H14M6 20H3C2.44772 20 2 19.5523 2 19V11M6 20H14M14 8H22V11M14 8V20M14 20H21C21.5523 20 22 19.5523 22 19V11M2 11H22M2 14H22M2 17H22M10 8V20M18 8V20" stroke="currentColor"/>
                                    </svg>
                                </i>
                                <span class="item-name"><small>Prodi Manajemen Bisnis</small></span>
                            </a>
                        </li>

                        
                        @else
                            Belum Terdaftar
                        @endif
                        
                   
                    

                    





                    <li><hr class="hr-horizontal"></li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">OTHER</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('jurnal')}}">
                            <i class="icon">
                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Publikasi Jurnal</span>
                        </a>
                    </li> --}}
                    <li><hr class="hr-horizontal mb-5"></li>
                </ul>
                
                <!-- Sidebar Menu End -->        </div>
        </div>
        <div class="sidebar-footer">
            
        </div>
    </aside>    
    <main class="main-content">
      <div class="position-relative iq-banner">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
          <div class="container-fluid navbar-inner">
            <a href="{{asset('dashboard/index.html')}}" class="navbar-brand">
                <!--Logo start-->
                <!--logo End-->
                
                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                
                
                
                
                <h4 class="logo-title">Hope UI</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                 <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
                </i>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <span class="mt-2 navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-md-4 pt-2">
                    <p><span id="hari"></span>, <span id="tanggal"></span>&nbsp;<span id="bulan"></span>&nbsp;<span id="tahun"></span>, <span id="waktu"></span></p>
                  </div>
              <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                    <div class="caption ms-3 d-none d-md-block ">
                        <h6 class="mb-0 caption-title">{{AUTH::user()->name}}</h6>
                        @php
                            $users = Auth::user();
                            $prodi_id = $users->prodi_id;
                            $prodi = Prodi::where('id', $prodi_id)->first();
                        @endphp 
                        <p class="mb-0 caption-sub-title">{{$prodi->program}} {{$prodi->nama_prodi}}</p>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    {{-- <li><a class="dropdown-item" href="{{asset('dashboard/app/user-profile.html')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{asset('dashboard/app/user-privacy-setting.html')}}">Privacy Setting</a></li>
                    <li><hr class="dropdown-divider"></li> --}}
                    <li><a class="dropdown-item" href="{{route('logout')}}" data-bs-toggle="modal" data-bs-target="#staticBackdropLive" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>    
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
    </form>


        <!-- Nav Header Component Start -->

@yield('content')
      <!-- Footer Section Start -->
      <footer class="footer">
          <div class="footer-body">
              <ul class="left-panel list-inline mb-0 p-0">
                  <li class="list-inline-item"><a href="{{asset('dashboard/extra/privacy-policy.html')}}">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="{{asset('dashboard/extra/terms-of-service.html')}}">Terms of Use</a></li>
              </ul>
              <div class="right-panel">
                  ©<script>document.write(new Date().getFullYear())</script> Hope UI, Made with
                  <span class="">
                      <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                      </svg>
                  </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->    </main>
      <script type="text/javascript">
        function updateClock() {
            const now = new Date();
            
            document.getElementById('hari').textContent = now.toLocaleDateString(undefined, { weekday: 'long' });
            document.getElementById('tanggal').textContent = now.getDate();
            document.getElementById('bulan').textContent = now.toLocaleDateString(undefined, { month: 'long' });
            document.getElementById('tahun').textContent = now.getFullYear();
            document.getElementById('waktu').textContent = now.toLocaleTimeString();
        }
    
        // Update waktu setiap detik
        setInterval(updateClock, 1000);
    
        // Memastikan tampilan awal sudah terisi
        updateClock();
    </script>

    <!-- Library Bundle Script -->
    <script src="{{asset('js/core/libs.min.js')}}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{asset('js/core/external.min.js')}}"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{asset('js/charts/widgetcharts.js')}}"></script>
    
    <!-- mapchart Script -->
    <script src="{{asset('js/charts/vectore-chart.js')}}"></script>
    <script src="{{asset('js/charts/dashboard.js')}}" ></script>
    
    <!-- fslightbox Script -->
    <script src="{{asset('js/plugins/fslightbox.js')}}"></script>
    
    <!-- Settings Script -->
    <script src="{{asset('js/plugins/setting.js')}}"></script>
    
    <!-- Slider-tab Script -->
    <script src="{{asset('js/plugins/slider-tabs.js')}}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{asset('js/plugins/form-wizard.js')}}"></script>
    
    <!-- AOS Animation Plugin-->
    <script src="{{asset('vendor/aos/dist/aos.js')}}"></script>
    
    <!-- App Script -->
    <script src="{{asset('js/hope-ui.js')}}" defer></script>
    
  </body>
</html>