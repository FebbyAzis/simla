Register berhasil, silakan login kembali untuk memasuki halaman website 
<a class="btn btn-info" href="{{route('logout')}}" data-bs-toggle="modal" 
data-bs-target="#staticBackdropLive" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">Login</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>