@extends('dashboard.layout.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Permohonan Pending</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{-- route('dashboard.petugas') --}}">Dashboard Petugas</a></li>
            <li class="breadcrumb-item active">Permohonan Pending</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Permohonan Pending
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
                    <tfoot>
                        <tr>
                            <th>Nama Pemohon</th>
                            <th>NIP/NIM</th>
                            <th>Judul Permohonan</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- Data Sampel --}}
                        <tr>
                            <td>Andi Pratama</td>
                            <td>1000000001</td>
                            <td>Surat Izin Penelitian</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>2025/09/20</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm" title="Verifikasi Permohonan">
                                    <i class="fas fa-check-circle"></i> Verifikasi
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Rian Hidayat</td>
                            <td>5000000005</td>
                            <td>Permohonan Data Internal</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>2025/09/24</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm" title="Verifikasi Permohonan">
                                    <i class="fas fa-check-circle"></i> Verifikasi
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