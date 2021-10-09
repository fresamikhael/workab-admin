@extends('layouts.admin')

@section('title')
   Product | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="btn-tambah">
        <a href="tambahProduct.html">Tambah Produk</a>
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
            <th>Nama Produk</th>
            <th>Nama Toko</th>
            <th>Jumlah Stock</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
            <td>1</td>
            <td>Ban Tubles 123</td>
            <td>Sumber Makmur</td>
            <td>120</td>
            <td>
            <a href="detailProduct.html" class="btn-aksi">
                <img
                src="assets/icon/detaillogo.svg"
                alt=""
                width="18px"
                height="19px"
                />
                <span class="tooltip">Detail</span>
            </a>
            <a href="editProduct.html" class="btn-aksi">
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
    <link rel="stylesheet" href="assets/datatables/datatables.min.css" />
    <link
      rel="stylesheet"
      href="assets/datatables/dataTables.bootstrap4.min.css"
    />
    <link rel="stylesheet" href="assets/css/user.css" />
@endpush

@push('addon-script')
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/datatables/datatables.min.js"></script>
    <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>
@endpush
