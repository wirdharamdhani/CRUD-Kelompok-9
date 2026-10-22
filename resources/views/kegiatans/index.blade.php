<!DOCTYPE html>
<html>
<head>
    <title>Read Kegiatan - Kelompok 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('kegiatans.create') }}" class="btn btn-primary btn-sm mb-3">+ Tambah Kegiatan</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
                <th>Penanggung Jawab</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kegiatans as $item)
            <tr>
                <td>{{ $item->kode_kegiatan }}</td>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->penanggung_jawab }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <div class="d-flex gap-1">
                        <a href="{{ route('kegiatans.show', $item->id) }}" class="btn btn-info btn-sm text-white">Show</a>
                        <a href="{{ route('kegiatans.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kegiatans.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $kegiatans->links() }}
</div>
</body>
</html>