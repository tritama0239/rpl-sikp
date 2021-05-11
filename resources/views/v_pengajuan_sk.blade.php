@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Pengajuan Surat Keterangan</h3></div>

                <div class="card-body">
                <form method="POST" action="/mahasiswa/pengajuan_sk/simpan">
            @csrf
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Semester</label>
                        <input type="text" class="form-control" name="semester" id="semester"  >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Tahun</label>
                        <input type="year" class="form-control" name="tahun" id="tahun" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Lembaga</label>
                        <input type="text" class="form-control" name="lembaga" id="lembaga" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_tlp" id="no_tlp" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" >
                    </div>

                    <div class="form-group">
                        <label for="" class="font-weight-bold">Fax</label>
                        <input type="text" class="form-control" name="fax" id="fax" >
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
                        <label for="" class="font-weight-bold">Status Verifikasi</label>
                        <select class="form-control" name="sts_verif" id="sts_verif">
                            <option value="Belum Diverifikasi">--Belum Diverifikasi--</option>
                        </select>
                    </div>

                    </div>

                </div>
                
                <button type="submit" class="btn btn-primary">Ajukan</button>
            </form>
            <!-- End Form -->
            
                </div>
            </div>
           
</div>
@endsection