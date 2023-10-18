@extends('layout.template')
@section('title', 'Home')
@section('content')

<style>
    .card {
        transition: 0.3s;
        height: 18rem;
    }
    .card:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
</style>

<div class="container d-flex flex-column align-items-center text-center my-5">
    <h2>
        Welcome to SMA Atma Budika!
    </h2>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Bahasa
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam eget bibendum bibendum, velit elit bibendum ipsum, nec bibendum ipsum ipsum vitae velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        IPS
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam eget bibendum bibendum, velit elit bibendum ipsum, nec bibendum ipsum ipsum vitae velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        IPA
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam eget bibendum bibendum, velit elit bibendum ipsum, nec bibendum ipsum ipsum vitae velit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
