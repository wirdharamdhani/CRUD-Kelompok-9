<!DOCTYPE html>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body>
    <div class="container mt-4">
        <h3>Detail {{ $kegiatan->kode_kegiatan }}</h3>
        <p><b>Nama:</b> {{ $kegiatan->nama_kegiatan }}</p>
        <p><b>Kategori:</b> {{ $kegiatan->kategori }}</p>
        <p><b>Tanggal:</b> {{ $kegiatan->tanggal }}</p>
        <p><b>Lokasi:</b> {{ $kegiatan->lokasi }}</p>
        <p><b>PJ:</b> {{ $kegiatan->penanggung_jawab }}</p>
        <p><b>Keterangan: </b> {{ $kegiatan->keterangan }}</p>
        
        <a href="{{ route('kegiatans.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>