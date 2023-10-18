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

$user = [
    'username' => '',
    'password' => '',
    'registered' => false,
    'wali' => false,
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
    return view('/information/profile', ['user' => session('user'), 'state' => $loggedIn, 'wali' => false]);
});

Route::get('/home', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/information/home', ['state' => $loggedIn]);
});

Route::get('/login', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/auth/login', ['state' => $loggedIn, 'error' => '']);
});

Route::post('/login', function () use ($admin) {
    // Check if the submitted username and password match the stored user data
    if ($_POST['username'] === session('user')['username'] && $_POST['password'] === session('user')['password']) {
        session(['loggedIn' => 1, 'user' => session('user')]);
        return redirect('/home');
    } else if ($_POST['username'] === $admin['user'] && $_POST['password'] === $admin['pass']){
        session(['loggedIn' => 2, 'user' => $admin]);
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
        return redirect('/home');
    }
});

Route::get('/logout', function () {
    session()->forget('loggedIn');
    session()->forget('user');
    return redirect('/home');
});

Route::get('/pembayaran', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/transaction/pembayaran', ['state' => $loggedIn]);
});

Route::get('/berkas', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/input/input_data_diri', ['state' => $loggedIn]);
});

Route::get('/berkas_ortu1', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/input/input_data_ayah', ['state' => $loggedIn]);
});

Route::post('/berkas_ortu1', function () {
    // Update the 'ayah' data in the $user array with the submitted form data
    $user['ayah']['name'] = $_POST['name'];
    $user['ayah']['tempatlahir'] = $_POST['tempatlahir'];
    $user['ayah']['agama'] = $_POST['agama'];
    $user['ayah']['alamat'] = $_POST['alamat'];
    $user['ayah']['rt'] = $_POST['rt'];
    $user['ayah']['rw'] = $_POST['rw'];
    $user['ayah']['no_telp'] = $_POST['no_telp'];
    $user['ayah']['provinsi'] = $_POST['provinsi'];
    $user['ayah']['kota'] = $_POST['kota'];
    $user['ayah']['kecamatan'] = $_POST['kecamatan'];
    $user['ayah']['kelurahan'] = $_POST['kelurahan'];
    $user['ayah']['kode_pos'] = $_POST['kode_pos'];
    $user['ayah']['pekerjaan'] = $_POST['pekerjaan'];
    $user['ayah']['pendidikan_terakhir'] = $_POST['pendidikan_terakhir'];
    $user['ayah']['penghasilan'] = $_POST['penghasilan'];
    session(['loggedIn' => 1, 'user' => $user]);
    return redirect('/berkas_ortu2');
});

Route::get('/berkas_ortu2', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/input/input_data_ibu', ['state' => $loggedIn]);
});

Route::post('/berkas_ortu2', function () {
    // Update the 'ibu' data in the $user array with the submitted form data
    $user['ibu']['name'] = $_POST['name'];
    $user['ibu']['tempatlahir'] = $_POST['tempatlahir'];
    $user['ibu']['agama'] = $_POST['agama'];
    $user['ibu']['alamat'] = $_POST['alamat'];
    $user['ibu']['rt'] = $_POST['rt'];
    $user['ibu']['rw'] = $_POST['rw'];
    $user['ibu']['no_telp'] = $_POST['no_telp'];
    $user['ibu']['provinsi'] = $_POST['provinsi'];
    $user['ibu']['kota'] = $_POST['kota'];
    $user['ibu']['kecamatan'] = $_POST['kecamatan'];
    $user['ibu']['kelurahan'] = $_POST['kelurahan'];
    $user['ibu']['kode_pos'] = $_POST['kode_pos'];
    $user['ibu']['pekerjaan'] = $_POST['pekerjaan'];
    $user['ibu']['pendidikan_terakhir'] = $_POST['pendidikan_terakhir'];
    $user['ibu']['penghasilan'] = $_POST['penghasilan'];
    $user['registered'] = true;
    session(['loggedIn' => 1, 'user' => $user]);
    return redirect('/success');
});

Route::get('/berkas_ortu3', function () {
    $loggedIn = session('loggedIn', 0);
    return view('/input/input_data_wali', ['state' => $loggedIn]);
});

Route::post('/berkas_ortu3', function () {
    // Update the 'wali' data in the $user array with the submitted form data
    $user['wali']['name'] = $_POST['name'];
    $user['wali']['tempatlahir'] = $_POST['tempatlahir'];
    $user['wali']['agama'] = $_POST['agama'];
    $user['wali']['alamat'] = $_POST['alamat'];
    $user['wali']['rt'] = $_POST['rt'];
    $user['wali']['rw'] = $_POST['rw'];
    $user['wali']['no_telp'] = $_POST['no_telp'];
    $user['wali']['provinsi'] = $_POST['provinsi'];
    $user['wali']['kota'] = $_POST['kota'];
    $user['wali']['kecamatan'] = $_POST['kecamatan'];
    $user['wali']['kelurahan'] = $_POST['kelurahan'];
    $user['wali']['kode_pos'] = $_POST['kode_pos'];
    $user['wali']['pekerjaan'] = $_POST['pekerjaan'];
    $user['wali']['pendidikan_terakhir'] = $_POST['pendidikan_terakhir'];
    $user['wali']['penghasilan'] = $_POST['penghasilan'];
    $user['registered'] = true;

    session(['loggedIn' => 1, 'user' => $user]);
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
