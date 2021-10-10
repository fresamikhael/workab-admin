@extends('layouts.admin')

@section('title')
   Product | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="btn-tambah">
        <a href="{{ route('product.create') }}">Tambah Produk</a>
    </div>
    <table
        id="crudTable"
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
        </tbody>
    </table>
</main>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide:true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id'},
                { data: 'name', name: 'name'},
                { data: 'shop_id', name: 'shop_id'},
                { data: 'stock', name: 'stock'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                }
            ]
        })
    </script>
@endpush
