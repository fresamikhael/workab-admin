@extends('layouts.app')

@section('title')
   Detail Visiting | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="container">
        <form action="">
        <div class="detail">
            <div class="detail-judul">Nama Lengkap</div>
            <div class="detail-keterangan">
            <input
                type="text"
                value="Hendra Contoh"
                id=""
                name=""
                disabled
            />
            </div>
        </div>
        <div class="detail">
            <div class="detail-judul">Tanggal</div>
            <div class="detail-keterangan">
            <input type="text" value="12/01/2021" id="" name="" disabled />
            </div>
        </div>
        <div class="detail">
            <div class="detail-judul">Nama Toko</div>
            <div class="detail-keterangan">
            <input
                type="Text"
                value="Sumber Makmur"
                id=""
                name=""
                disabled
            />
            </div>
        </div>
        <div class="detail">
            <div class="detail-judul">Lokasi</div>
            <div class="detail-keterangan">
            <input type="text" id="" name="" value="Jakarta" disabled />
            </div>
        </div>

        <div class="btn-edit-detail">
            <a href="editVisiting.html">Edit</a>
        </div>
        <div class="btn-kembali">
            <a href="visiting.html">Kembali</a>
        </div>
        </form>
    </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/detailAttendanceVisiting.css" />
@endpush
