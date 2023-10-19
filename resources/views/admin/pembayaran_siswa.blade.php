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
            border: 1px solid #ccc;
            /* Add a border to the header cells */
            padding: 8px;
            text-align: center;
            vertical-align: middle;
        }

        /* Style table data cells */
        td {
            border: 1px solid #ccc;
            /* Add a border to the data cells */
            padding: 8px;
            text-align: center;
            vertical-align: middle;
        }

        .bayar-btn {
            vertical-align: middle;
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>
                    Informasi Pengguna
                </h3>
            </div>
            <div class="card-body">
                <div class="container d-flex flex-column">
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <a href="{{ url('profile_siswa') }}" class="btn btn-secondary">Semua</a>
                            <a href="{{ url('pembayaran_siswa') }}" class="btn btn-primary">Pembayaran</a>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="submit" class="btn shadow-sm w-50"
                                        style="background-color: #CCFFD1">Tambah Tagihan</button>
                        </div>
                    </div>
                    <div class="row">
                        <h4>Tagihan Pembayaran</h4>
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
                                    <td><button class="btn btn-primary bayar-btn" data-bs-toggle="modal"
                                            data-bs-target="#detail">Lihat Detail</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Tagihan 2</td>
                                    <td>2023-11-01</td>
                                    <td>2023-11-30</td>
                                    <td>Rp 600.00</td>
                                    <td><button class="btn btn-primary bayar-btn" data-bs-toggle="modal"
                                            data-bs-target="#detail">Lihat Detail</button></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <h4>History Pembayaran</h4>
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
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="detail" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bayarModalLabel">Form Pembayaran</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-group">
                            <label for="nama_rekening">Nama Rekening Pengirim</label>
                            <input type="text" class="form-control" id="nama_rekening"
                                placeholder="Nama Rekening Pengirim" disabled value="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_bayar">Tanggal Bayar</label>
                            <input type="date" class="form-control" id="tanggal_bayar" disabled value="2023-10-15">
                        </div>
                        <div class="form-group">
                            <label for="metode_pembayaran">Metode Pembayaran</label>
                            <input type="text" class="form-control" id="metode_pembayaran" disabled value="Transfer Bank">
                        </div>
                        <div class="form-group">
                            <label for="bukti_pembayaran">Bukti Pembayaran</label>
                            <div>
                                <img src="https://via.placeholder.com/150x150.png?text=Bukti+Pembayaran" alt="Bukti Pembayaran">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
@endsection
