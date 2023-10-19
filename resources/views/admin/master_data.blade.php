@extends('layout.template')
@section('title', 'Master Data')
@section('content')

<style>
    /* Style the table */
    table {
        border-collapse: collapse;
        width: 100%;
    }

    /* Style table headers */
    th {
        border: 1px solid #ccc; /* Add a border to the header cells */
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    /* Style table data cells */
    td {
        border: 1px solid #ccc; /* Add a border to the data cells */
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    /* Responsive styles */
    @media only screen and (max-width: 768px) {
        .col-md-6 {
            margin-bottom: 10px;
        }
        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    }
</style>

<div class="container pb-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        Informasi Pengguna
                    </h3>
                </div>
                <div class="col-md-6">
                    <form action="" method="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Nama Pengguna" name="search">
                            <button class="btn btn-outline-secondary" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                  </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row py-3">
                    <div class="col-md-6">
                        <button type="submit" class="btn shadow-sm w-50"
                                    style="background-color: #CCFFD1">Tambah Tagihan Semua</button>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ url('masterdata') }}" class="btn btn-primary">Semua</a>
                        <a href="{{ url('masterdata_bahasa') }}" class="btn btn-secondary">Bahasa</a>
                        <a href="{{ url('masterdata_ipa') }}" class="btn btn-secondary">IPA</a>
                        <a href="{{ url('masterdata_ips') }}" class="btn btn-secondary">IPS</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">Tanggal Daftar</th>
                                <th scope="col">Status Pendaftaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Sample data rows, you can add more rows here -->
                            <tr>
                                <th scope="row">1</th>
                                <td>Nama 1</td>
                                <td>2023-10-01</td>
                                <td>Pending</td>
                                <td><a href="{{ url('profile_siswa') }}">Lihat Detail</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Nama 2</td>
                                <td>2023-11-01</td>
                                <td>Terkonfirmasi</td>
                                <td><a href="#">Lihat Detail</a></td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
