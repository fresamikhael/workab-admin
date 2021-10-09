@extends('layouts.admin')

@section('title')
   Detail User | Admin Dashboard
@endsection

@section('content')
<main>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="detail">
                    <div class="detail-foto">
                        <img src="assets/img/avatar.jpg" alt="" width="140px" height="150px">
                    </div>
                </div>
                <div class="btn-edit-detail">
                    <a href="editProfile.html" >Edit</a>
                </div>
                <div class="btn-kembali">
                    <a href="user.html" >Kembali</a>
                </div>

            </div>
            <div class="col-md-9">
                <div class="detail">
                    <div class="detail-judul">ID User</div>
                    <div class="detail-keterangan">123456</div>
                </div>
                <div class="detail">
                    <div class="detail-judul">Nama Lengkap</div>
                    <div class="detail-keterangan">Hendra Contoh</div>
                </div>
                <div class="detail">
                    <div class="detail-judul">NIK</div>
                    <div class="detail-keterangan">12345677890</div>
                </div>
                <div class="detail">
                    <div class="detail-judul">Jenis Kelamin</div>
                    <div class="detail-keterangan">Laki-laki</div>
                </div>
                <div class="detail">
                    <div class="detail-judul">Jabatan</div>
                    <div class="detail-keterangan">Marketing</div>
                </div>
                <div class="detail">
                    <div class="detail-judul">Email</div>
                    <div class="detail-keterangan">hendra@co.com</div>
                </div>
                <div class="detail">
                    <div class="detail-judul">Username</div>
                    <div class="detail-keterangan">HendraC</div>
                </div>
                <div class="detail">
                    <div class="detail-judul">Password</div>
                    <div class="detail-keterangan">
                        <input type="password" value="1234567" disabled>
                    </div>
            </div>
        </div>
    </div>

</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/detailProfile.css">
@endpush
