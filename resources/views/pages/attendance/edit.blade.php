@extends('layouts.admin')

@section('title')
   Attendance | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-9">
                    <div class="detail">
                        <div class="detail-judul">Nama Lengkap</div>
                        <div class="detail-keterangan">
                        <input type="text" value="{{ $item->user_id }}" id="user_id" name="user_id" class="form-control" />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Waktu</div>
                        <div class="detail-keterangan">
                        <input type="text" value="{{ $item->time }}" id="time" name="time" class="form-control" />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Tipe</div>
                        <div class="detail-keterangan">
                        <input type="text" value="{{ $item->type }}" id="type" name="type" class="form-control" />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Latitude</div>
                        <div class="detail-keterangan">
                        <input type="text" value="{{ $item->lat }}" id="lat" name="lat" class="form-control" />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Longtitude</div>
                        <div class="detail-keterangan">
                        <input type="text" value="{{ $item->long }}" id="long" name="long" class="form-control" />
                        </div>
                    </div>

                    <button type="submit" class="btn-save">
                        Save
                    </button>
                    <div class="btn-kembali">
                        <a href="{{ route('attendance.index') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="/assets/css/editAttendanceVisiting.css" />
@endpush
