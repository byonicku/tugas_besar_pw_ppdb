<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$cities = [
    'Banda Aceh',
    'Langsa',
    'Lhokseumawe',
    'Sabang',
    'Subulussalam',
    'Denpasar',
    'Pangkalpinang',
    'Cilegon',
    'Serang',
    'Tangerang Selatan',
    'Tangerang',
    'Bengkulu',
    'Yogyakarta',
    'Gorontalo',
    'Jakarta Barat',
    'Jakarta Pusat',
    'Jakarta Selatan',
    'Jakarta Timur',
    'Jakarta Utara',
    'Sungai Penuh',
    'Jambi',
    'Bandung',
    'Bekasi',
    'Bogor',
    'Cimahi',
    'Cirebon',
    'Depok',
    'Sukabumi',
    'Tasikmalaya',
    'Banjar',
    'Magelang',
    'Pekalongan',
    'Salatiga',
    'Semarang',
    'Surakarta',
    'Tegal',
    'Batu',
    'Blitar',
    'Kediri',
    'Madiun',
    'Malang',
    'Mojokerto',
    'Pasuruan',
    'Probolinggo',
    'Surabaya',
    'Pontianak',
    'Singkawang',
    'Banjarbaru',
    'Banjarmasin',
    'Palangka Raya',
    'Balikpapan',
    'Bontang',
    'Samarinda',
    'Nusantara',
    'Tarakan',
    'Batam',
    'Tanjungpinang',
    'Bandar Lampung',
    'Metro',
    'Ternate',
    'Tidore Kepulauan',
    'Ambon',
    'Tual',
    'Bima',
    'Mataram',
    'Kupang',
    'Sorong',
    'Jayapura',
    'Dumai',
    'Pekanbaru',
    'Makassar',
    'Palopo',
    'Parepare',
    'Palu',
    'Baubau',
    'Kendari',
    'Bitung',
    'Kotamobagu',
    'Manado',
    'Tomohon',
    'Bukittinggi',
    'Padang',
    'Padang Panjang',
    'Pariaman',
    'Payakumbuh',
    'Sawahlunto',
    'Solok',
    'Lubuklinggau',
    'Pagar Alam',
    'Palembang',
    'Prabumulih',
    'Binjai',
    'Gunungsitoli',
    'Medan',
    'Padangsidimpuan',
    'Pematangsiantar',
    'Sibolga',
    'Tanjungbalai',
    'Tebing Tinggi',
];

$provinces = [
    'Aceh',
    'Bali',
    'Bangka Belitung',
    'Banten',
    'Bengkulu',
    'Daerah Istimewa Yogyakarta',
    'Gorontalo',
    'Jakarta',
    'Jambi',
    'Jawa Barat',
    'Jawa Tengah',
    'Jawa Timur',
    'Kalimantan Barat',
    'Kalimantan Selatan',
    'Kalimantan Tengah',
    'Kalimantan Timur',
    'Kalimantan Utara',
    'Kepulauan Riau',
    'Lampung',
    'Maluku Utara',
    'Maluku',
    'Nusa Tenggara Barat',
    'Nusa Tenggara Timur',
    'Papua Barat Daya',
    'Papua',
    'Riau',
    'Sulawesi Selatan',
    'Sulawesi Tengah',
    'Sulawesi Tenggara',
    'Sulawesi Utara',
    'Sumatera Barat',
    'Sumatera Selatan',
    'Sumatera Utara',
];

$user = [
    'username' => '',
    'password' => '',
    'registered' => false,
    'wali_picked' => false,
    'no_regis' => 0,
    'diri' => [
        'name' => 'Placeholder',
        'email' => 'Placeholder',
        'tanggallahir' => 'Placeholder',
        'tempatlahir' => 'Placeholder',
        'agama' => 'Placeholder',
        'alamat' => 'Placeholder',
        'rt' => 'Placeholder',
        'rw' => 'Placeholder',
        'no_telp' => 'Placeholder',
        'provinsi' => 'Placeholder',
        'kota' => 'Placeholder',
        'kecamatan' => 'Placeholder',
        'kelurahan' => 'Placeholder',
        'kode_pos' => 'Placeholder',
        'asal_smp' => 'Placeholder',
        'jurusan' => 'Placeholder',
        'foto' => 'Placeholder',
        'foto_dir' => 'Placeholder',
    ],
    'ayah' => [
        'name' => 'Placeholder',
        'email' => 'Placeholder',
        'tempatlahir' => 'Placeholder',
        'agama' => 'Placeholder',
        'alamat' => 'Placeholder',
        'rt' => 'Placeholder',
        'rw' => 'Placeholder',
        'no_telp' => 'Placeholder',
        'provinsi' => 'Placeholder',
        'kota' => 'Placeholder',
        'kecamatan' => 'Placeholder',
        'kelurahan' => 'Placeholder',
        'kode_pos' => 'Placeholder',
        'pekerjaan' => 'Placeholder',
        'pendidikan_terakhir' => 'Placeholder',
        'penghasilan' => 'Placeholder',
    ],
    'ibu' => [
        'name' => 'Placeholder',
        'email' => 'Placeholder',
        'tempatlahir' => 'Placeholder',
        'agama' => 'Placeholder',
        'alamat' => 'Placeholder',
        'rt' => 'Placeholder',
        'rw' => 'Placeholder',
        'no_telp' => 'Placeholder',
        'provinsi' => 'Placeholder',
        'kota' => 'Placeholder',
        'kecamatan' => 'Placeholder',
        'kelurahan' => 'Placeholder',
        'kode_pos' => 'Placeholder',
        'pekerjaan' => 'Placeholder',
        'pendidikan_terakhir' => 'Placeholder',
        'penghasilan' => 'Placeholder',
    ],
    'wali' => [
        'name' => 'Placeholder',
        'email' => 'Placeholder',
        'tempatlahir' => 'Placeholder',
        'agama' => 'Placeholder',
        'alamat' => 'Placeholder',
        'rt' => 'Placeholder',
        'rw' => 'Placeholder',
        'no_telp' => 'Placeholder',
        'provinsi' => 'Placeholder',
        'kota' => 'Placeholder',
        'kecamatan' => 'Placeholder',
        'kelurahan' => 'Placeholder',
        'kode_pos' => 'Placeholder',
        'pekerjaan' => 'Placeholder',
        'pendidikan_terakhir' => 'Placeholder',
        'penghasilan' => 'Placeholder',
    ],
];

$admin = [
    'user' => 'admin',
    'pass' => 'admin',
];

/*
0 = guest;
1 = user;
2 = admin;
*/

session(['loggedIn' => 0, 'user' => $user]);

Route::get('/', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/information/home', ['state' => $loggedIn]);
});

Route::get('/profile', function () use ($user) {
    $loggedIn = session('loggedIn', 0);
    return view('/information/profile',
    ['user' => session('user'),
    'state' => $loggedIn,
    'wali' => $user['wali_picked'],]);
});

Route::get('/home', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/information/home', ['state' => $loggedIn]);
});

Route::get('/login', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/auth/login', ['state' => $loggedIn, 'error' => '']);
});

Route::post('/login', function () {
    // Check if the submitted username and password match the stored user data
    if ($_POST['username'] === session('user')['username'] && $_POST['password'] === session('user')['password']) {
        session(['loggedIn' => 1, 'user' => session('user')]);
        return redirect('/home');
    } else if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin'){
        session(['loggedIn' => 2, 'user' => session('user')]);
        return redirect('/home');
    } else {
        return view('/auth/login', ['state' => 0, 'error' => 'Invalid username or password!']);
    }
});

Route::get('/register', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/auth/register', ['state' => $loggedIn]);
});

Route::post('/register', function () use (&$user) {
    // Check if the submitted username already exists
    if ($_POST['username'] === $user['username']) {
        return view('/auth/register', ['state' => 0, 'error' => 'Username already exists!']);
    } else {
        // Add the new user to the $user array
        $user['diri']['name'] = $_POST['nama'];
        $user['diri']['email'] = $_POST['email'];
        $user['username'] = $_POST['username'];
        $user['password'] = $_POST['password'];
        session(['loggedIn' => 0, 'user' => $user]);
        return redirect('/login');
    }
});

Route::get('/logout', function () {
    if (session('user')['registered']) {
        $photoPath = public_path(session('user')['diri']['foto']);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }
    }

    session()->forget('loggedIn');
    session()->forget('user');
    return redirect('/home');
});

Route::get('/pembayaran', function () {
    $loggedIn = session('loggedIn', 0);
    if (!session('loggedIn', 1)) {
        return redirect('/');
    }
    return view('/transaction/pembayaran', ['state' => $loggedIn]);
});

Route::get('/berkas', function () use ($cities, $provinces) {
    $loggedIn = session('loggedIn', 0);
    if (!session('loggedIn', 1)) {
        return redirect('/');
    }
    if (session('user')['registered']) {
        return redirect('/success_already');
    }
    return view('/input/input_data_diri', ['state' => $loggedIn, 'cities' => $cities, 'provinces' => $provinces]);
});

Route::post('/berkas', function () use (&$user) {
    $userData = session('user', []);
    // Update the 'diri' data in the $user array with the submitted form data
    $userData['diri']['name'] = $_POST['name'];
    $userData['diri']['tempatlahir'] = $_POST['tempatlahir'];
    $userData['diri']['tanggallahir'] = $_POST['tanggallahir'];
    $userData['diri']['jenis_kelamin'] = $_POST['jenis_kelamin'];
    $userData['diri']['alamat'] = $_POST['alamat'];
    $userData['diri']['agama'] = $_POST['agama'];
    $userData['diri']['rt'] = $_POST['rt'];
    $userData['diri']['rw'] = $_POST['rw'];
    $userData['diri']['no_telp'] = $_POST['no_telp'];
    $userData['diri']['provinsi'] = $_POST['provinsi'];
    $userData['diri']['kota'] = $_POST['kota'];
    $userData['diri']['kecamatan'] = $_POST['kecamatan'];
    $userData['diri']['kelurahan'] = $_POST['kelurahan'];
    $userData['diri']['kode_pos'] = $_POST['kode_pos'];
    $userData['diri']['asal_smp'] = $_POST['asal_smp'];
    $userData['diri']['jurusan'] = $_POST['jurusan'];

    $pasFoto = $_FILES['foto'];
    if (isset($pasFoto)) {
        $tmpFile = $pasFoto['tmp_name'];
        $folderTujuan = "../public/images/";
        $directory = "images/";
        $namaFile = $pasFoto['name'];

        $move = $folderTujuan . $namaFile;
        $userData['diri']['foto'] = $directory . $namaFile;
        $userData['diri']['foto_dir'] = $folderTujuan . $namaFile;

        if (!move_uploaded_file($tmpFile, $move)) {
            die("Upload gagal!");
        }
    } else {
        die("No file uploaded.");
    }

    $which = $_POST['choose'];
    if ($which == 'wali') {
        $userData['diri']['wali'] = true;
    }

    session(['loggedIn' => 1, 'user' => $userData]);

    if ($which == 'Wali') {
        return redirect('/berkas_ortu3');
    } else if ($which == 'Ayah') {
        return redirect('/berkas_ortu1');
    } else if ($which == 'Ibu') {
        return redirect('/berkas_ortu2');
    }
});

Route::get('/berkas_ortu1', function () use ($cities, $provinces) {
    $loggedIn = session('loggedIn', 0);
    return view('/input/input_data_ayah', ['state' => $loggedIn, 'cities' => $cities, 'provinces' => $provinces]);
});

Route::post('/berkas_ortu1', function () {
    $userData = session('user', []);
    // Update the 'ayah' data in the $user array with the submitted form data
    $userData['ayah']['name'] = $_POST['name'];
    $userData['ayah']['tempatlahir'] = $_POST['tempatlahir'];
    $userData['ayah']['agama'] = $_POST['agama'];
    $userData['ayah']['alamat'] = $_POST['alamat'];
    $userData['ayah']['rt'] = $_POST['rt'];
    $userData['ayah']['rw'] = $_POST['rw'];
    $userData['ayah']['no_telp'] = $_POST['no_telp'];
    $userData['ayah']['provinsi'] = $_POST['provinsi'];
    $userData['ayah']['kota'] = $_POST['kota'];
    $userData['ayah']['kecamatan'] = $_POST['kecamatan'];
    $userData['ayah']['kelurahan'] = $_POST['kelurahan'];
    $userData['ayah']['kode_pos'] = $_POST['kode_pos'];
    $userData['ayah']['pekerjaan'] = $_POST['pekerjaan'];
    $userData['ayah']['pendidikan_terakhir'] = $_POST['pendidikan_terakhir'];
    $userData['ayah']['penghasilan'] = $_POST['penghasilan'];

    $userData['registered'] = true;
    session(['loggedIn' => 1, 'user' => $userData]);
    return redirect('/success');
});

Route::get('/berkas_ortu2', function () use ($cities, $provinces) {
    $loggedIn = session('loggedIn', 0);
    return view('/input/input_data_ibu', ['state' => $loggedIn, 'cities' => $cities, 'provinces' => $provinces]);
});

Route::post('/berkas_ortu2', function () {
    $userData = session('user', []);
    // Update the 'ibu' data in the $user array with the submitted form data
    $userData['ibu']['name'] = $_POST['name'];
    $userData['ibu']['tempatlahir'] = $_POST['tempatlahir'];
    $userData['ibu']['agama'] = $_POST['agama'];
    $userData['ibu']['alamat'] = $_POST['alamat'];
    $userData['ibu']['rt'] = $_POST['rt'];
    $userData['ibu']['rw'] = $_POST['rw'];
    $userData['ibu']['no_telp'] = $_POST['no_telp'];
    $userData['ibu']['provinsi'] = $_POST['provinsi'];
    $userData['ibu']['kota'] = $_POST['kota'];
    $userData['ibu']['kecamatan'] = $_POST['kecamatan'];
    $userData['ibu']['kelurahan'] = $_POST['kelurahan'];
    $userData['ibu']['kode_pos'] = $_POST['kode_pos'];
    $userData['ibu']['pekerjaan'] = $_POST['pekerjaan'];
    $userData['ibu']['pendidikan_terakhir'] = $_POST['pendidikan_terakhir'];
    $userData['ibu']['penghasilan'] = $_POST['penghasilan'];

    $userData['registered'] = true;
    session(['loggedIn' => 1, 'user' => $userData]);
    return redirect('/success');
});

Route::get('/berkas_ortu3', function () use ($cities, $provinces) {
    $loggedIn = session('loggedIn', 0);
    return view('/input/input_data_wali', ['state' => $loggedIn, 'cities' => $cities, 'provinces' => $provinces]);
});

Route::post('/berkas_ortu3', function () {
    $userData = session('user', []);
    // Update the 'wali' data in the $user array with the submitted form data
    $userData['wali']['name'] = $_POST['name'];
    $userData['wali']['tempatlahir'] = $_POST['tempatlahir'];
    $userData['wali']['agama'] = $_POST['agama'];
    $userData['wali']['alamat'] = $_POST['alamat'];
    $userData['wali']['rt'] = $_POST['rt'];
    $userData['wali']['rw'] = $_POST['rw'];
    $userData['wali']['no_telp'] = $_POST['no_telp'];
    $userData['wali']['provinsi'] = $_POST['provinsi'];
    $userData['wali']['kota'] = $_POST['kota'];
    $userData['wali']['kecamatan'] = $_POST['kecamatan'];
    $userData['wali']['kelurahan'] = $_POST['kelurahan'];
    $userData['wali']['kode_pos'] = $_POST['kode_pos'];
    $userData['wali']['pekerjaan'] = $_POST['pekerjaan'];
    $userData['wali']['pendidikan_terakhir'] = $_POST['pendidikan_terakhir'];
    $userData['wali']['penghasilan'] = $_POST['penghasilan'];
    $userData['wali_picked'] = true;
    $userData['registered'] = true;
    session(['loggedIn' => 1, 'user' => $userData]);
    return redirect('/success');
});

Route::get('/success', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/success_message/success_page', ['state' => $loggedIn]);
});

Route::get('/success_already', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/success_message/success_already', ['state' => $loggedIn]);
});

Route::get('/jurusan', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/information/jurusan', ['state' => $loggedIn]);
});

Route::get('/masterdata', function() {
    $loggedIn = session('loggedIn', 0);
    return view('/admin/master_data', ['state' => $loggedIn]);
});

Route::get('/masterdata_ipa', function() {
    $loggedIn = session('loggedIn', 0);
    return view('/admin/master_data_ipa', ['state' => $loggedIn]);
});

Route::get('/masterdata_ips', function() {
    $loggedIn = session('loggedIn', 0);
    return view('/admin/master_data_ips', ['state' => $loggedIn]);
});

Route::get('/masterdata_bahasa', function() {
    $loggedIn = session('loggedIn', 0);
    return view('/admin/master_data_bahasa', ['state' => $loggedIn]);
});

Route::get('/profile_siswa', function() {
    $loggedIn = session('loggedIn', 0);
    return view('/admin/profile_siswa', ['state' => $loggedIn, 'user' => session('user')]);
});


Route::get('/pembayaran_siswa', function() {
    $loggedIn = session('loggedIn', 0);
    return view('/admin/pembayaran_siswa', ['state' => $loggedIn, 'user' => session('user')]);
});
