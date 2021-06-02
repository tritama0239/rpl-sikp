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
                        <a class="nav-link" href="#">Jadwal</a>
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
                <div class="card-header" align="center"><h3>Pengajuan Pra Kerja Praktik</h3></div>

                <div class="card-body">
                <form method="POST" action="/mahasiswa/pengajuan_prakp/simpan1">
            @csrf
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Semester</label>
                        <select class="form-control" name="semester" id="semester">
                            <option>----</option>
                            <option selected="selected" value="ganjil">Ganjil</option>
                            <option value="genap">Genap</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Tahun Ajaran</label>
                        <select class="form-control" name="tahun" id="tahun">
                            <option>----</option>
                            <option selected="selected" value="2020/2021">2020/2021</option>
                            <option value="2021/2022">2021/2022</option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2024/2025">2024/2025</option>
                            <option value="2025/2026">2025/2026</option>
                            <option value="2026/2027">2026/2027</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Status Pra KP</label>
                        <input type="text" class="form-control" name="sts_prakp" id="sts_prakp" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Tools</label>
                        <input type="text" class="form-control" name="tools" id="tools" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Spesifikasi</label>
                        <input type="text" class="form-control" name="spesifikasi" id="spesifikasi" >
                    </div>

                    <?php
                    if(isset($_GET['alert'])){
                        if($_GET['alert']=="gagal_ukuran"){
                            ?>
                            <div class="alert alert-warning">
                            <strong>Warning!</strong> Ukuran File Terlalu Besar </div>
                            <?php
                        }elseif ($_GET['alert']=="gagal_eksitensi"){
                            ?>
                            <div class="alert alert-warning">
                            <strong>Warning!</strong> Format File Tidak Diperbolehkan </div>
                            <?php
                        }
                        elseif ($_GET['alert']=="simpan"){
                            ?>
                            <div class="alert alert-success">
                            <strong>Success!</strong> Success! </div>
                            <?php
                        }
                    }
                    ?>
                    
                    <form action="upload_dokumen.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Dokumen</label>
                        <input type="file" class="form-control" name="dokumen" id="dokumen" required='required' multiple >
                        <p style="color: red">Format File yang Diperbolehkan .png | .jpeg | .pdf </p>
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Ruang</label>
                        <select class="form-control" name="ruang" id="ruang">
                            <option>----</option>
                            <option selected="selected" value="Harun">Harun</option>
                            <option value="Rudi Budiman">Rudi Budiman</option>
                            <option value="Tasdik">Tasdik</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Lembaga</label>
                        <input type="text" class="form-control" name="lembaga" id="lembaga" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Penguji</label>
                        <input type="text" class="form-control" name="penguji" id="penguji" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Pimpinan</label>
                        <input type="text" class="form-control" name="pimpinan" id="pimpinan" >
                    </div>

                   <div class="form-group">
                        <label for="" class="font-weight-bold">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" >
                    </div>
                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_tlp" id="no_tlp" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold"></label>
                        <input type="hidden" class="form-control" name="sts_verif" id="sts_verif" value="Belum Diverifikasi" readonly>
                    </div>

                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Ajukan</button>
            </form>
            <!-- End Form -->
            
                </div>
            </div>
           
</div>
</section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>