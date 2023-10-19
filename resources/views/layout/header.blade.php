<nav class="navbar navbar-expand-lg navbar-light mb-5" style="background-color: #0c84a4;">
    <div class="container">

        <a class="navbar-brand rounded" style="background-color: #ffffff" href="{{ url('home') }}">
            <img src="{{ asset('images/logo_full.png') }}" width="250px">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if ($state == 0)
                    <!-- guest -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('jurusan') }}">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Biaya</a>
                    </li>
                @elseif ($state == 1)
                    <!-- user -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pembayaran') }}">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('berkas') }}">Berkas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Status</a>
                    </li>
                @else
                    <!-- admin -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('masterdata') }}">Master Data</a>
                    </li>
                @endif

                <li class="nav-item">
                    @if (!$state) <!-- todo! change condition -->
                        <a href="{{ url('login') }}" class="btn btn-primary rounded-pill px-4 border-0" style="background-color: #ffd6a4; color: black; font-size: 24px; font-weight: 500;">
                            Login
                        </a>
                    @else
                        <a href="{{ url('logout') }}" class="btn btn-primary rounded-pill px-4 border-0" style="background-color: #FFA4A4; color: white; font-size: 24px; font-weight: 500;">
                            Logout
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
