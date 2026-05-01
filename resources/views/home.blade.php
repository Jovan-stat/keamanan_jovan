@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php
                        $hour = date('H');
                        if ($hour < 11) $greet = "Selamat Pagi";
                        elseif ($hour < 18) $greet = "Selamat Siang";
                        else $greet = "Selamat Malam";
                    @endphp
                    <h5>{{ $greet }}, {{ Auth::user()->name }} 👋</h5>
                    <p>
                        Halo, <strong>{{ Auth::user()->name }}</strong>
                    </p>
                    <hr>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                    <p>
                        <strong>Status Verifikasi:</strong>
                        @if (Auth::user()->hasVerifiedEmail())
                            <span class="badge badge-success">Terverifikasi</span>
                        @else
                            <span class="badge badge-danger">Belum Verifikasi</span>
                        @endif
                    </p>
                    <hr>
                    <p class="text-muted" style="font-size:14px;">
                        Sistem ini menggunakan Laravel Authentication dengan fitur keamanan seperti hashing password, email verification, dan password reset.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
