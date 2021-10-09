@extends('layouts.app')

@section('title')
   Attendance | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="container">
          <form action="">
            <div class="detail">
              <div class="detail-judul">Nama Lengkap</div>
              <div class="detail-keterangan">
                <input type="text" value="Hendra Contoh" id="" name="" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Tanggal</div>
              <div class="detail-keterangan">
                <input type="date" value="" id="" name="" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Nama Toko</div>
              <div class="detail-keterangan">
                <input type="Text" value="Sumber Makmur" id="" name="" />
              </div>
            </div>
            <div class="detail">
              <div class="detail-judul">Lokasi</div>
              <div class="detail-keterangan">
                <select id="" name="">
                  <option value="" disabled>Pilih Lokasi :</option>
                  <option value="" selected>Jakarta</option>
                </select>
              </div>
            </div>

            <button type="submit" class="btn-save">Save</button>
            <div class="btn-kembali">
              <a href="visiting.html">Kembali</a>
            </div>
          </form>
        </div>
      </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/editAttendanceVisiting.css" />
@endpush