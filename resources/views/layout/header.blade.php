<nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: #0c84a4" >
    <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <div style="background-color: white; margin: 0px 5rem 0px 5rem;" class="rounded px-1 py-1">
            <a class="navbar-brand" href="#" ><img src="{{ asset('images/logo_full.png') }}" width="250px"></a>
        </div>
    </div>

    <ul class="nav nav-pills align-content-center mx-5">
        @if (!$state)
            <!-- guest -->
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ url('home') }}">Home</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ url('jurusan') }}">Jurusan</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Biaya</a>
            </li>
        @elseif ($state)
            <!-- user -->
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ url('pembayaran') }}">Pembayaran</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{ url('berkas') }}">Berkas</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Status</a>
            </li>
        @else

            <!-- admin -->
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Data Pengguna</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Kelola Pengguna</a>
            </li>
        @endif

        <div class="mx-2 my-0 py-1">
        @if (!$state) <!-- todo! change condition -->
            <a href="{{ url('login') }}" class="btn btn-primary rounded-pill align-content-center border-0"
            style="background-color: #ffd6a4; color: black; font-size: 24px; font-weight: 500;">
                <p class="mx-4 my-0">Login</p>
            </a>
        @else
            <a href="{{ url('logout') }}" class="btn btn-primary rounded-pill align-content-center border-0"
            style="background-color: #FFA4A4; color: white; font-size: 24px; font-weight: 500;">
                <p class="mx-4 my-0">Logout</p>
            </a>
        @endif
        </div>
    </ul>
</nav>
