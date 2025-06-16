@extends('layouts/app')
@section('content')

<!-- page Heading -->
<h1 class="h3 mb-4 text-gray-800">
   <i class="fas fa-tasks mr-2"></i>
   {{$title}}
</h1>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <!-- Tombol Tambah di kiri -->
        <a href="" class="btn btn-sm btn-primary">
            <i class="fas fa-plus mr-2"></i>    
            Tambah Data
        </a>

        <!-- Tombol Export di kanan -->
        <div>
            <a href="" class="btn btn-sm btn-success">
                <i class="fas fa-file-excel mr-2"></i>    
                File Excel
            </a>
            <a href="" class="btn btn-sm btn-danger">
                <i class="fas fa-file-pdf mr-2"></i>    
                File PDF
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white text-center">
                    <tr>
                        <th>Nama User</th>
                        <th>Nama Ruangan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Selesai</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>Tiger Nixon</td>
                        <td>Auditorium</td>
                        <td>2025/04/25</td>
                        <td>2025/04/28</td>
                        <td>13.00</td>
                        <td>16.00</td>
                        <td>Digunakan Untuk JKB Fest</td>
                        <td>
                            <span class="badge badge-success badge-pill">Available</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
