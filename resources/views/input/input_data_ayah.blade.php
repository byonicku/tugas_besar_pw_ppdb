@extends('layout.template')
@section('title', 'Input Data')
@section('content')

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Step 2 of 2</h4>
                    <h5>Data Orang Tua</h5>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"
                            viewBox="0 0 16 16" role="img" aria-label="Warning:"
                            style="max-width: 20px; max-height: 20px">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div>
                            Pastikan data yang dimasukkan sudah benar!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2 mb-5">
            <div class="card w-100">
                <div class="card-body">
                    <form action="{{ url('berkas_ortu1') }}" method="POST">
                        @csrf
                        <div class="row">
                            <h5>Ayah</h5>
                            <div class="col-md-6 border-end">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nama Lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"
                                        placeholder="Tempat Lahir" required>
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama"
                                        placeholder="Agama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="rt" class="form-label">RT</label>
                                            <input type="text" class="form-control" id="rt" name="rt"
                                                placeholder="RT" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="rw" class="form-label">RW</label>
                                            <input type="text" class="form-control" id="rw" name="rw"
                                                placeholder="RW" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi"
                                        placeholder="Provinsi" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label">Nomor Telepon</label>
                                        <input type="number" class="form-control" id="no_telp" name="no_telp"
                                            placeholder="Nomor Telepon" required>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kota" class="form-label">Kabupaten/Kota</label>
                                            <input type="text" class="form-control" id="kota" name="kota"
                                                placeholder="Kabupaten/Kota" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                            <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                                placeholder="Kecamatan" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kelurahan" class="form-label">Kelurahan/Desa</label>
                                            <input type="text" class="form-control" id="kelurahan" name="kelurahan"
                                                placeholder="Kelurahan/Desa" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="kode_pos" class="form-label">Kode Pos</label>
                                            <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                                                placeholder="Kode Pos" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-select" id="pendidikan_terakhir" name="pendidikan_terakhir"
                                        required>
                                        <option selected hidden disabled value="">Pendidikan Terakhir</option>
                                        <option value="SD">SD</option>
                                        <option value="SLTP">SLTP</option>
                                        <option value="SLTA">SLTA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                        placeholder="Pekerjaan" required>
                                </div>

                                <div class="mb-3">
                                    <label for="penghasilan" class="form-label">Penghasilan</label>
                                    <input type="text" class="form-control" id="penghasilan" name="penghasilan"
                                        placeholder="Penghasilan" required>
                                </div>
                                <hr>
                                <button type="submit" class="btn shadow-sm w-100"
                                    style="background-color: #CCFFD1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
