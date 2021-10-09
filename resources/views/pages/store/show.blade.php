@extends('layouts.app')

@section('title')
   Detail Store | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="container">
          <form action="">
            <div class="detail">
              <div class="detail-judul">ID Toko</div>
              <div class="detail-keterangan">
                <input type="text" value="1" id="" name="" disabled />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Toko</div>
              <div class="detail-keterangan">
                <input
                  type="text"
                  value="Sumber Makmur"
                  id=""
                  name=""
                  disabled
                />
              </div>
            </div>

            <div class="detail">
              <div class="detail-judul">Alamat Toko</div>
              <div class="detail-keterangan">
                <textarea type="number" value="" id="" name="" disabled>
Jl.ABCD NO.12</textarea
                >
              </div>
            </div>

            <div class="btn-edit-detail">
              <a href="editStore.html">Edit</a>
            </div>
            <div class="btn-kembali">
              <a href="store.html">Kembali</a>
            </div>
          </form>
        </div>
      </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/detailAttendanceVisiting.css" />
@endpush
