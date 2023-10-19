@extends('layout.template')
@section('title', 'Profile')
@section('content')

<style>
    .img-profile {
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="container">
    <div class="d-flex flex-row">
        @if (!session('user')['registered'])
            <img src="{{ asset('images/default-avatar.jpg') }}" class="img-profile border shadow-sm">
            <div class="container my-auto mx-2">
                <h1 class="text-left"><strong>{{ $user['diri']['name'] }}</strong></h1>
                <h2 class="text-left">Belum isi berkas</h2>
            </div>
        @else
            <img src="{{ asset(session('user')['diri']['foto']) }}" class="img-profile border shadow-sm">
            <div class="container my-auto mx-2">
                <h1 class="text-left"><strong>{{ $user['diri']['name'] }}</strong></h1>
                <h1 class="text-left" style="font-size: 24px"><strong>{{ $user['diri']['jurusan'] }}</strong></h1>
                <h2 class="text-left">{{ $user['no_regis'] }}</h2>
            </div>
        @endif
    </div>
    <hr>
    <h3>Data Diri</h3>
    <div class="row">
        <div class="col-md-6 border-end">
            @if(session('user')['registered'])
            <div class="mb-3">
                <label for="email" class="form-label"><strong>Email</strong></label>
                <p>{{ $user['diri']['email'] }}</p>
            </div>

            <div class="mb-3">
                <label for="tanggallahir" class="form-label"><strong>Tanggal Lahir</strong></label>
                <p>{{ $user['diri']['tanggallahir'] }}</p>
            </div>
            <div class="mb-3">
                <label for="tempatlahir" class="form-label"><strong>Tempat Lahir</strong></label>
                <p>{{ $user['diri']['tempatlahir'] }}</p>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label"><strong>Agama</strong></label>
                <p>{{ $user['diri']['agama'] }}</p>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label"><strong>Alamat</strong></label>
                <p>{{ $user['diri']['alamat'] }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="rt" class="form-label"><strong>RT</strong></label>
                        <p>{{ $user['diri']['rt'] }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="rw" class="form-label"><strong>RW</strong></label>
                        <p>{{ $user['diri']['rw'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="no_telp" class="form-label"><strong>Nomor Telepon</strong></label>
                <p>{{ $user['diri']['no_telp'] }}</p>
            </div>
            <div class="mb-3">
                <label for="provinsi" class="form-label"><strong>Provinsi</strong></label>
                <p>{{ $user['diri']['provinsi'] }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kota" class="form-label"><strong>Kabupaten/Kota</strong></label>
                        <p>{{ $user['diri']['kota'] }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label"><strong>Kecamatan</strong></label>
                        <p>{{ $user['diri']['kecamatan'] }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label"><strong>Kelurahan/Desa</strong></label>
                        <p>{{ $user['diri']['kelurahan'] }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kode_pos" class="form-label"><strong>Kode Pos</strong></label>
                        <p>{{ $user['diri']['kode_pos'] }}</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="asal_smp" class="form-label"><strong>Asal SMP</strong></label>
                <p>{{ $user['diri']['asal_smp'] }}</p>
            </div>
            @else
            <div class="mb-3">
                <label for="email" class="form-label"><strong>Email</strong></label>
                <p>{{ $user['diri']['email'] }}</p>
            </div>
            @endif
        </div>
    </div>
    <hr>
    @if (session('user')['registered'])
        @if (session('user')['wali_picked'])
        <h3>Data Wali</h3>
        <div class="row">
            <div class="col-md-6 border-end">
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Nama Lengkap</strong></label>
                    <p>{{ $user['wali']['name'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="tempatlahir" class="form-label"><strong>Tempat Lahir</strong></label>
                    <p>{{ $user['wali']['tempatlahir'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label"><strong>Agama</strong></label>
                    <p>{{ $user['wali']['agama'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label"><strong>Alamat</strong></label>
                    <p>{{ $user['wali']['alamat'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rt" class="form-label"><strong>RT</strong></label>
                            <p>{{ $user['wali']['rt'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rw" class="form-label"><strong>RW</strong></label>
                            <p>{{ $user['wali']['rw'] }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label"><strong>Nomor Telepon</strong></label>
                        <p>{{ $user['wali']['no_telp'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="provinsi" class="form-label"><strong>Provinsi</strong></label>
                    <p>{{ $user['wali']['provinsi'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kota" class="form-label"><strong>Kabupaten/Kota</strong></label>
                            <p>{{ $user['wali']['kota'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label"><strong>Kecamatan</strong></label>
                            <p>{{ $user['wali']['kecamatan'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kelurahan" class="form-label"><strong>Kelurahan/Desa</strong></label>
                            <p>{{ $user['wali']['kelurahan'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kode_pos" class="form-label"><strong>Kode Pos</strong></label>
                            <p>{{ $user['wali']['kode_pos'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pendidikan_terakhir" class="form-label"><strong>Pendidikan Terakhir</strong></label>
                    <p>{{ $user['wali']['pendidikan_terakhir'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label"><strong>Pekerjaan</strong></label>
                    <p>{{ $user['wali']['pekerjaan'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="penghasilan" class="form-label"><strong>Penghasilan</strong></label>
                    <p>{{ $user['wali']['penghasilan'] }}</p>
                </div>
            </div>
        </div>
        <hr>
        @elseif (session('user')['ibu']['name'] != '')
        <h3>Data Ibu</h3>
        <div class="row">
            <div class="col-md-6 border-end">
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Nama Lengkap</strong></label>
                    <p>{{ $user['ibu']['name'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="tempatlahir" class="form-label"><strong>Tempat Lahir</strong></label>
                    <p>{{ $user['ibu']['tempatlahir'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label"><strong>Agama</strong></label>
                    <p>{{ $user['ibu']['agama'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label"><strong>Alamat</strong></label>
                    <p>{{ $user['ibu']['alamat'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rt" class="form-label"><strong>RT</strong></label>
                            <p>{{ $user['ibu']['rt'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rw" class="form-label"><strong>RW</strong></label>
                            <p>{{ $user['ibu']['rw'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label"><strong>Nomor Telepon</strong></label>
                    <p>{{ $user['ibu']['no_telp'] }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="provinsi" class="form-label"><strong>Provinsi</strong></label>
                    <p>{{ $user['ibu']['provinsi'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kota" class="form-label"><strong>Kabupaten/Kota</strong></label>
                            <p>{{ $user['ibu']['kota'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label"><strong>Kecamatan</strong></label>
                            <p>{{ $user['ibu']['kecamatan'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kelurahan" class="form-label"><strong>Kelurahan/Desa</strong></label>
                            <p>{{ $user['ibu']['kelurahan'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kode_pos" class="form-label"><strong>Kode Pos</strong></label>
                            <p>{{ $user['ibu']['kode_pos'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pendidikan_terakhir" class="form-label"><strong>Pendidikan Terakhir</strong></label>
                    <p>{{ $user['ibu']['pendidikan_terakhir'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label"><strong>Pekerjaan</strong></label>
                    <p>{{ $user['ibu']['pekerjaan'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="penghasilan" class="form-label"><strong>Penghasilan</strong></label>
                    <p>{{ $user['ibu']['penghasilan'] }}</p>
                </div>
            </div>
        </div>
        <hr>
        @else
        <h3>Data Ayah</h3>
        <div class="row">
            <div class="col-md-6 border-end">
                <div class="mb-3">
                    <label for="name" class="form-label"><strong>Nama Lengkap</strong></label>
                    <p>{{ $user['ayah']['name'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="tempatlahir" class="form-label"><strong>Tempat Lahir</strong></label>
                    <p>{{ $user['ayah']['tempatlahir'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label"><strong>Agama</strong></label>
                    <p>{{ $user['ayah']['agama'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label"><strong>Alamat</strong></label>
                    <p>{{ $user['ayah']['alamat'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rt" class="form-label"><strong>RT</strong></label>
                            <p>{{ $user['ayah']['rt'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="rw" class="form-label"><strong>RW</strong></label>
                            <p>{{ $user['ayah']['rw'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label"><strong>Nomor Telepon</strong></label>
                    <p>{{ $user['ibu']['no_telp'] }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="provinsi" class="form-label"><strong>Provinsi</strong></label>
                    <p>{{ $user['ayah']['provinsi'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kota" class="form-label"><strong>Kabupaten/Kota</strong></label>
                            <p>{{ $user['ayah']['kota'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label"><strong>Kecamatan</strong></label>
                            <p>{{ $user['ayah']['kecamatan'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kelurahan" class="form-label"><strong>Kelurahan/Desa</strong></label>
                            <p>{{ $user['ayah']['kelurahan'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kode_pos" class="form-label"><strong>Kode Pos</strong></label>
                            <p>{{ $user['ayah']['kode_pos'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pendidikan_terakhir" class="form-label"><strong>Pendidikan Terakhir</strong></label>
                    <p>{{ $user['ayah']['pendidikan_terakhir'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label"><strong>Pekerjaan</strong></label>
                    <p>{{ $user['ayah']['pekerjaan'] }}</p>
                </div>
                <div class="mb-3">
                    <label for="penghasilan" class="form-label"><strong>Penghasilan</strong></label>
                    <p>{{ $user['ayah']['penghasilan'] }}</p>
                </div>
            </div>
        </div>
        <hr>
        @endif
    @endif
</div>

@endsection
