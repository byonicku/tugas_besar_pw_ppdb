@extends('layout.template')
@section('title', 'Pembayaran')
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

    .bayar-btn {
        vertical-align: middle;
    }
</style>


<div class="container mb-3">
    <div class="card">
        <div class="card-header">
            <h4>Tagihan Pembayaran</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tagihan</th>
                        <th scope="col">Tanggal Awal</th>
                        <th scope="col">Tanggal Akhir</th>
                        <th scope="col">Jumlah Bayar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data rows, you can add more rows here -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Tagihan 1</td>
                        <td>2023-10-01</td>
                        <td>2023-10-31</td>
                        <td>Rp 500.00</td>
                        <td><button class="btn btn-primary bayar-btn">Bayar</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Tagihan 2</td>
                        <td>2023-11-01</td>
                        <td>2023-11-30</td>
                        <td>Rp 600.00</td>
                        <td><button class="btn btn-primary bayar-btn">Bayar</button></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <h4>History Pembayaran</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tagihan</th>
                        <th scope="col">Tanggal Bayar</th>
                        <th scope="col">Metode Bayar</th>
                        <th scope="col">Jumlah Bayar</th>
                        <th scope="col">Denda</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data rows, you can add more rows here -->
                    <tr>
                        <th scope="row">1</th>
                        <td>Tagihan 1</td>
                        <td>2023-10-15</td>
                        <td>Transfer Bank</td>
                        <td>Rp 500.00</td>
                        <td>Rp 0.00</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Tagihan 2</td>
                        <td>2023-11-15</td>
                        <td>Kartu Kredit</td>
                        <td>Rp 600.00</td>
                        <td>Rp 10.00</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
