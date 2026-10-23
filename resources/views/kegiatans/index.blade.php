<!DOCTYPE html>
<html>
<head>
    <title>Read Kegiatan - Kelompok 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    body { background: #fff0f6 !important; }
    h3 { color: #ff2e6a !important; font-weight: 800; }
    h3::before { content: "🎀 "; }

    
    .btn-primary { 
        background: #ff5c8d !important; 
        border-color: #ff5c8d !important; 
        border-radius: 20px !important;
        box-shadow: 0 4px 10px rgba(255,92,141,0.3);
    }
    .btn-primary:hover { background: #ff2e6a !important; }

    
    .table thead, .table-bordered thead tr, .table-striped thead tr {
        background: #ff8fab !important;
        color: white !important;
    }
    .table thead th { 
        background: #ff8fab !important; 
        color: white !important; 
        border: none !important;
        font-weight: 600;
    }

    
    .container { 
        background: white; 
        padding: 20px; 
        border-radius: 20px; 
        box-shadow: 0 8px 25px rgba(255,92,141,0.15);
        margin-top: 20px;
    }

    
    .btn-info { background: #a2d2ff !important; border: none !important; }
    .btn-warning { background: #ffafcc !important; border: none !important; color: #5a189a !important; }
    .btn-danger { background: #ff5c8d !important; border: none !important; }

    
    .alert-success { background: #ffc2d1 !important; border: none !important; color: #a4133c !important; border-radius: 15px !important; }
</style>
</head>
<body>
<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 style="font-weight:bold; margin-bottom:5px; color:#a4133c;">
     Manajemen Kegiatan Sekolah 🎀
</h3>
    <p style="color:#888; margin-bottom:20px;">Kelompok 9 - Daftar Kegiatan</p>

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
      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal{{ $item->id }}">
        Delete
      </button>
    </div>

    <!-- MODAL HAPUS CANTIK PINK + 2 PITA -->
    <div class="modal fade" id="hapusModal{{ $item->id }}" tabindex="-1">

      <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content" style="border-radius:20px; border:none;">

          <div class="modal-header" style="background:#e38ca2; color:white; border-radius:20px 20px 0 0; justify-content:center;">
            <h5 class="modal-title">🎀 Yakin Mau Hapus? 🎀</h5>

          </div>


          <div class="modal-body text-center p-4">
            <p>Mau hapus <b>{{ $item->nama_kegiatan }}</b><br>Kode: {{ $item->kode_kegiatan }}?</p>
            <p style="font-size:12px; color:#888;">Data tidak bisa dikembalikan lagi!</p>

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius:20px;">Cancel</button>
           
            <form action="{{ route('kegiatans.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')


                <button type="submit" class="btn" style="background:#e38ca2; color:white; border-radius:20px;">💔 Ya, Hapus!</button>
            </form>
          </div>
        </div>
      </div>
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