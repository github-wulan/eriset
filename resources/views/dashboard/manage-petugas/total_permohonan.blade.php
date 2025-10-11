<!-- @extends('dashboard.layout.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Total Permohonan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{-- route('dashboard.petugas') --}}">Dashboard Petugas</a></li>
                <li class="breadcrumb-item active">Total Permohonan</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Semua Daftar Permohonan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama Pemohon</th>
                                <th>NIP/NIM</th>
                                <th>Judul Permohonan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            {{-- Data Sampel --}}
                            <tr>
                                <td>Andi Pratama</td>
                                <td>1000000001</td>
                                <td>Surat Izin Penelitian</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>2025/09/20</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Siti Aisyah</td>
                                <td>2000000002</td>
                                <td>Permohonan Data</td>
                                <td><span class="badge bg-success">Disetujui</span></td>
                                <td>2025/09/21</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Budi Santoso</td>
                                <td>3000000003</td>
                                <td>Surat Observasi</td>
                                <td><span class="badge bg-danger">Ditolak</span></td>
                                <td>2025/09/22</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dewi Lestari</td>
                                <td>4000000004</td>
                                <td>Izin Wawancara Narasumber</td>
                                <td><span class="badge bg-success">Disetujui</span></td>
                                <td>2025/09/23</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
 -->

 @extends('dashboard.layout.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Total Permohonan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="#">Dashboard Petugas</a></li>
            <li class="breadcrumb-item active">Total Permohonan</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Semua Daftar Permohonan
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama Pemohon</th>
                            <th>NIP/NIM</th>
                            <th>Judul Permohonan</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Andi Pratama</td>
                            <td>1000000001</td>
                            <td>Surat Izin Penelitian</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>2025/09/20</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Siti Aisyah</td>
                            <td>2000000002</td>
                            <td>Permohonan Data</td>
                            <td><span class="badge bg-success">Disetujui</span></td>
                            <td>2025/09/21</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Budi Santoso</td>
                            <td>3000000003</td>
                            <td>Surat Observasi</td>
                            <td><span class="badge bg-danger">Ditolak</span></td>
                            <td>2025/09/22</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dewi Lestari</td>
                            <td>4000000004</td>
                            <td>Izin Wawancara Narasumber</td>
                            <td><span class="badge bg-success">Disetujui</span></td>
                            <td>2025/09/23</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
