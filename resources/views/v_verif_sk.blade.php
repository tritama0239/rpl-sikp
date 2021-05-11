@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h3>Daftar Pengajuan Surat Keterangan Kerja Praktik</h3></div>

                <div class="card-body">
                <form method="POST" action="/koordinator/pengajuan_sk/updatesk/{{ $sk->id }}">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id" id="id" value="{{ $sk->id }}">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="" class="font-weight-bold">Status Verifikasi</label>
                        <select class="form-control" name="sts_verif" id="sts_verif">
                            <option>--Belum Diverifikasi--</option>
                            <option value="Diterima" @php if(($sk->dokumen)=='Diterima') echo 'selected' @endphp>Diterima</option>
                            <option value="Ditolak"@php if(($sk->dokumen)=='Ditolak') echo 'selected' @endphp>Ditolak</option>                        
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
@endsection
