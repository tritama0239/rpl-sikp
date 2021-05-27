@extends('layouts.app')

@section('content')
    <div class="container">
        <p><h1 align ="center">Daftar Pengajuan Pra Kerja Praktik</h1></p><br>
        <form class="form-inline my-2 my-lg-0 ml-auto" method="GET" action="/koordinator/pengajuan_prakp/searchprakp">
        <h1 class="mt-2 mr-3 text-muted">Search</h1>
        <input class="form-control mr-sm-2" type="search" name="q" value="@php echo old('cari') @endphp"  placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" data-toggle="tooltip" title="Search">Cari<i class="fas fa-search" ></i></button>
        </form>
        <br />

        <table class="table table-hover">
        <tr>
        <th>No</th>
        <th>ID SK</th>
        <th>Semester</th>
        <th>Tahun</th>
        <th>Status Pra KP</th>
        <th>NIM</th>
        <th>NIK</th>
        <th>Tools</th>
        <th>Spesifikasi</th>
        <th>Dokumen</th>
        <th>Penguji</th>
        <th>Ruang</th>
        <th>Lembaga</th>
        <th>Pimpinan</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Status Verifikasi</th>
        </tr>

        <!--@php
        $no=1;
        @endphp-->
        @foreach($prakp as $no=> $p)
        <tr>
        <th scope="row"><?php echo ++$no + ($prakp->currentPage()-1)*$prakp->perPage() ?></th>
        <td>{{ $p->id}}</td>
        <td>{{ $p->semester}}</td>
        <td>{{ $p->tahun}}</td>
        <td>{{ $p->sts_prakp}}</td>
        <td>{{ $p->nim}}</td>
        <td>{{ $p->nik}}</td>
        <td>{{ $p->tools}}</td>
        <td>{{ $p->spesifikasi}}</td>
        <td>{{ $p->dokumen}}</td>
        <td>{{ $p->penguji}}</td>
        <td>{{ $p->ruang}}</td>
        <td>{{ $p->lembaga}}</td>
        <td>{{ $p->pimpinan}}</td>
        <td>{{ $p->alamat}}</td>
        <td>{{ $p->no_tlp}}</td>
        <td>{{ $p->sts_verif}}</td>
        <td>
            <a href="/koordinator/pengajuan_prakp/editprakp/{{ $p->id }}" class="btn btn-success" data-toggle="tooltip" title="Edit" >Verifikasi</i></a>

        </td>
        </tr>
        </tbody>
        @endforeach
        </table>
        <!-- End Table -->


        <!-- Pagination -->
        <!-- Total Data Pra KP: @php echo $prakp->total() @endphp -->
        @php echo $prakp->links() @endphp
        <!-- End Pagination -->
    </div>
        
@endsection
