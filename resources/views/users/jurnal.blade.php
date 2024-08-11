@if ($instrumen->nama_instrumen == 'LAM Infokom')
    @if ($prodi->program == 'S1')
        S1
    @elseif($prodi->program == 'D3')
        D3
    @else
    Belum Terdaftar
    @endif

        
@elseif($instrumen->nama_instrumen == 'LAMEMBA')
    @if ($prodi->program == 'S1')
        S1
    @elseif($prodi->program == 'D3')
        D3
    @else
        Belum Terdaftar
    @endif
    
@elseif($instrumen->nama_instrumen == 'Belum Terdaftar')
    uahu
@endif



