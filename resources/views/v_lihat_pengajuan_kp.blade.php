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
                        <a class="nav-link" href="{{url('/koordinator/list_registrasi/lihatregis') }}">List Registrasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/koordinator/batas_pelaksanaan/lihatbatas') }}">Batas Pelaksanaan</a>
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
        <p><h1 align ="center">Daftar Pengajuan Kerja Praktik</h1></p><br>
        <form class="form-inline my-2 my-lg-0 ml-auto" method="GET" action="/koordinator/pengajuan_kp/searchkp">
        <h1 class="mt-2 mr-3 text-muted">Search</h1>
        <input class="form-control mr-sm-2" type="search" name="q" value="@php echo old('cari') @endphp"  placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Search">Cari<i class="fas fa-search" ></i></button>
        </form>
        <br />

        <table class="table table-hover">
        <tr>
        <th>No</th>
        <th>ID</th>
        <th>Semester</th>
        <th>Tahun</th>
        <th>Judul KP</th>
        <th>Status KP</th>
        <th>NIM</th>
        <th>NIK</th>
        <th>Tools</th>
        <th>Spesifikasi</th>
        <th>Dokumen</th>
        <th></th>
        <th>Penguji</th>
        <th>Ruang</th>
        <th>Lembaga</th>
        <th>Pimpinan</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Status Ujian</th>
        <th>Tanggal Ujian</th>
        <th>Status Verifikasi</th>
        </tr>

        <!--@php
        $no=1;
        @endphp-->
        @foreach($kp as $no=> $p)
        <tr>
        <th scope="row"><?php echo ++$no + ($kp->currentPage()-1)*$kp->perPage() ?></th>
        <td>{{ $p->id}}</td>
        <td>{{ $p->semester}}</td>
        <td>{{ $p->tahun}}</td>
        <td>{{ $p->judul_kp}}</td>
        <td>{{ $p->sts_kp}}</td>
        <td>{{ $p->nim}}</td>
        <td>{{ $p->nik}}</td>
        <td>{{ $p->tools}}</td>
        <td>{{ $p->spesifikasi}}</td>
        <td>{{ $p->dokumen}}</td>
        <td>
            <a href="/koordinator/pengajuan_kp/opendokumen/{{$p->dokumen }}" target="_blank" class="btn btn-primary">View<span class="glyphicon glyphicon-eye-open"></a>
        </td>
        <td>{{ $p->penguji}}</td>
        <td>{{ $p->ruang}}</td>
        <td>{{ $p->lembaga}}</td>
        <td>{{ $p->pimpinan}}</td>
        <td>{{ $p->alamat}}</td>
        <td>{{ $p->no_tlp}}</td>
        <td>{{ $p->sts_ujian}}</td>
        <td>{{ $p->jdwl_ujian}}</td>
        <td>{{ $p->sts_verif}}</td>
        <td>
            <a href="/koordinator/pengajuan_kp/editkp/{{ $p->id }}" class="btn btn-success" data-toggle="tooltip" title="Edit" >Verifikasi</i></a>

        </td>
        </tr>
        </tbody>
        @endforeach
        </table>
        <!-- End Table -->


        <!-- Pagination -->
        <!-- Total Data Pra KP: @php echo $kp->total() @endphp -->
        @php echo $kp->links() @endphp
        <!-- End Pagination -->
    </div>
        
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
