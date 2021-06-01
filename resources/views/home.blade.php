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
            <a class="navbar-brand" href="{{url('')}}"><img src="{{ asset('image/rpl-logo.png') }}" alt="" width="148" height="68"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('') }}">
                            {{ Auth::user()->name }}
                        </a>
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

    <section class="jumbotron text-center">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome !!!') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
        </div>
        <h1 class="display-4">Universitas Kristen Duta Wacana</h1>
        <hr class="my-4">
        <p class="lead">Jl. dr. Wahidin Sudirohusodo no. 5-25 Yogyakarta, Indonesia – 55224</p>
        <p>Telp. +62274563929 | Fax: +62274513235</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="0.5" d="M0,32L11.4,42.7C22.9,53,46,75,69,96C91.4,117,114,139,137,149.3C160,160,183,160,206,138.7C228.6,117,251,75,274,69.3C297.1,64,320,96,343,112C365.7,128,389,128,411,122.7C434.3,117,457,107,480,128C502.9,149,526,203,549,208C571.4,213,594,171,617,128C640,85,663,43,686,64C708.6,85,731,171,754,213.3C777.1,256,800,256,823,234.7C845.7,213,869,171,891,144C914.3,117,937,107,960,106.7C982.9,107,1006,117,1029,138.7C1051.4,160,1074,192,1097,181.3C1120,171,1143,117,1166,85.3C1188.6,53,1211,43,1234,42.7C1257.1,43,1280,53,1303,85.3C1325.7,117,1349,171,1371,170.7C1394.3,171,1417,117,1429,90.7L1440,64L1440,320L1428.6,320C1417.1,320,1394,320,1371,320C1348.6,320,1326,320,1303,320C1280,320,1257,320,1234,320C1211.4,320,1189,320,1166,320C1142.9,320,1120,320,1097,320C1074.3,320,1051,320,1029,320C1005.7,320,983,320,960,320C937.1,320,914,320,891,320C868.6,320,846,320,823,320C800,320,777,320,754,320C731.4,320,709,320,686,320C662.9,320,640,320,617,320C594.3,320,571,320,549,320C525.7,320,503,320,480,320C457.1,320,434,320,411,320C388.6,320,366,320,343,320C320,320,297,320,274,320C251.4,320,229,320,206,320C182.9,320,160,320,137,320C114.3,320,91,320,69,320C45.7,320,23,320,11,320L0,320Z"></path></svg>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

</html>