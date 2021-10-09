@extends('layouts.app')

@section('title')
   Admin Dashboard
@endsection

@section('content')
<main>
    <div class="dasboard-cards">
        <div class="row atas">
            <div class="col-6">
                <div class="card atas">
                    <div class="card-header">Attendance</div>
                    <div class="card-body">123</div>
                </div>
            </div>
            <div class="col-6">
                <div class="card atas">
                    <div class="card-header">Visiting</div>
                    <div class="card-body">0</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card bawah">
                    <div class="card-header">User</div>
                    <div class="card-body">0</div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bawah">
                    <div class="card-header">Store</div>
                    <div class="card-body">0</div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bawah">
                    <div class="card-header">Product</div>
                    <div class="card-body">0</div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/dasboard.css" />
@endpush
