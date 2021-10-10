@extends('layouts.admin')

@section('title')
   Create Attendance | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('attendance.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="detail">
            <div class="detail-judul">Nama Lengkap</div>
            <div class="detail-keterangan">
            <input type="text" id="user_id" name="user_id" class="form-control" />
            </div>
        </div>
        <div class="detail">
            <div class="detail-judul">Waktu</div>
            <div class="detail-keterangan">
            <input type="text" id="time" name="time" class="form-control" />
            </div>
        </div>
        <div class="detail">
            <div class="detail-judul">Tipe</div>
            <div class="detail-keterangan">
            <input type="text" id="type" name="type" class="form-control" />
            </div>
        </div>
        <div class="detail">
            <div class="detail-judul">Latitude</div>
            <div class="detail-keterangan">
            <input type="text" id="lat" name="lat" class="form-control" />
            </div>
        </div>
        <div class="detail">
            <div class="detail-judul">Longtitude</div>
            <div class="detail-keterangan">
            <input type="text" id="long" name="long" class="form-control" />
            </div>
        </div>

        <button type="submit" class="btn-save">Save</button>
        <div class="btn-kembali">
            <a href="{{ route('attendance.index') }}">Kembali</a>
        </div>
        </form>
    </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="/assets/css/tambahAttendanceVisiting.css" />
@endpush
