<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Dashboard | Sistem Informasi Kerja Praktik</title>
    </head>

    <body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #00cba9">
        <div class="container">
            <a class="navbar-brand" href="{{url('/koordinator')}}"><img src="{{ asset('image/rpl-logo.png') }}" alt="" width="148" height="68"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/koordinator') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Berkas Pengajuan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('/koordinator/pengajuan_sk/lihatsk') }}">Surat Keterangan</a></li>
                            <li><a class="dropdown-item" href="{{url('/koordinator/pengajuan_prakp/lihatprakp') }}">Pra Kerja Praktik</a></li>
                            <li><a class="dropdown-item" href="{{url('/koordinator/pengajuan_kp/lihatkp') }}">Kerja Praktik</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/koordinator/jadwal_ujian/lihatjdwl') }}">Jadwal Ujian</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">List Registrasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Batas Pelaksanaan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> Log Out
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="jumbotron">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Daftar Pengajuan Kerja Praktik</h3></div>

                <div class="card-body">
                <form method="POST" action="/koordinator/pengajuan_kp/updatekp/{{ $kp->id }}">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id" id="id" value="{{ $kp->id }}">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Status Verifikasi</label>
                        <select class="form-control" name="sts_verif" id="sts_verif">
                            <option>--Belum Diverifikasi--</option>
                            <option value="Diterima" @php if(($kp->dokumen)=='Diterima') echo 'selected' @endphp>Terima</option>
                            <option value="Ditolak"@php if(($kp->dokumen)=='Ditolak') echo 'selected' @endphp>Tolak</option>                        
                        </select>
                    </div>

                </div>

            </div>
                
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
            <!-- End Form -->
            
        </div>
    </div>
           
</div>
</section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>

