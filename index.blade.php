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
                <div class="d-flex justify-content-between mb-3 mt-5">
                    <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah data</a>
                    <form action="" class="d-flex">
                        <input type="text" name="search" class="form-control me-2" placeholder="Cari guru" style="width: 200px">
                        <button type="submit" class="btn btn-primary ml-3">Cari</button>
                    </form>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Pendidikan Terakhir</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($guru as $item)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_guru }}</td>
                                <td>{{ $item->pendidikan_terakhir }}</td>
                                <td>{{ $item->nohp_guru }}</td>
                                <td>
                                    <form action="{{ route('guru.destroy',$item) }}" onsubmit="return confirm('apakah anda yakin akan menghapus data guru {{ $item->nama_lengkap }}');" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('guru.show', $item) }}" class="btn btn-secondary">Detail</a>
                                        <a href="{{ route('guru.edit',$item) }}" class="btn btn-primary">Edit</a>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data guru.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    {{ $guru->links('pagination::bootstrap-5') }}
                </table>
            </div>
        </div>
    </div>
</body>
</html>