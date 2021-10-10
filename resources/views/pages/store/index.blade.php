@extends('layouts.admin')

@section('title')
   Store | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="btn-tambah">
          <a href="tambahStore.html">Tambah Toko</a>
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
              <th>Nama Toko</th>
              <th>Alamat Toko</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody></tbody>
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
                { data: 'address', name: 'address'},
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
