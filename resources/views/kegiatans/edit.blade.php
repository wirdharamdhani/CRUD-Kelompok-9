<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            <h3>Edit Kegiatan</h3>
            <form action="{{ route('kegiatans.update', $kegiatan->id) }}" method="POST">
                @csrf @method('PUT')
<input type="text" name="kode_kegiatan" value="{{ $kegiatan->kode_kegiatan }}" class="form-control mb-2" required>
<input type="text" name="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" class="form-control mb-2" required>
<input type="text" name="kategori" value="{{ $kegiatan->kategori }}" class="form-control mb-2" required>
<input type="date" name="tanggal" value="{{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('Y-m-d') }}" class="form-control mb-2" required>
<input type="text" name="lokasi" value="{{ $kegiatan->lokasi }}" class="form-control mb-2" required>
<input type="text" name="penanggung_jawab" value="{{ $kegiatan->penanggung_jawab }}" class="form-control mb-2" required>
<textarea name="keterangan" class="form-control mb-3">{{ $kegiatan->keterangan }}</textarea>
<button class="btn btn-warning">Update</button>
<a href="{{ route('kegiatans.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
       </div>
   </body>
</html>