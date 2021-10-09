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
                            <input
                                type="text"
                                value="Hendra Contoh"
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">
                            Tanggal dan Waktu
                        </div>
                        <div class="detail-keterangan">
                            <input
                                type="datetime-local"
                                value=""
                                id=""
                                name=""
                            />
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Lokasi</div>
                        <div class="detail-keterangan">
                            <select id="" name="">
                                <option value="" disabled>
                                    Pilih Lokasi :
                                </option>
                                <option value="" selected>
                                    Jakarta
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="detail-judul">Keterangan</div>
                        <div class="detail-keterangan">
                            <select id="" name="">
                                <option value="" disabled>
                                    Pilih Keterangan :
                                </option>
                                <option value="" selected>
                                    Check In
                                </option>
                                <option value="">Check Out</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn-save">
                        Save
                    </button>
                    <div class="btn-kembali">
                        <a href="attendance.html">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/editAttendanceVisiting.css" />
@endpush
