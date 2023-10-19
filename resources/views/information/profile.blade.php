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
                <strong>Email:</strong>
                <p>{{ $user['diri']['email'] }}</p>
            </div>

            <div class="mb-3">
                <strong>Tanggal Lahir:</strong>
                <p>{{ $user['diri']['tanggallahir'] }}</p>
            </div>
            <div class="mb-3">
                <strong>Tempat Lahir:</strong>
                <p>{{ $user['diri']['tempatlahir'] }}</p>
            </div>
            <div class="mb-3">
                <strong>Agama:</strong>
                <p>{{ $user['diri']['agama'] }}</p>
            </div>
            <div class="mb-3">
                <strong>Alamat:</strong>
                <p>{{ $user['diri']['alamat'] }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <strong>RT:</strong>
                        <p>{{ $user['diri']['rt'] }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <strong>RW:</strong>
                        <p>{{ $user['diri']['rw'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <strong>Nomor Telepon:</strong>
                <p>{{ $user['diri']['no_telp'] }}</p>
            </div>
            <div class="mb-3">
                <strong>Provinsi:</strong>
                <p>{{ $user['diri']['provinsi'] }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <strong>Kabupaten/Kota:</strong>
                        <p>{{ $user['diri']['kota'] }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <strong>Kecamatan:</strong>
                        <p>{{ $user['diri']['kecamatan'] }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <strong>Kelurahan/Desa:</strong>
                        <p>{{ $user['diri']['kelurahan'] }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <strong>Kode Pos:</strong>
                        <p>{{ $user['diri']['kode_pos'] }}</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <strong>Asal SMP:</strong>
                <p>{{ $user['diri']['asal_smp'] }}</p>
            </div>
            @else
            <div class="mb-3">
                <strong>Email:</strong>
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
                    <strong>Nama Lengkap:</strong>
                    <p>{{ $user['wali']['name'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Tempat Lahir:</strong>
                    <p>{{ $user['wali']['tempatlahir'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Agama:</strong>
                    <p>{{ $user['wali']['agama'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Alamat:</strong>
                    <p>{{ $user['wali']['alamat'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>RT:</strong>
                            <p>{{ $user['wali']['rt'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>RW:</strong>
                            <p>{{ $user['wali']['rw'] }}</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <strong>Nomor Telepon:</strong>
                        <p>{{ $user['wali']['no_telp'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <strong>Provinsi:</strong>
                    <p>{{ $user['wali']['provinsi'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kabupaten/Kota:</strong>
                            <p>{{ $user['wali']['kota'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kecamatan:</strong>
                            <p>{{ $user['wali']['kecamatan'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kelurahan/Desa:</strong>
                            <p>{{ $user['wali']['kelurahan'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kode Pos:</strong>
                            <p>{{ $user['wali']['kode_pos'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <strong>Pendidikan Terakhir:</strong>
                    <p>{{ $user['wali']['pendidikan_terakhir'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Pekerjaan:</strong>
                    <p>{{ $user['wali']['pekerjaan'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Penghasilan:</strong>
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
                    <strong>Nama Lengkap:</strong>
                    <p>{{ $user['ibu']['name'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Tempat Lahir:</strong>
                    <p>{{ $user['ibu']['tempatlahir'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Agama:</strong>
                    <p>{{ $user['ibu']['agama'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Alamat:</strong>
                    <p>{{ $user['ibu']['alamat'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>RT:</strong>
                            <p>{{ $user['ibu']['rt'] }}</p>
                        </div>
                    </div>
                    <div class "col-md-6">
                        <div class="mb-3">
                            <strong>RW:</strong>
                            <p>{{ $user['ibu']['rw'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <strong>Nomor Telepon:</strong>
                    <p>{{ $user['ibu']['no_telp'] }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <strong>Provinsi:</strong>
                    <p>{{ $user['ibu']['provinsi'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kabupaten/Kota:</strong>
                            <p>{{ $user['ibu']['kota'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kecamatan:</strong>
                            <p>{{ $user['ibu']['kecamatan'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kelurahan/Desa:</strong>
                            <p>{{ $user['ibu']['kelurahan'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kode Pos:</strong>
                            <p>{{ $user['ibu']['kode_pos'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <strong>Pendidikan Terakhir:</strong>
                    <p>{{ $user['ibu']['pendidikan_terakhir'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Pekerjaan:</strong>
                    <p>{{ $user['ibu']['pekerjaan'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Penghasilan:</strong>
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
                    <strong>Nama Lengkap:</strong>
                    <p>{{ $user['ayah']['name'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Tempat Lahir:</strong>
                    <p>{{ $user['ayah']['tempatlahir'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Agama:</strong>
                    <p>{{ $user['ayah']['agama'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Alamat:</strong>
                    <p>{{ $user['ayah']['alamat'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>RT:</strong>
                            <p>{{ $user['ayah']['rt'] }}</p>
                        </div>
                    </div>
                    <div class "col-md-6">
                        <div class="mb-3">
                            <strong>RW:</strong>
                            <p>{{ $user['ayah']['rw'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <strong>Nomor Telepon:</strong>
                    <p>{{ $user['ibu']['no_telp'] }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <strong>Provinsi:</strong>
                    <p>{{ $user['ayah']['provinsi'] }}</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kabupaten/Kota:</strong>
                            <p>{{ $user['ayah']['kota'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kecamatan:</strong>
                            <p>{{ $user['ayah']['kecamatan'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kelurahan/Desa:</strong>
                            <p>{{ $user['ayah']['kelurahan'] }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <strong>Kode Pos:</strong>
                            <p>{{ $user['ayah']['kode_pos'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <strong>Pendidikan Terakhir:</strong>
                    <p>{{ $user['ayah']['pendidikan_terakhir'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Pekerjaan:</strong>
                    <p>{{ $user['ayah']['pekerjaan'] }}</p>
                </div>
                <div class="mb-3">
                    <strong>Penghasilan:</strong>
                    <p>{{ $user['ayah']['penghasilan'] }}</p>
                </div>
            </div>
        </div>
        <hr>
        @endif
    @endif
</div>

@endsection
