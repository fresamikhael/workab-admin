@extends('layouts.admin')

@section('title')
   Attendance | Admin Dashboard
@endsection

@section('content')
<main>
    <div class="btn-tambah">
        <a href="{{ route('attendance.create') }}">Tambah Kehadiran</a>
    </div>
    <table
        id="crudTable"
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
                { data: 'user_id', name: 'user_id'},
                { data: 'created_at', name: 'created_at'},
                { data: 'time', name: 'time'},
                { data: 'lat', name: 'lat'},
                { data: 'type', name: 'type'},
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
