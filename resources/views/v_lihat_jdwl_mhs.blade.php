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
            <a class="navbar-brand" href="{{url('/mahasiswa')}}"><img src="{{ asset('image/rpl-logo.png') }}" alt="" width="148" height="68"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/mahasiswa') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pengajuan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('/mahasiswa/pengajuan_sk/tambah') }}">Surat Keterangan</a></li>
                            <li><a class="dropdown-item" href="{{url('/mahasiswa/pengajuan_prakp/tambah1') }}">Pra Kerja Praktik</a></li>
                            <li><a class="dropdown-item" href="{{url('/mahasiswa/pengajuan_kp/tambah2') }}">Kerja Praktik</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/mahasiswa/jadwal_ujian/lihatjdwl') }}">Jadwal</a>
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
        <p><h1 align ="center">Jadwal Ujian</h1></p><br>
        <form class="form-inline my-2 my-lg-0 ml-auto" method="GET" action="/mahasiswa/jadwal_ujian/searchjdwl">
        <h1 class="mt-2 mr-3 text-muted">Search</h1>
        <input class="form-control mr-sm-2" type="search" name="q" value="@php echo old('cari') @endphp"  placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Search">Cari<i class="fas fa-search" ></i></button>
        </form>
        <br />

        <table class="table table-hover">
        <tr>
        <th>No</th>
        <th>ID Jadwal</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Ruangan</th>
        <th>Pembimbing</th>
        <th>Penguji</th>
        <th>Tanggal</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        </tr>

        <!--@php
        $no=1;
        @endphp-->
        @foreach($jdwl as $no=> $p)
        <tr>
        <th scope="row"><?php echo ++$no + ($jdwl->currentPage()-1)*$jdwl->perPage() ?></th>
        <td>{{ $p->id}}</td>
        <td>{{ $p->nama}}</td>
        <td>{{ $p->nim}}</td>
        <td>{{ $p->ruangan}}</td>
        <td>{{ $p->pembimbing}}</td>
        <td>{{ $p->penguji}}</td>
        <td>{{ $p->jdwl_ujian}}</td>
        <td>{{ $p->jam_mulai}}</td>
        <td>{{ $p->jam_slsai}}</td>
        <td>
            
        </td>
        </tr>
        </tbody>
        @endforeach
        </table>
        <!-- End Table -->


        <!-- Pagination -->
        <!-- Total Data Jadwal: @php echo $jdwl->total() @endphp -->
        @php echo $jdwl->links() @endphp
        <!-- End Pagination -->
    </div>
        
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
