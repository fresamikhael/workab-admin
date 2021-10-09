@extends('layouts.admin')

@section('title')
   Visiting | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="btn-tambah">
          <a href="tambahVisiting.html">Tambah Visiting</a>
        </div>
        <table
          id="datatables"
          class="table table-bordered"
          width="100%"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Nama Toko</th>
              <th>Lokasi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Hendra Prasetyo contoh</td>
              <td>12 September 2021</td>
              <td>Sumber Makmur</td>
              <td>Jakarta</td>
              <td>
                <a href="detailVisiting.html" class="btn-aksi">
                  <img
                    src="assets/icon/detaillogo.svg"
                    alt=""
                    width="18px"
                    height="19px"
                  />
                  <span class="tooltip">Detail</span>
                </a>
                <a href="editVisiting.html" class="btn-aksi">
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
    <link rel="stylesheet" href="assets/css/user.css" />

    <link rel="stylesheet" href="assets/datatables/datatables.min.css" />
    <link
      rel="stylesheet"
      href="assets/datatables/dataTables.bootstrap4.min.css"
    />
@endpush

@push('addon-script')
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/datatables/datatables.min.js"></script>
    <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>
@endpush

