@extends('layouts.app')

@section('title')
   User | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="btn-tambah">
          <a href="tambahUser.html">Tambah User</a>
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
              <th>E-mail</th>
              <th>Jabatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Hendra Prasetyo contoh</td>
              <td>hendra@contoh.com</td>
              <td>Executive Marketing</td>
              <td>
                <a href="detailProfile.html" class="btn-aksi">
                  <img
                    src="assets/icon/detaillogo.svg"
                    alt=""
                    width="18px"
                    height="19px"
                  />
                  <span class="tooltip">Detail</span>
                </a>
                <a href="editProfile.html" class="btn-aksi">
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

