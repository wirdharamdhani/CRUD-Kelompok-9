<!DOCTYPE html>
<html>
<head>
<title>Detail Kegiatan - Kelompok 9</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { background: #fff5f7; }
    .card-pink { background: white; border-radius: 20px; border: none; box-shadow: 0 4px 15px rgba(176, 48, 96, 0.1); }
    .header-pink { background: #e38ca2; color: white; border-radius: 20px 20px 0 0; padding: 20px; }
    .label { font-weight: bold; color: #a4133c; width: 130px; display: inline-block; }
</style>
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">

    <div class="card card-pink">
        <div class="header-pink text-center">
            <h3>🎀 Detail {{ $kegiatan->kode_kegiatan }} 🎀</h3>
            <small>Kelompok 9 - Informasi Lengkap Kegiatan</small>
        </div>
        
        <div class="card-body p-4">
            <p><span class="label">🏷️ Kode:</span> {{ $kegiatan->kode_kegiatan }}</p>
            <p><span class="label">📝 Nama:</span> {{ $kegiatan->nama_kegiatan }}</p>
            <p><span class="label">📂 Kategori:</span> <span class="badge" style="background:#e38ca2">{{ $kegiatan->kategori }}</span></p>
            <p><span class="label">📅 Tanggal:</span> {{ $kegiatan->tanggal }}</p>
            <p><span class="label">📍 Lokasi:</span> {{ $kegiatan->lokasi }}</p>
            <p><span class="label">👤 Penanggung Jawab:</span> {{ $kegiatan->penanggung_jawab }}</p>
            <hr>
            <p><span class="label">💌 Keterangan:</span><br>
            <div style="background:#fff0f3; padding:15px; border-radius:10px; margin-top:5px;">
                {{ $kegiatan->keterangan }}
            </div>
            </p>

            <div class="text-center mt-4">
                <a href="{{ route('kegiatans.index') }}" class="btn" style="background:#6c757d; color:white; border-radius:20px; padding: 8px 25px;">← Kembali</a>
                <a href="{{ route('kegiatans.edit', $kegiatan->id) }}" class="btn" style="background:#e38ca2; color:white; border-radius:20px; padding: 8px 25px;">✏️ Edit</a>
            </div>
        </div>
    </div>

</div>
</body>
</html>