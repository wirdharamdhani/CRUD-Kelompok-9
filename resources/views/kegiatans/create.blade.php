<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kegiatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Tambah Kegiatan Baru</h3>
    <form action="{{ route('kegiatans.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label>Kode Kegiatan</label>
            <input type="text" name="kode_kegiatan" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Nama Kegiatan</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Upacara">Upacara</option>
                <option value="Perlombaan">Perlombaan</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Seni">Seni</option>
            </select>
        </div>
        <div class="mb-2">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Penanggung Jawab</label>
            <input type="text" name="penanggung_jawab" class="form-control" required>
        </div>
        <div class="mb-2">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kegiatans.index') }}" class="btn btn-secondary">Kembali ke READ</a>
    </form>
</div>
</body>
</html>