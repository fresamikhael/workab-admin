@extends('layouts.admin')

@section('title')
   Attendance | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="btn-tambah">
        <a href="tambahAttendance.html">Tambah Kehadiran</a>
    </div>
    <table
        id="datatables"
        class="table table-striped table-bordered"
        width="100%"
        cellspacing="0"
    >
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Hendra Prasetyo contoh</td>
            <td>12 September 2021</td>
            <td>14:30</td>
            <td>Jakarta</td>
            <td>Check Out</td>
            <td>
            <a href="detailAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/editlogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Edit</span>
            </a>
            <a href="" class="btn-aksi">
                <img
                src="assets/icon/deletelogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Hapus</span>
            </a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Hendra Prasetyo contoh</td>
            <td>12 Oktober 2021</td>
            <td>14:30</td>
            <td>Jakarta</td>
            <td>Check Out</td>
            <td>
            <a href="detailAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/editlogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Edit</span>
            </a>
            <a href="" class="btn-aksi">
                <img
                src="assets/icon/deletelogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Hapus</span>
            </a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Hendra Prasetyo contoh</td>
            <td>12 Januari 2022</td>
            <td>14:30</td>
            <td>Jakarta</td>
            <td>Check Out</td>
            <td>
            <a href="detailAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/editlogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Edit</span>
            </a>
            <a href="" class="btn-aksi">
                <img
                src="assets/icon/deletelogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Hapus</span>
            </a>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Hendra Prasetyo contoh</td>
            <td>12 Januari 2021</td>
            <td>14:30</td>
            <td>Jakarta</td>
            <td>Check Out</td>
            <td>
            <a href="detailAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editAttendance.html" class="btn-aksi">
                <img
                src="assets/icon/editlogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Edit</span>
            </a>
            <a href="" class="btn-aksi">
                <img
                src="assets/icon/deletelogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Hapus</span>
            </a>
            </td>
        </tr>
        </tbody>
    </table>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="assets/css/attendance.css" />
@endpush
