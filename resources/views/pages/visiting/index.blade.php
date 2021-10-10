@extends('layouts.admin')

@section('title')
   Visiting | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="btn-tambah">
          <a href="{{ route('visiting.create') }}">Tambah Visiting</a>
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
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Nama Toko</th>
              <th>Lokasi</th>
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
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id'},
                { data: 'user_id', name: 'user_id'},
                { data: 'created_at', name: 'created_at'},
                { data: 'shop_id', name: 'shop_id'},
                { data: 'lat', name: 'lat'},
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

