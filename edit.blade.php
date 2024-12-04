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
                        <li class="breadcrumb-item active" aria-current="page">Edit data</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_guru" value="{{ $guru->nama_guru }}">
                            </div>
                            <div class="form-group">
                                <label for="">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" name="pendidikan_terakhir" value="{{ $guru->pendidikan_terakhir }}">
                            </div>
                            <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" class="form-control" name="nohp_guru" value="{{ $guru->nohp_guru }}">
                            </div>
                            <button type="reset" class="btn btn-danger">reset</button>
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>