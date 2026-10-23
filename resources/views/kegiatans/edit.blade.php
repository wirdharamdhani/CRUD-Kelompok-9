<!DOCTYPE html>
<html>
<head>
<title>Edit Kegiatan - Kelompok 9</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { background: #fff5f7; }
    .card-pink { background: white; border-radius: 20px; border: none; box-shadow: 0 4px 15px rgba(176, 48, 96, 0.1); }
    .header-pink { background: #e38ca2; color: white; border-radius: 20px 20px 0 0; padding: 20px; }
    .form-control { border-radius: 12px; border: 1.5px solid #f8c8d0; }
    .form-control:focus { border-color: #e38ca2; box-shadow: 0 0 0 0.2rem rgba(227,140,162,0.25); }
    label { font-weight: 600; color: #a4133c; font-size: 14px; margin-bottom: 4px; }
</style>
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">

    <div class="card card-pink">
        <div class="header-pink text-center">
            <h3>🎀 Edit Kegiatan 🎀</h3>
            <small>Kelompok 9 - Ubah Data Kegiatan</small>
        </div>
        
        <div class="card-body p-4">
            <form action="{{ route('kegiatans.update', $kegiatan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>🏷️ Kode Kegiatan</label>
                        <input type="text" name="kode_kegiatan" class="form-control" value="{{ $kegiatan->kode_kegiatan }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>📂 Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="{{ $kegiatan->kategori }}" placeholder="Upacara / Lomba / dll" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>📝 Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control" value="{{ $kegiatan->nama_kegiatan }}" required>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>📅 Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $kegiatan->tanggal }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>📍 Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" value="{{ $kegiatan->lokasi }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label>👤 Penanggung Jawab</label>
                    <input type="text" name="penanggung_jawab" class="form-control" value="{{ $kegiatan->penanggung_jawab }}" required>
                </div>

                <div class="mb-3">
                    <label>💌 Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="4">{{ $kegiatan->keterangan }}</textarea>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn" style="background:#e38ca2; color:white; border-radius:20px; padding: 8px 30px; font-weight:bold;">✨ Update ✨</button>
                    <a href="{{ route('kegiatans.index') }}" class="btn" style="background:#6c757d; color:white; border-radius:20px; padding: 8px 25px;">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>