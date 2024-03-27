@extends('layouts.main')

@section('isi')
    @auth
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">Hello, {{ auth()->user()->name }}</div>

                        <div class="card-body">
                            <p>Welcome to your elegant dashboard. Explore and enjoy!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">Welcome, this is {{ $page }} page.</div>

                    <div class="card-body">
                        <p>Mata Kuliah Pengujian Perangkat Lunak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
