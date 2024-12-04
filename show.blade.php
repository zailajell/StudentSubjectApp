<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('guru.index') }}">Guru</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail data</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-body">
                       <strong>Nama Lengkap :</strong>{{ $guru->nama_guru }}
                       <br>
                       <strong>Pendidikan Terakhir :</strong>{{ $guru->pendidikan_terakhir }}
                       <br>
                        <strong>No Hp :</strong>{{ $guru->nohp_guru }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>