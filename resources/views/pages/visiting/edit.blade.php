@extends('layouts.admin')

@section('title')
   Edit Visiting | Admin Dashboard
@endsection

@section('content')
      <main>
        <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('visiting.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="detail">
                <div class="detail-judul">Nama Lengkap</div>
                <div class="detail-keterangan">
                <input type="text" id="user_id" name="user_id" value="{{ $item->user_id }}" />
                </div>
            </div>
            <div class="detail">
                <div class="detail-judul">Nama Toko</div>
                <div class="detail-keterangan">
                <input type="text" id="shop_id" name="shop_id" value="{{ $item->shop_id }}" />
                </div>
            </div>
            <div class="detail">
                <div class="detail-judul">Latitude</div>
                <div class="detail-keterangan">
                <input type="text" id="lat" name="lat" value="{{ $item->lat }}" />
                </div>
            </div>
            <div class="detail">
                <div class="detail-judul">Longtitude</div>
                <div class="detail-keterangan">
                <input type="text" id="long" name="long" value="{{ $item->lat }}" />
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
    <link rel="stylesheet" href="/assets/css/editAttendanceVisiting.css" />
@endpush
