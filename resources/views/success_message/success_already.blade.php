@extends('layout.template')
@section('title', 'Already Input')
@section('content')

    <style>
        .bg-success {
            background-color: #CCFFD1 !important;
            border-radius: 100%;
            width: 20%;
            height: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            aspect-ratio: 1/1;
        }
    </style>

    <div class="container d-flex flex-column align-items-center text-center my-5">
        <div class="bg-success my-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="175" height="175" fill="#0CA41B" class="bi bi-check-lg"
                viewBox="0 0 16 16">
                <path
                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
            </svg>
        </div>
        <div style="max-width: 25%;" class="mt-4">
            <h4>
                Data Anda sudah diterima!
                Apabila merasa ada data yang salah
                dapat langsung kontak ke admin.
            </h4>
        </div>
    </div>
@endsection
